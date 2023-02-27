<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Nicelizhi\Admin\Controllers\Dashboard;
use Nicelizhi\Admin\Layout\Column;
use Nicelizhi\Admin\Layout\Content;
use Nicelizhi\Admin\Layout\Row;
use Illuminate\Support\Arr;
use Nicelizhi\Admin\Facades\Admin;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('基于Laravel admin 开发的一套店铺系统，包括了商品模块，购物车模块，库存模块等')
            ->row($this->title())
            ->row(function (Row $row) {

                /*
                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });
                */

                $row->column(6, function (Column $column) {
                    $column->append($this->developer());
                });

                $row->column(6, function (Column $column) {
                    $column->append($this->stores());
                });
            });
    }

    public function developer() {
        $uid = Admin::user()->id;
        $orgMember = \App\Models\OrganizationUser::where("user_id", $uid)->select(["organization_id"])->first();
        $secret = "";
        if(!is_null($orgMember)) {
            $org = \App\Models\Organization::where("id", $orgMember->organization_id)->select(["secret"])->first();
            if(!is_null($org)) $secret = $org->secret;
        }
        
        
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
