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
}
