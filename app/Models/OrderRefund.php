<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderRefund extends Model
{
    //
    public $table = "order_refund";
    const CREATED_AT="apply_time";
    const UPDATED_AT = "updated_at";
}
