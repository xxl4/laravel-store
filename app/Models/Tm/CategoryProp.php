<?php

namespace App\Models\Tm;

use Illuminate\Database\Eloquent\Model;

class CategoryProp extends Model
{
    //
    public $table = "tm_category_prop";
    //public $primaryKey = "id";
    public $timestamps = false;
    
    public function prod_prop() {
        return $this->hasOne(ProdProp::class, "prop_id", "prop_id");
    }

    public function prop_value() {
        return $this->hasMany(ProdPropValue::class, "prop_id", "prop_id");
    }
}
