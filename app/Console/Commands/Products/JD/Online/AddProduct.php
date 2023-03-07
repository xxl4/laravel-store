<?php

namespace App\Console\Commands\Products\JD\Online;

use Illuminate\Console\Command;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:JD:add:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JD 商品的添加处理';

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
        $store = $this->argument('store');
        $prod_id = $this->argument("prod_id");
        //
        $this->info("get from online info start".$store);
        

        //获取对应商品的内容，完成商品的数据更新

         //
         $good = \App\Models\Prod::where("prod_id", $prod_id)->first();
         if(is_null($good)) {
             $this->error($prod_id. " NOT FOUND");
             return false;
         }
         
         //check jd online
         $outerId = $this->prod_id;
         $josGood = \App\Models\ProdOuter::where("outerId", $this->goods_id)->first();
         
         $attr = $this->get_goods_attr2($this->goods_id);
 
         $c = new \JdClient();
         $c->appKey = $store->key;
         $c->appSecret = $store->scret;
         $c->accessToken = $store->token;
 
         //检查线上是否有重复
         //todo
         $book = $good->toArray();
 
         $req = new \WareWriteAddRequest();
         // @link http://jos.jd.com/api/complexTemplate.htm?webPamer=ware&groupName=%E5%95%86%E5%93%81API&id=48&restName=jingdong.ware.write.add&isMulti=true
         $ware = new \stdClass();
 
         $cid = $this->getcid3($book['cat_id']);
 
 
         if(empty($cid)) $cid = 379827;
 
         $ware->title = $this->clean($title);
         $ware->categoryId  = $cid;
         $ware->transportId = "419243"; //运费模板ID
         //$ware->templateId  = ""; //关联版式ID 通过接口 jingdong.template.read.findTemplatesByVenderId 获取
         $ware->wareStatus  = "8"; //商品状态1:从未上架 2:自主下架 4:系统下架 8:在售 513:从未上架 待审核 514:自主下架 待审核 516:系统下架 待审核 520:在售 待审核 1025:从未上架 审核不通过 暂时没用 1026:自主下架 审核不通过 暂时没用 1028:系统下架 审核不通过 1032:在售 审核不通过
         $ware->outerId = $outerId;
         $ware->itemNum  = $outerId;
         
         $adWords = new \stdClass();
         $adWords->words = $sellpoint;
         $ware->adWords   = $adWords;
         
 
         $size = $book['size'];
         if (0 == $size || '' == $size)
             $size = 16;
 
         $ware->length    = $dim[1][$size];
         $ware->width   = $dim[0][$size];
         $ware->height   = "10";
 
         $weight = 0 == $book['goods_weight']?200:(float) $book['goods_weight'];
         if($weight==0.00) $weight = '0.3';
         if($weight==0) $weight = '0.3';
         $weight = $weight + 10;
         $ware->weight    = round($weight / 1000, 3);
         $ware->venderId = 0;
 
         if ('' == $attr['pub_time']){
             $attr['pub_time'] = '2000-01-01';
         }
 
         $pub_time = explode('-', $attr['pub_time']);
         $pub_time_for = date("Y-m-d", mktime(0,0,0,$pub_time[1],$pub_time[2], $pub_time[0]));
         $strs = array($attr['author'],$book['isbn'],$attr['edition'],$attr['publisher'],$pub_time_for,$book['page'],$size);
 
 
         $images = $this->processImgs($book['goods_id']);
 
         //$inch=$book['dimensions'];
 
         $imgs = [];
         $images_str = "";
         $pic_url = "";
         $i = 1;
         if(empty($images)) {
             Log::error($this->goods_id." images is null ");
             return false;
         }
         foreach ($images as $key=>$item) {
             $img = [];
             $path = json_decode($item->path);
 
             $ext = pathinfo($path->jingdong_imgzone_picture_upload_responce->picture_url, PATHINFO_EXTENSION);
             // 对于 gif 图片不支持处理
             if($ext=='gif') continue;
 
             if($item->sort > 10) continue; // 不可以超过10张图片
 
 
             $img["imgUrl"] = $path->jingdong_imgzone_picture_upload_responce->picture_url;
             $img["colorId"] = "0000000000";
             $img["imgIndex"] = $item->sort;
             $img['type'] = "com.jd.pop.ware.ic.api.domain.Image";
             $imgs[] = $img;
             if($item->sort < 4) {
                 $images_str.="<img src='//img10.360buyimg.com/imgzone/".$path->jingdong_imgzone_picture_upload_responce->picture_url."' style='max-width: 750px' /><br />";
             }
 
             if($item->sort==1) $pic_url = "//img10.360buyimg.com/imgzone/".$path->jingdong_imgzone_picture_upload_responce->picture_url;
             $i++;
         }
 

         $ware->images  = $imgs;
         //$ware->images  = [];
         //$ware->height = "";
         $ware->shopCategorys = $this->processShopCategory($cid);
 
         $desc = strip_tags($book['goods_desc']);
         if ('' == $desc)
             $desc = $book['goods_name'];
 
 
         //$desc .= $images_str;
 
         $id = $book['goods_id'];
         $translate = $attr['translate'];
         $name = $book['goods_name'];
         $inch=$book['dimensions'];
         $look = $book['look'];
 
         if(isset($this->look[$good->look])) {
             $lookValue = $this->look[$good->look];
         }else{
             $lookValue = "";
         }
 
         $ageName = array(
             '0-2' => '0-2岁',
             '3-6' => '3-6岁',
             '2 and up' => '两岁以上',
             '3 and up' => '三岁以上',
             '4 and up' => '四岁以上',
             '5 and up' => '五岁以上',
             '6 and up' => '六岁以上',
             '7 and up' => '7-10岁',
             '7' => '7-10岁',
             '7-10' => '7-10岁',
             '8 and up' => '7-10岁',
             '11-14' => '11-14岁',
             'Young Adult' => '青少年'
         );
         $age = $goodMore->age;
         //$goods_desc = $book['goods_desc'];
 
         if (strpos($age,'7') === true) {
             $age = '3-6';
         }
         if (isset($ageName[$age]))
             $age = $ageName[$age];
         elseif (strstr($age,' and up')) {
             $age = str_replace(' and up','岁以上',$age);
         }
 
         $desc=$prod->desc;
 
         $desc = $this->clean($desc);
         $ware->mobileDesc  = $desc;
         $ware->introduction = $desc;
         //$ware->afterSales  = "不支持7天无理由退货";
         $jd_price = $book['shop_price'];
         if($book['supid']!=69) { //56中图是享受的 69国图是不享受的
             $jd_price = $book['shop_price'];
             $jd_price = round($jd_price, 2);
         }
 
         if($book['market_price'] < $jd_price) {
             $book['market_price'] = $jd_price * 1.5;
         }
         $ware->jdPrice  = $jd_price;
         $ware->marketPrice   = $book['market_price'];

 
         $attrid = $this->getattrid($cid);

 
         $multiCateProps = [];

         // 10063044 著者
         // 10063044 编者
         // 10063035 开本
         // 10063037 页数
         // 10063034 正文语音
 
         // 需要补充信息：“页数 ”、“开本”、"正文语音"：英语、"著者"、"读者对象"：根据我们年龄段输入
 
         $attr['publisher'] = substr($attr['publisher'], 0, 20);
         $attr['author'] = substr($attr['author'], 0, 20);
 
         $attrInfo = [];
         $attrInfo['publisher'] = $attr['publisher'];
         $attrInfo['isbn'] = $book['isbn'];
         $attrInfo['edition'] = $attr['edition'];
         $attrInfo['author'] = $attr['author'];
         $attrInfo['page'] = $book['page'];
         $attrInfo['size'] = $size;
         $attrInfo['goods_name'] = mb_substr($book['goods_name'], 0, 20, "utf-8");
         //$attrInfo['goods_name'] = "English";
         $attrInfo['age'] = $age;
         $attrInfo['lang'] = "英语";
 
         $multiCateProp = $this->processAttrs($cid, $attrInfo);
 
         //$multiCateProp = [];
         $multiCateProps[] = $multiCateProp;
 
 
         //$ware->multiCateProps = $multiCateProps;
         $ware->props = $multiCateProp;
 
 
         $skus = [];
         $sku = [];
         $saleAttrs = [];
         //$saleAttrs = ["attrid"=>"10062674","attrValues"=>["365页"]];
 
         //$skus['@type'] = "com.jd.pop.ware.ic.api.domain.Sku";
         //$sku['type'] = "com.jd.pop.ware.ic.api.domain.sku";
         $sku["jdPrice"] = (float)$jd_price;
         //$skus["outerId"] = $outerId;
         $sku["stockNum"] = intval($book['goods_number']);
         //$skus["props"] = $multiCateProp;
         $skus = array();
         $skus[] = ["@type"=>"com.jd.pop.ware.ic.api.domain.Sku","jdPrice"=>$jd_price,"stockNum"=>$book['goods_number'],"type"=>"com.jd.pop.ware.ic.api.domain.sku"];
         //$skus['saleAttrs'] = $saleAttrs;
 
         //$ware->skus =$skus;
 
 
         $req->setWare($ware);
 
         //$skus['sku'] = $sku;
 
         $req->setSkus($skus);
         Log::info($this->goods_id." Upload Start  ".json_encode($req));
         $resp = $c->execute($req, $c->accessToken);
         Log::info($this->goods_id." Upload Result  ".json_encode($resp));
 
         if(isset($resp->jingdong_ware_write_add_responce->ware->wareId)){
             $josGood = new \App\Models\ProdOuter();
             $josGood->outerId = $outerId;
             $josGood->wareId = $resp->jingdong_ware_write_add_responce->ware->wareId;
             $josGood->save(); 
         }else{
             Log::error($this->prod_id." Upload Info  ".json_encode($req));
 
             //处理敏感字情况
             if(isset($resp->error_response->en_desc)){
                 $keywrod = "敏感词";
                 if(stripos($resp->error_response->en_desc, $keywrod)!=false) {
 
                     Log::warning($this->prod_id." ".$resp->error_response->en_desc);
 
 
                 }
             }
 
         }
 

    }
}
