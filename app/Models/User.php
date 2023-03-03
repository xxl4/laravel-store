<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $table = "user";
    public $primaryKey = "user_id";
    const UPDATED_AT = "modify_time";
    const CREATED_AT = "user_regtime";
}
