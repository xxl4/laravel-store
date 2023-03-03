<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddr extends Model
{
    //
    public $table = "user_addr";
    public $primaryKey = "addr_id";
    const UPDATED_AT = "update_time";
    const CREATED_AT = "create_time";
}
