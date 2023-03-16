<?php

namespace App\Jobs\Taobao;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Artisan;
use Throwable;

class Queue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $item;

    public $tries = 3;
    
    public $timeout = 120;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        //
        $this->item = $input;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $this->item = json_decode($this->item);
        var_dump($this->item);
        $data = [];
        $data['store_id'] = $this->item->shop_id;
        //$data['data'] = $this->item->data;
        // 针对不同类型做不同的动作
        switch($this->item->act_type) {
            case 'upload': // 上新
                $data['type'] = "add";
                $data['prod_id'] = $this->item->prod_id;
                Artisan::call("products:online", $data);
                break;
            case 'product_edit': //更新
                $data['data'] = $this->item->data;
                $data['type'] = "edit";
                Artisan::call("products:online", $data);
                break;
            case 'sync_qty': //同步库存
                $data['data'] = $this->item->data;
                $data['type'] = "sync_qty";
                Artisan::call("products:online", $data);
                break;
            case 'putaway': // 上架
                //$data['data'] = $this->item->data;
                $data['type'] = "putaway";
                $data['prod_id'] = $this->item->prod_id;
                Artisan::call("products:online", $data);
                break;
            case 'down': // 下架
                //$data['data'] = $this->item->data;
                $data['type'] = "down";
                $data['prod_id'] = $this->item->prod_id;
                Artisan::call("products:online", $data);
                break;
            case 'sync_good': // 同步商品
                $data['type'] = "get";
                $data['prod_id'] = $this->item->prod_id;
                Artisan::call("products:online", $data);
                break;
            /* 花费时间太长了，不建议使用job 的方式来处理
            case 'sys_category': // 系统分类
                $data = ['data'=> $this->item->data];
                Artisan::call("category:online", $data);
                break;
            case 'sync_shop_category': //同步自己店铺的分类
                $data['type'] = 'storeget';
                $data['cid'] = 0;
                Artisan::call("category:online", $data);
                break;*/
            case 'sync_shop_category': //同步自己店铺的分类
                $data['type'] = 'storeget';
                $data['cid'] = 0;
                Artisan::call("category:online", $data);
                break;
            case 'shipping': // 物流同步
                $data = ['data'=> $this->item->data];
                Artisan::call("orders:online", $data);
                break;
            case 'add_sku': // 添加SKU
                $data = ['data'=> $this->item->data];
                Artisan::call("products:".$this->item->shop_type.":".$$this->item->type.":online", $data);
                break;
            case 'edit_sku': //编辑SKU
                $data = ['data'=> $this->item->data];
                Artisan::call("products:".$this->item->shop_type.":".$$this->item->type.":online", $data);
                break;
            case 'delete_sku': //删除SKU
                $data = ['data'=> $this->item->data];
                Artisan::call("products:online", $data);
                break;
            case 'get_logistics': //获取快递支持与运费情况
                $data = ['data'=> $this->item->data];
                Artisan::call("logistics:online", $data);
                break;
            case 'sync_orders': // 订单同步
                Artisan::call("orders:online", $data);
                break;
            case 'send-logistics': // 发货
                Artisan::call("orders:online", $data);
                break;
            case 'resend-logistics': // 重新发货
                Artisan::call("orders:online", $data);
                break;
            case 'test_config': // 验证接口是否正常
                $data = [];
                $data = ['store_id'=>$this->item->shop_id,'type'=>$this->item->act_type];
                Artisan::call("system:online", $data);
            default:
                var_dump($this->item);
                break;
        }
        
    }
     //针对处理失败的情况发送消息
    public function failed(Throwable $exception) {
        \App\Libs\Utils::sendMessage(1, 1, "程序报错了，请检查", $exception->getMessage()."--".$exception->getFile()."--".$exception->getLine());
    }
}
