<?php

namespace App\Models\Tm;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = "tm_category";
    const UPDATED_AT = "update_time";
    const CREATED_AT = "rec_time";
    //public $primaryKey = "category_id";

    public function prop() {
        return $this->belongsToMany(ProdProp::class,"category_prop","category_id","prop_id");
    }

    public function category_prop() {
        return $this->hasMany(CategoryProp::class, "category_id", "category_id");
    }
}
