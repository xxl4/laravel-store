<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "prod";
    CONST CREATED_AT="create_time";
    const update_time = "update_time";
    public $primaryKey = "prod_id";
    //
    //protected $fillable = ["name","market_time","outer_id","desc","props","customer_props","image","price","cid"];

    //protected $guarded = ["user_id","organization_id","code"];

    public function pic_attach_file() {

    }

    public function SetImgsAttribute($imgs) {
        if(is_array($imgs)) {
            $this->attributes['imgs'] = json_encode($imgs);
        }
    }

    public function getImgsAttribute($imgs) {
        return json_decode($imgs, true);
    }

}
