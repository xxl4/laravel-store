<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdProp extends Model
{
    //
    public $table = "prod_prop";
    public $primaryKey = "prop_id";
    public $timestamps = false;

    public function prop_value() {
        return $this->hasMany(ProdPropValue::class, "prop_id");
    }

    public function category_prop() {
        return $this->belongsTo(CategoryProp::class);
    }
}
