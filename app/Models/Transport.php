<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    //
    public $table = "transport";
    public $primaryKey = "transport_id";
    const CREATED_AT = "create_time";
    const UPDATED_AT = null;
}
