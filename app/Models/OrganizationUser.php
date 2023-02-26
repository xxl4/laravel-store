<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationUser extends Model
{
    //
    public $table = "organization_user";

    public function administrators(): belongsTo
    {
        $pivotTable = config('admin.database.role_users_table');

        $relatedModel = config('admin.database.users_model');

        return $this->belongsTo(OrganizationUser::class, $pivotTable, 'role_id', 'user_id');
    }
}
