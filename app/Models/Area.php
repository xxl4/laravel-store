<?php

namespace App\Models;

use Nicelizhi\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    use ModelTree;
    protected $table="area";
    public $primaryKey = "area_id";
    public $timestamps = false;

    public function __construct(array $attributes=[]) {
        parent::__construct($attributes);
        $this->setParentColumn("parent_id");
        $this->setOrderColumn("level");
        $this->setTitleColumn("area_name");
    }
}
