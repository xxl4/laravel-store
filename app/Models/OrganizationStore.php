<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationStore extends Model
{
    //
    public $table = "organization_store";

    public function getConfigAttribute($value) {
        return array_values(json_decode($value, true) ?: []);
    }

    public function setConfigAttribute($value) {
        $this->attributes['config'] = json_encode($value);
    }
}
