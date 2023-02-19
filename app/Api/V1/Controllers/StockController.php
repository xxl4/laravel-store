<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

/**
 * stock resource representation
 * @Resource("Stock", uri="/stock")
 */
class StockController extends Controller {

    use Helpers;
    /*
     * 上架库存
     * @Versions({"v1"})
     * @Request("isbn=isbn&seat=seat&fineness=fineness", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={})
    */
    public function add(Request $request) {
        $isbn = $request->input("isbn"); // ISBN 号
        $seat = $request->input("seat"); // 库位
        $fineness = $request->input("fineness"); //成色

        //$db_name = env("DB_DATABASE");

        if(strlen($seat)!=6) return 2; // 不处理长度为6的数据 (货架号错误)

        //isbn 映射
        $row = [];
        $isbnMap = \App\Models\Nosql\MultiIsbn::where("isbn", $isbn)->select(["main"])->first();
        if(!is_null($isbnMap)) {
            $isbn = $isbnMap->main;
        }
        //违禁书
        $blackIsbn = \App\Models\Sd\BlackList::where("name", $isbn)->where("type","isbn")->first();
        if(!is_null($blackIsbn)) {
            return 11;
        }
        //无批次
        $batch = \App\Models\Nosql\SdEnglish::where("isbn",$isbn)->select(["batch"])->first();
        if(is_null($batch)) return 4;
        //秒杀不上架
        $seatMark = substr($seat,0,1);
        if($seatMark==3 || $seatMark==2) {

        }

        //套装书
        $blackIsbn = \App\Models\Sd\BlackList::where("name", $isbn)->where("type","3")->first();
        if(!is_null($blackIsbn)) {
            return 5;
        }

        //检查商品是否存在
        $code = $isbn."_".$fineness;
        $variant = \App\Models\Sd\GoodsVariant::where("code", $code)->first();
        if(is_null($variant)) return 1; //无数据

        $goods = \App\Models\Sd\Good::where("goods_id", $variant->goods_id)->select(["goods_weight","seat","goods_img"])->first();
        if(is_null($goods)) return 1; //无数据

        //无图
        if(empty($goods->goods_img)) return 7;
        //无重量
        if(intval($goods->goods_weight)==0) return 9;
        //属性不全
        $CacheGoods = Utils::CacheGoods($variant->goods_id);
        if(count($CacheGoods['attr']) < 4) return 8;
        //是否有年龄
        if(empty($CacheGoods['more']['age'])) return 8;
        //官网架号
        //$qty_count = \App\Models\Sd\IncrementQtyRecord::where("seat", $seat)->count();
        $sql="select count(id) as num from increment_qty_record where seat='".$seat."'";
        $qty_count = DB::connection('no_mysql')->select($sql);
        //return var_dump($qty_count);
        if($qty_count['0']->num ==0 || $seatMark=='9') {
            $is_insert = true;
            $status = 0;
            if($seatMark =='9') {
                if($qty_count > 0) {
                    //$qty = \App\Models\Sd\IncrementQtyRecord::where("seat", $seat)->select(['id'])->first();
                    $sql="select id from increment_qty_record where seat='".$seat."' LIMIT 1";
                    $qty = DB::connection('no_mysql')->select($sql);
                    if(!is_null($qty)) {
                        if($variant->goods_id==$qty->id) return 3;
                    }
                }
                $status = 1;
            }else{
                if($seatMark=='8') {
                    $status = 1;
                }
            }
            if($is_insert) {
                DB::beginTransaction(); //开启事务
                try {

                    $date = date('Y-m-d H:i:s');
                    $sql = "INSERT INTO increment_qty_record (seat,id,status,created) VALUES(?,?,?,?)";
                    //$db->exec($sql);
                    //echo $sql;
                    DB::connection('no_mysql')->insert($sql, [$seat, $variant->id, $status, $date]);
                    /*
                    $sql = "UPDATE `sd_goods` SET seat=JSON_ARRAY_APPEND(IFNULL(seat, '[]'), '$', '$seat') WHERE goods_id=$goods_id";
                    $db->exec($sql);
                    */
                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();
                    throw $e;
                }
            }
            if($status==0) {
                if($seatMark=='3') {
                    Redis::lpush("taobao_shelf", $seat);
                }
                elseif($seatMark=='2') {
                    Redis::lpush("tmall_shelf", $seat);
                }else{
                    Redis::publish("onshelf", $seat);
                }
                
            }
            return 0;
        }else{
            //$qty = \App\Models\Sd\IncrementQtyRecord::where("seat", $seat)->select(['id'])->first();
            $sql="select id from increment_qty_record where seat='".$seat."' LIMIT 1";
            $qty = DB::connection('no_mysql')->select($sql);
            //var_dump($qty);
            //return var_dump($qty);
            //return $variant->goods_id."--".$qty['0']->id;
            if($variant->goods_id==$qty['0']->id) {

                DB::beginTransaction(); //开启事务
                try {
                    $status = $seatMark == '8' ? 1 : 0;
                    $date = date('Y-m-d H:i:s');
                    $sql = "INSERT INTO increment_qty_record (seat,id,status,created) VALUES(?,?,?,?)";
                    //$db->exec($sql);
                    //echo $sql;
                    DB::connection('no_mysql')->insert($sql, [$seat, $variant->id, $status, $date]);
                    var_dump(DB::connection('no_mysql')->getPdo());
                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();
                    throw $e;
                }

                if($status==0) {
                    if($seatMark=='3') {
                        Redis::lpush("taobao_shelf", $seat);
                    }
                    elseif($seatMark=='2') {
                        Redis::lpush("tmall_shelf", $seat);
                    }else{
                        Redis::publish("onshelf", $seat);
                    }
                    
                }
                return 0;

            } else {
                return 3;
            } 

        }

        //限制isbn复本量3
        //累加至冗余库存
        //记录库存
        //货架占用


        return $request->all();
    }

