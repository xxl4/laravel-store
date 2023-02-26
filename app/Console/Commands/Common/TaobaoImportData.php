<?php

namespace App\Console\Commands\Common;

use Illuminate\Console\Command;

class TaobaoImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'common:taobao:import:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '淘宝基础数据同步';

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
        $this->import_taobao_prop_values();
        

    }

    private function import_taobao_prop_values() {
        $filename = "./taobao.itempropvalues.get.json";
        $content = file_get_contents($filename);
        $json = json_decode($content);
        $items = $json->itempropvalues_get_response->prop_values->prop_value;
        foreach($items as $key => $item) {
            //插入属性表
            $prop = \App\Models\ProdProp::where("prop_id", $item->pid)->first();
            if(is_null($prop)) $prop = new \App\Models\ProdProp();
            $prop->prop_id = $item->pid;
            $prop->prop_name = $item->prop_name;
            $prop->shop_id = 2;
            $prop->save();
            //插入属性值
            $prop_value = \App\Models\ProdPropValue::where("value_id", $item->vid)->first();
            if(is_null($prop_value)) $prop_value = new \App\Models\ProdPropValue();
            $prop_value->value_id = $item->vid;
            $prop_value->prop_id = $item->pid;
            $prop_value->prop_value = $item->name;
            $prop_value->save();

            //插入到对于的category 数据
            $category_prop = \App\Models\CategoryProp::where("category_id", $item->cid)->where("prop_id", $item->pid)->first();
            if(is_null($category_prop)) $category_prop = new \App\Models\CategoryProp();
            $category_prop->category_id = $item->cid;
            $category_prop->prop_id = $item->pid;
            $category_prop->save();

        }
    }

    private function import_taobao_item_cats() {
      //
      $filename = "./taobao.itemcats.get.json";
      $content = file_get_contents($filename);
      $json = json_decode($content);
      //var_dump($json->itemcats_get_response->item_cats);
      $items = $json->itemcats_get_response->item_cats->item_cat;
      //var_dump($items);exit;
      foreach($items as $key=>$item) {
          $category = \App\Models\Category::where("category_id", $item->cid)->first();
          if(is_null($category)) $category = new \App\Models\Category();
          $category->category_id = $item->cid;
          $category->shop_id = 0;
          $category->parent_id = $item->parent_cid;
          $category->category_name = $item->name;
          $category->status = 1;
          $category->seq = $item->sort_order;
          $category->grade = 0;
          $category->save();
      }
    }
}
