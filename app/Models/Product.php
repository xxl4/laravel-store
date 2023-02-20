<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ["name","market_time","outer_id","desc","props","customer_props","image","price","cid"];

    protected $guarded = ["user_id","organization_id","code"];
}
