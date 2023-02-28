<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "prod";
    CONST CREATED_AT="create_time";
    const update_time = "update_time";
    public $primaryKey = "prod_id";
    //
    //protected $fillable = ["name","market_time","outer_id","desc","props","customer_props","image","price","cid"];

    //protected $guarded = ["user_id","organization_id","code"];

    public function pic_attach_file() {

    }

    public function SetImgsAttribute($imgs) {
        if(is_array($imgs)) {
            $this->attributes['imgs'] = json_encode($imgs);
        }
    }

    public function getImgsAttribute($imgs) {
        return json_decode($imgs, true);
    }


    public function category() {
        return $this->hasOne(Category::class);
    }

    /**
     * 
     * 属于哪个店铺
     * 
     */
    public function store() {
        
    }

    public function sku() {
        $this->hasMany(Sku::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function refund_order() {
        return $this->hasMany(OrderRefund::class);
    }

}
