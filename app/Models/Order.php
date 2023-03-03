<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $table = "order";
    public $primaryKey = "order_id";

    const UPDATED_AT = "create_time";
    const CREATED_AT = "update_time";

    public function user() {
        return $this->hasOne(User::class, "user_id", "user_id");
    }

    public function user_addr() {
        return $this->hasOne(UserAddr::class, "addr_order_id", "addr_id");
    }

    public function item() {
        return $this->hasMany(OrderItem::class, "order_number", "order_number");
    }

    public function shop() {
        return $this->hasOne(ShopDetail::class,"shop_id", "shop_id");
    }

    // 物流
    public function dvy() {
        return $this->hasOne(Delivery::class, "dey_id","dvy_id");
    }


}
