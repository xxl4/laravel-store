<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdAttachFile extends Model
{
    //
    public $table = "prod_attach_file";
    const CREATED_AT = "upload_time";
    const UPDATED_AT = null;
    public $primaryKey = "file_id";

    public $fillable = ["file_path"];
}