    /*
     * 下架库存
     * @Versions({"v1"})
     * @Request()
     * @Response()
    */
    public function down(Request $request) {
        $seat = $request->input("seat");
        $initial = substr($seat,0,1);
        //空货架
        $sql="select id from increment_qty_record where seat='".$seat."' LIMIT 1";
        $goods = DB::connection('no_mysql')->selectOne($sql);
        //var_dump($goods, $seat);
        if(empty($goods)) return 2;
        $variant_id = $goods->id;

        $variant = \App\Models\Sd\GoodsVariant::where("id", $variant_id)->select(['goods_id'])->first();
        if(is_null($variant)) return 2;
        $goods_id = $variant->goods_id;


        $CacheGoods = Utils::CacheGoods($goods_id);
        switch($initial) {
            case 1: //微店
                break;
            case 2: //天猫
                $sql = 'SELECT isbn,tid,sku->\'$."'.$goods_id.'"\' sku from nosql.tmall_map where JSON_OVERLAPS(JSON_KEYS(sku),"'.$goods_id.'")';
                $row = DB::connection('no_mysql')->selectOne($sql);
                Cache::store('memcached')->setPrefix('');
                $isbns = Cache::store('memcached')->get("last_live_isbn2");
                if(!empty($row)) {
                    if (false !== $isbns && isset($isbns[$row->isbn])) {
                        return 12;
                    }
                }
                if(is_null($row)) {
                    $this->offsale($seat, $initial, $goods_id);
                    return 0;
                }else{
                    $url = "http://39.100.242.115/app/Mall.php";
                    $sku = str_replace('"', '', $row->sku);
                    $response = Utils::http_post_data($url,['m'=>'decrQty', 'tid'=>$row->tid,'sku'=>$sku]);
                    if($response=='0') {
                        $this->offsale($seat, $initial, $goods_id);
                        return 0;
                    }else{
                        return 10;
                    }
                }
                break;
            case 3: //淘宝
                $sql = 'SELECT isbn,tid,sku->\'$."'.$goods_id.'"\' sku from nosql.taobao_map where JSON_OVERLAPS(JSON_KEYS(sku),"'.$goods_id.'")';
                $row = DB::connection('no_mysql')->selectOne($sql);
                //Cache::store("memcached")
                Cache::store('memcached')->setPrefix('');
                $isbns = Cache::store('memcached')->get("last_live_isbn3");
                if(!empty($row)) {
                    if (false !== $isbns && isset($isbns[$row->isbn])) {
                        return 12;
                    }
                }
                if(is_null($row)) {
                    $this->offsale($seat, $initial, $goods_id);
                    return 0;
                }else{
                    $url = "http://39.100.242.115/app/Shop.php";
                    $sku = str_replace('"', '', $row->sku);
                    $response = Utils::http_post_data($url,['m'=>'decrQty', 'tid'=>$row->tid,'sku'=>$sku]);
                    if($response=='0') {
                        $this->offsale($seat, $initial, $goods_id);
                        return 0;
                    }else{
                        return 10;
                    }
                }
                break;
            case 4: //京东
                $url = "http://jos.258sd.com/jos/good/offshelf?goods_id=".$goods_id;
                $res = file_get_contents($url);
                if($res==10) return $res;
                $this->offsale($seat, $initial, $goods_id);
                break;
            case 5: //抖店
                $url = "http://v2.258sd.com/doudian/good/offshelf?goods_id=".$goods_id;
                $res = file_get_contents($url);
                if($res==10) return $res;
                $this->offsale($seat, $initial, $goods_id);
                break;
            case 9:
                break;
            default:
            
        }
        return 0;

        //平台数据下架

        //自己平台数据下架

        
    }

    private function offsale($seat, $seatType,  $goods_id)
    {
        $CacheGoods = Utils::CacheGoods($goods_id);
        $code = $CacheGoods['goods']['isbn']."_".$goods_id;
        if ($seatType == '9') {
            $row = \App\Models\Sd\GoodsVariant::where("goods_id", $goods_id)->where("code", $code)->sleect(["redundant_num", "seat"])->first();
            if(!is_null($row)) {
                $number = $row->redundant_num;
                $seats = $row->seat;
            }
            
        } else {
            $number = 0;
            $seats = \App\Models\Sd\GoodsVariant::where("goods_id", $goods_id)->where("code", $code)->select(["seat"])->first();
        }
        if (null == $seats) {
            $seats = [];
        } else {
            $seats = json_decode($seats);
        }
        $seats_ = [];
        foreach ($seats as $seat_) {
            if ($seat_ == $seat && !isset($picked)) {
                $picked = true;
            } else {
                array_push($seats_, strval($seat_));
            }
        }
        $seats_ = json_encode($seats_);
        \App\Models\Sd\IncrementQtyRecord::where('seat', $seat)->limit(1)->delete();
        return true;
    }

}