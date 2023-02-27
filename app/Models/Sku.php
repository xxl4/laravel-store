<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    //
    public $table = "sku";
    public $primaryKey = "sku_id";
    const UPDATED_AT = "update_time";
    const CREATED_AT = "rec_time";
}
