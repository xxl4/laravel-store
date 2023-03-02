<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdTagReference extends Model
{
    //
    public $table = "prod_tag_reference";
    const CREATED_AT="create_time";
    const UPDATED_AT = null;
    public $primaryKey = "reference_id";
}
