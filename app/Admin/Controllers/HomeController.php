<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Nicelizhi\Admin\Controllers\Dashboard;
use Nicelizhi\Admin\Layout\Column;
use Nicelizhi\Admin\Layout\Content;
use Nicelizhi\Admin\Layout\Row;
use Illuminate\Support\Arr;
use Nicelizhi\Admin\Facades\Admin;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('基于Laravel开发的一套店铺SASS管理系统，通过添加第三方店铺的API信息，轻松的完成订单，商品，商品分类，物流，售后等一系列的批量操作。')
            ->row($this->title())
            ->row($this->message())
            ->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $column->append($this->news());
                });

                $row->column(4, function (Column $column) {
                    $column->append($this->developer());
                });

                $row->column(4, function (Column $column) {
                    $column->append($this->stores());
                });
            });
    }

    public function message() {
        $threads = Thread::forUserWithNewMessages(Admin::user()->id)->latest('updated_at')->get();

        return view('admin.dashboard.message', compact('threads'));
    }

    public function news() {
        $news = [];
        $news = \App\Models\Notice::where("shop_id",0)->where("status",1)->orderBy("is_top", "desc")->select(["title","update_time"])->limit(10)->get();
        return view('admin.dashboard.news', compact('news'));
    }

    public function developer() {
        $uid = Admin::user()->id;
        $org_id = Admin::user()->org_id;
        $secret = "";
        $org = \App\Models\Organization::where("id", $org_id)->select(["secret","user_id"])->first();
        if(!is_null($org)) $secret = $org->secret;
        if($uid!=$org->user_id) $secret = "请联系店家管理员获取";
        
        
        $envs = [
            ['name' => '联系电话',       'value' => '182 1761 4046'],
            ['name' => '技术支持',       'value' => 'Email:modays@foxmail.com'],
            ['name' => '项目链接',       'value' => 'https://github.com/nicelizhi/laravel-admin-store'],
            ['name' => 'API密钥',       'value' => $secret],
            ['name' => 'API文档',       'value' => 'https://github.com/nicelizhi/laravel-admin-store/wiki'],
            ['name' => '项目资助',       'value' => 'https://github.com/nicelizhi/laravel-admin-store'],

        ];
        return view('admin.dashboard.developer', compact('envs'));
    }



    public function stores() {
        $extensions = [
            'helpers' => [
                'name' => '天猫',
                'link' => 'https://open.taobao.com',
                'icon' => 'gears',
            ],
            'log-viewer' => [
                'name' => '淘宝',
                'link' => 'https://open.taobao.com',
                'icon' => 'database',
            ],
            'backup' => [
                'name' => '京东',
                'link' => 'https://jos.jd.com',
                'icon' => 'copy',
            ],
            'config' => [
                'name' => '抖店',
                'link' => 'https://op.jinritemai.com/home',
                'icon' => 'toggle-on',
            ],
            'api-tester' => [
                'name' => '微店',
                'link' => 'https://github.com/laravel-admin-extensions/api-tester',
                'icon' => 'sliders',
            ],
            'media-manager' => [
                'name' => '亚马逊中国',
                'link' => 'https://www.amazon.cn',
                'icon' => 'file',
            ],
            'scheduling' => [
                'name' => '亚马逊',
                'link' => 'https://www.amazon.com',
                'icon' => 'clock-o',
            ],
            'yzxiaodian' => [
                'name' => '有赞小店',
                'link' => 'https://www.xiaodian.com',
                'icon' => 'clock-o',
            ],
        ];
        return view('admin.dashboard.store', compact('extensions'));
    }

    public function title() {
        return view('admin.dashboard.title');
    }


}
