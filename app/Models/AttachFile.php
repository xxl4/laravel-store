<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttachFile extends Model
{
    //
    public $table = "attach_file";
    const CREATED_AT = "upload_time";
    const UPDATED_AT = null;
    public $primaryKey = "file_id";

    public $fillable = ["file_path"];
}
