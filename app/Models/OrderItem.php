<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    public $table = "order_item";
    public $primaryKey = "order_item_id";
    const CREATED_AT = "rec_time";
    const UPDATED_AT = null;
}
