<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdTag extends Model
{
    use SoftDeletes;
    //
    public $table = "prod_tag";
    const UPDATED_AT = "create_time";
    const CREATED_AT = "update_time";
    const DELETED_AT = "delete_time";

    public function tag_reference() {
        return $this->belongsTo(ProdTagReference::class);
    }
}
