<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    public $table = "brand";
    public $primaryKey = "brand_id";

    public function category() {
        return $this->hasMany(CategoryBrand::class, "brand_id", "brand_id");
    }
}
