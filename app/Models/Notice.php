<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    //
    public $table="notice";
    const CREATED_AT="publish_time";
    const UPDATED_AT="update_time";
}
