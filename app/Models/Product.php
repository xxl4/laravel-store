<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "prod";
    const CREATED_AT="create_time";
    const UPDATED_AT = "update_time";
    public $primaryKey = "prod_id";

    //
    protected $fillable = ["prod_name","ori_price","pic","content","price","category_id","brief","total_stocks"];

    protected $guarded = ["user_id","organization_id"];

    public function pic_attach_file() {

    }

    /*
    public function setImagsAttribute($imgs) {
        if(is_array($imgs)) {
            $this->attributes['imgs'] = json_encode($imgs);
        }
    }

    public function getImgsAttribute($imgs) {
        return json_decode($imgs, true);
    }
    */
    public function imgs_attach() {
        return $this->hasMany(AttachFile::class, "file_join_id", "prod_id");
    }

    public function pic_attach() {
        return $this->hasOne(ProdAttachFile::class, "file_join_id", "prod_id");
    }

    public function video_attach() {
        return $this->hasMany(ProdVideoAttachFile::class, "file_join_id", "prod_id");
    }


    public function category() {
        return $this->hasOne(Category::class);
    }

    /**
     * 
     * 属于哪个店铺
     * 
     */
    public function store() {
        
    }


    public function sku() {
        return $this->hasMany(Sku::class,"prod_id", "prod_id");
    }

    public function outer() {
        return $this->hasMany(ProdOuter::class, "prod_id","prod_id");
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function refund_order() {
        return $this->hasMany(OrderRefund::class);
    }

    public function properties()
    {
        return $this->hasMany(ProdProperty::class,"prod_id","prod_id");
    }

}
