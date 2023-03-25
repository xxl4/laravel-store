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

    protected $fillable = ["prod_id","ori_price","pic","price","properties","actual_stocks","stocks","party_code","sku_name","prod_name","weight","volume","status"];

    protected $guarded = ["user_id","org_id"];

    protected $casts = [
        'properties' => 'json',
    ];

    public function prod() {
        return $this->hasOne(Product::class, "prod_id", "prod_id");
    }

    public function pic_attach() {
        return $this->hasOne(ProdSkuAttachFile::class, "file_join_id", "sku_id");
    }
}
