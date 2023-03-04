<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSettlement extends Model
{
    //
    public $table = "order_settlement";
    public $primaryKey = "settlement_id";
    const CREATED_AT = "create_time";
}
