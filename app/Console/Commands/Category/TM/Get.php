<?php

namespace App\Console\Commands\Category\TM;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class Get extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:TM:get:online {store} {cid} {data?}';

    private $_field="pid,name,must,multi,prop_values,prop_values,is_key_prop,is_sale_prop,is_color_prop,is_input_prop,is_item_prop,status,child_template,sort_order,is_allow_alias,features,is_taosir,taosir_do,is_material,material_do";

    private $_field2 = "cid,parent_cid,name,is_parent,sort_order,status,features,feature";
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TM';

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
        //ItempropsGetRequest 分类属性内容
        $store = $this->argument('store');
        $cid = $this->argument('cid'); // 用于发货


        //@link https://open.taobao.com/anno?source=search&docId=25658&docType=12
        $this->getCategory($cid, $store, 0);

        
    }

    public function getCategory($cid, $store, $grade) {
        $cacheKey = \App\Enums\CachePrefixEnum::RUNING_CATEGORY_ALL_PAGE.$cid;
        echo $cid." start \r\n";
        if(Cache::has($cacheKey)) {
            $items = json_decode(Cache::get($cacheKey));
        }else{
            $c = new \TopClient();
            $c->appkey = $store->key;
            $c->secretKey = $store->secret;
    
            $req = new \ItemcatsGetRequest();
            $req->setFields($this->_field2);
            $req->setParentCid($cid);
            $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
            var_dump($resp);
            if (!property_exists($resp, 'item_cats')) {
                //todo 
                return false;
            }
            $items = $resp->item_cats;
            
            Cache::put($cacheKey, json_encode($items), 3600);
        }
        
        //var_dump($items);exit;
        foreach($items->item_cat as $key=>$item) {
            $category = \App\Models\Tm\Category::where("category_id", $item->cid)->where("shop_id", $store->id)->first();
            $status = 1;
            if(is_null($category)) $category = new \App\Models\Tm\Category();
            $category->category_id = $item->cid;
            $category->shop_id = $store->id;
            $category->parent_id = $item->parent_cid;
            $category->category_name = $item->name;
            if($item->status=='deleted') $status = 0;
            $category->status = $status;
            $category->seq = $item->sort_order;
            $category->grade = $grade;
            $category->save();

            //var_dump($item->is_parent);exit;
            sleep(1);

            if($item->is_parent=="true") {
                $grade++;
                $this->getCategory($item->cid, $store, $grade);
            }else{
                var_dump($item);
                $this->getCategoryProp($item->cid, $store);
            }
        } 
    }

    public function getCategoryProp($cid, $store) {
        $cacheKey = \App\Enums\CachePrefixEnum::RUNING_CATEGORY_PROP_ALL_PAGE.$cid;
        echo $cid." prop start \r\n";
        if(Cache::has($cacheKey)) {
            $items = json_decode(Cache::get($cacheKey));
        }else{
            $c = new \TopClient();
            $c->appkey = $store->key;
            $c->secretKey = $store->secret;

            //@link https://open.taobao.com/api.htm?spm=a219a.7386797.0.0.553a669aqNnh3t&source=search&docId=53973&docType=2
            $req = new \AlibabaItemPublishPropsGetRequest();
            //@link https://open.taobao.com/v2/doc?spm=a219a.15212433.0.0.2a24669aVuCvrz#/apiFile?docType=2&docId=53943
            //$req = new \AlibabaItemPublishSchemaGetRequest();
            //$req->setFields($this->_field);
            $req->setCatId($cid);
            $req->setMarket("tmall");
            //$req->setSpuId(0);
            $spu_id = $this->TmallProductMatchSchemaGetRequest($cid, $store);
            $req->setPropId('1636953');
            $req->setSchema('<itemRule><field id="prop_1636953" name="ISBN编号" type="input"><rules><rule name="requiredRule" value="true"/></rules></field></itemRule>');
            $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
            var_dump($resp, $req);exit;
            if (!property_exists($resp, 'item_props')) {
                //todo 
                return false;
            }
            $items = $resp->item_props;
            //var_dump($items);
            Cache::put($cacheKey, json_encode($items), 3600);
        }

        foreach($items->item_prop as $key=>$item) {
            $prop = \App\Models\Tm\ProdProp::where("prop_id",$item->pid)->where("shop_id",$store->id)->first();
            if(is_null($prop)) $prop = new \App\Models\Tm\ProdProp();
            $prop->shop_id = $store->id;
            $prop->prop_name = $item->name;
            //var_dump($item);
            $rule = (array)$item;
            unset($rule['prop_values']);
            $required = 1;
            $type = "text";
            if($item->is_key_prop==false) $required = 0;
            if($item->is_input_prop==false) $type = "select";
            $rule['required'] = $required;
            $rule['type'] = $type;
            $prop->rule = json_encode($rule);
            $prop->prop_id = $item->pid;
            $prop->save();

            // 保存到prop_value
            if(isset($item->prop_values)) {
                var_dump($item->prop_values);
                foreach($item->prop_values->prop_value as $kk=>$opt) {
                    if(!isset($opt->vid)) continue;
                    $propval = \App\Models\Tm\ProdPropValue::where("prop_id", $item->pid)->where("value_id",$opt->vid)->first();
                    if(is_null($propval)) $propval = new \App\Models\Tm\ProdPropValue();
                    $propval->value_id = $opt->vid;
                    $propval->prop_value = $opt->name;
                    $propval->prop_id = $item->pid;
                    $propval->save();
                }
            }

            // 保存到category prop
            $categoryProp = \App\Models\Tm\CategoryProp::where("category_id", $cid)->where("prop_id", $item->pid)->first();
            if(is_null($categoryProp)) $categoryProp = new \App\Models\Tm\CategoryProp();
            $categoryProp->category_id = $cid;
            $categoryProp->prop_id = $item->pid;
            $categoryProp->save();
        }
    }

    private function TmallProductMatchSchemaGetRequest($cid, $store) {

        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        //@link https://open.taobao.com/v2/doc?spm=a219a.15212433.0.0.2a24669aVuCvrz#/apiFile?docType=2&docId=23258
        $req = new \TmallProductMatchSchemaGetRequest();
        //$req->setFields($this->_field);
        $req->setCategoryId($cid);
        //$req->setMarket("tmall");
        //$req->setSpuId(0);
        //$req->setPropId('');
        //$req->setSchema('<itemSchema> <field id="catProp" name="类目属性" type="complex"></field></itemSchema>');
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        var_dump($resp, $req);
    }
}
