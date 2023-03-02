<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    public $table="delivery";
    const CREATED_AT="rec_time";
    const UPDATED_AT="modify_time";

    public $primaryKey = "dvy_id";

}
