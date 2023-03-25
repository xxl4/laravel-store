<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:add:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '基于机构店铺的商品上传';

    private $prod_id = 0;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ///
        //$org_id = $this->argument("org_id");
        $store = $this->argument('store');
        $this->prod_id = $this->argument("prod_id");

        $goods_upload_log = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->where('shop_id', $store->id)->first();
        if(!is_null($goods_upload_log)) {
            $this->info("对应的的prod id 已在".$goods_upload_log->created_at."完成了上传");
            echo "对应的的prod id".$this->prod_id." 已存在\r\n";
            return false;
        }
        //检查对应的商品是否在线和存在
        $prod = \App\Models\Product::where("prod_id", $this->prod_id)->first();
        if(is_null($prod)) {
            $this->info("对应的的prod id 不存在");
            echo "对应的的prod id ".$this->prod_id." 不存在\r\n";
            return false;
        }
        //获取对应商品的内容，完成商品的数据更新
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //获取到店铺上新的配置数据内容
        $storeConfig = Utils::GetShopConfig($store->id);

        //var_dump($storeConfig);
        //@link https://op.jinritemai.com/docs/api-docs/14/249
        $req = new \ProductAddV2Request();
        $p = new \ProductAddV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        
        $p->outer_product_id = $this->prod_id;
        $p->product_type = 0;
        $p->category_leaf_id = $prod->category_id;
        //$p->category_leaf_id = 23430;
        $p->name = $prod->prod_name;
        $p->recommend_remark = $prod->brief;

        //$p->standard_brand_id = 596120136;

        $p->pay_type = $storeConfig['pay_type']; // 从配置中心获取
        $p->reduce_type = $storeConfig['reduce_type']; 
        //$p->assoc_ids = ""; //todo
        $p->freight_id = $storeConfig['freight_id']; // 调用默认的快递配送方式
        $p->weight = $prod->weight;
        $p->weight_unit = $storeConfig['weight_unit'];
        $p->delivery_delay_day = $storeConfig['delivery_delay_day'];
        $p->presell_type = $storeConfig['presell_type'];
        //$p->presell_delay = $storeConfig['presell_delay'];
        $p->supply_7day_return = $storeConfig['supply_7day_return'];
        $p->mobile = $storeConfig['mobile'];
        $p->maximum_per_order = $storeConfig['maximum_per_order'];
        $p->limit_per_buyer = $storeConfig['limit_per_buyer'];
        $p->minimum_per_order = $storeConfig['minimum_per_order'];
        $p->commit = true;
        //@link https://op.jinritemai.com/docs/question-docs/92/2459
        $p->standard_brand_id = $storeConfig['brand_default_id'];

        //get sku
        $skus = \App\Models\Sku::where("prod_id", $prod->prod_id)->get();
        if(is_null($skus)) return false;
        //var_dump($skus);
        $specs = "";
        //$pic = "https://p3-aio.ecombdimg.com/obj/ecom-shop-material/wnOrEgF_m_54e2e208b7fadc0e84c632f9d8473253_sx_83716_www600-600|https://p3-aio.ecombdimg.com/obj/ecom-shop-material/wnOrEgF_m_54e2e208b7fadc0e84c632f9d8473253_sx_83716_www600-600";
        $pic= \App\Models\AttachFileMapping::where("file_id", $prod->prod_id."_main")->value("url");
        if(empty($pic)) {
            echo "主图未上传\r\n";
            return false;
        }
        $imgs = \App\Models\AttachFile::where("file_join_id", $this->prod_id)->select(["file_id","file_path"])->get();
        foreach($imgs as $key=>$img) {
            $img_url = \App\Models\AttachFileMapping::where("file_id", $prod->prod_id."_".$img->file_id."_gallery")->value("url");
            if(empty($img_url)) continue;
            $pic.="|".$img_url;
        }
        $description = $pic;
        $spec_prices = [];
        $i = 1;
        //var_dump(count($skus));
        $spec_arr = []; //针对系统的数据需要做下特殊处理
        foreach($skus as $key=>$sku) {
            $atts = $sku->properties;
            $speck_arr_key = key($atts);
            $pic.= $sku->pic;
            $spec_arr[$speck_arr_key][] = $atts[$speck_arr_key];
            $spec_prices[$key]['spec_detail_name1'] = $atts[$speck_arr_key];
            $spec_prices[$key]['stock_num'] = (int)$sku->stocks;
            $spec_prices[$key]['price'] = (int)$sku->price*100;
            $spec_prices[$key]['out_sku_id'] = $sku->sku_id;
            $spec_prices[$key]['code'] = $sku->party_code;
            $spec_prices[$key]['step_stock_num'] = 0;
            $spec_prices[$key]['supplier_id'] = "";
            $i++;
        }
        //var_dump($spec_prices);exit;
        $specs_info = $this->spec($spec_arr);
        $p->specs =$specs_info['specs'];
        //var_dump($spec_arr);exit;
        $p->spec_prices = json_encode($spec_prices);
        $p->pic = $pic;
        $p->description = $pic;
        $p->spec_name = $specs_info['specs_name'];;
        //check attr info
        
        $prodAttr = \App\Models\ProdProperty::where("prod_id", $this->prod_id)->pluck("value","name");
        if(is_null($prodAttr)) return false;

        $prodAttr = $prodAttr->toArray();

        $quality_list = [];
        $quality_list['quality_key'] = $storeConfig['quality_key'];
        $quality_list['quality_name'] = $storeConfig['quality_name'];
        $quality_list['quality_attachments']['media_type'] = $storeConfig['quality_attachments_media_type'];
        $quality_list['quality_attachments']['url'] = $storeConfig['quality_attachments_url'];

        $p->quality_list = json_encode($quality_list);

        $product_format_new = [];
        foreach($prodAttr as $kk => $attr) {
            $rules = $this->PropRule($kk);
            //var_dump($rules);
            if($rules->diy_type==0) {
                if(empty($attr)) continue;
                $value = 0;
                if($rules->type=="select") {
                    $attr = \App\Models\ProdPropValue::where("prop_id", $kk)->where("value_id", $attr)->value("prop_value");
                    $value = (int) $kk;
                } 
                $product_format_new[$kk][] = array("value"=>$value,'name'=>$attr,"diy_type"=>$rules->diy_type);
            }else{
                //continue;
                $prop_value = \App\Models\ProdPropValue::where("prop_id", $kk)->where("value_id", $attr)->value("prop_value");
                $product_format_new[$kk][] = array("value"=>(int)$attr,'name'=>$prop_value,"diy_type"=>$rules->diy_type);
            }
        }
        $product_format_new['1687'][] = array("value"=>603534321,'name'=>"时间岛","diy_type"=>0);
        //var_dump($product_format_new);
        $p->product_format_new = json_encode($product_format_new);

        $req->setParam($p);

        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        if($resp->code=='10000') {
            //todo
            $prodouter = \App\Models\ProdOuter::where("prod_id",$this->prod_id)->first();
            if(!is_null($prodouter)) return false;//todo
            $prodouter->outer_id = $resp->data->product_id;
            $prodouter->content = json_encode($resp->data);
            $prodouter->save();
        }        
    }

    // 获取分类的规则
    private function PropRule($prop_id) {
        $rules = \App\Models\ProdProp::where("prop_id", $prop_id)->select(["rule"])->first();
        if(is_null($rules)) return false;
        //var_dump($rules);
        return json_decode($rules->rule);
    }

    private function spec($specs) {
        $specs_str = "";
        $specs_name_str = "";
        $j = 1;
        foreach($specs as $key=>$spec) {
            $specs_str.=$key."|";
            $specs_name_str.=$key;
            $i = 1;
            foreach($spec as $kk=>$val){
                $specs_str.=$val;
                if($i<count($spec)) {
                    $specs_str.=",";
                }
                $i++;
            }
            if($j<count($specs)) {
                $specs_name_str.="-";
            }
        }
        $ret = [];
        $ret['specs'] = $specs_str;
        $ret['specs_name'] = $specs_name_str;

        //var_dump($ret);
        return $ret;
    }

    public function imglist($prod_id) {
         
    }
}
