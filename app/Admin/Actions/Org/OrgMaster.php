<?php

namespace App\Admin\Actions\Org;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrgMaster extends RowAction
{
    public $name = '设置机构管理员';

    public function handle(Model $model, Request $request)
    {
        $user_id = $request->get('user_id');
        
        // 更新管理员表机构数据内容
        DB::table("admin_users")->where("id", $user_id)->update(['org_id'=>$model->id]);
        
        return $this->response()->success('店铺管理员配置成功')->refresh();
    }

    public function form()
    {
        $this->text('user_id', '管理员ID')->rules("required");
    }

}