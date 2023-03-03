<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = "category";
    const UPDATED_AT = "update_time";
    const CREATED_AT = "rec_time";
    //public $primaryKey = "category_id";

    public function prop() {
        return $this->belongsToMany(ProdProp::class,"category_prop","category_id","prop_id");
    }

    


}
