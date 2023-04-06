<?php

namespace App\Models\Tm;

use Illuminate\Database\Eloquent\Model;

class ProdPropValue extends Model
{
    //
    public $table = "tm_prod_prop_value";
    public $primaryKey = "value_id";
    public $timestamps = false;

    public function prop() {
        return $this->belongsTo(ProdProp::class, "prop_id");
    }
}
