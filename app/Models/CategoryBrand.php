<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryBrand extends Model
{
    //
    public $table = "category_brand";
    //public $primaryKey = "id";
    public $timestamps = false;

    public function category() {
        return $this->hasMany(Category::class, "category_id", "category_id");
    }
}
