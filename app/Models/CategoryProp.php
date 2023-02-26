<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProp extends Model
{
    //
    public $table = "category_prop";
    //public $primaryKey = "id";
    public $timestamps = false;

    public function prod_prop() {
        return $this->hasOne(ProdProp::class, "prop_id", "prop_id");
    }
}
