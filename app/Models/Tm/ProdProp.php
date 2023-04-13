<?php

namespace App\Models\Tm;

use Illuminate\Database\Eloquent\Model;

class ProdProp extends Model
{
    //
    public $table = "tm_prod_prop";
    public $primaryKey = "prop_id";
    public $timestamps = false;

    //rule
    protected $casts = [
        'rule' => 'json',
    ];

    public function prop_value() {
        return $this->hasMany(ProdPropValue::class, "prop_id");
    }

    public function category_prop() {
        return $this->belongsTo(CategoryProp::class);
    }
}
