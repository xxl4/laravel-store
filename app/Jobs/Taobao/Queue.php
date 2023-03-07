<?php

namespace App\Jobs\Taobao;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Artisan;

class Queue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $item;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        //
        $this->item = $item;
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
        // 针对不同类型做不同的动作
        switch($this->item->act_type) {
            case 'upload': // 上新
                $data = ['data'=> $this->item->data];
                Artisan::call("products:online", $data);
                break;
            case 'product_edit': //更新
                $data = ['data'=> $this->item->data];
                Artisan::call("products:online", $data);
                break;
            case 'sync_qty': //同步库存
                $data = ['data'=> $this->item->data];
                Artisan::call("products:online", $data);
                break;
            case 'putaway': // 上架
                $data = ['data'=> $this->item->data];
                Artisan::call("products:online", $data);
                break;
            case 'down': // 下架
                $data = ['data'=> $this->item->data];
                Artisan::call("products:online", $data);
                break;
            case 'sys_category': // 系统分类
                $data = ['data'=> $this->item->data];
                Artisan::call("category:online", $data);
                break;
            case 'shipping': // 物流同步
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
            default:
                break;
        }
        
    }
}
