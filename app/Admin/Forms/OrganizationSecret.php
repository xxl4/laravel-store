<?php

namespace App\Admin\Forms;

use Nicelizhi\Admin\Widgets\Form;
use Illuminate\Http\Request;
use Nicelizhi\Admin\Facades\Admin;

class OrganizationSecret extends Form
{
    /**
     * The form title.
     *
     * @var string
     */
    public $title = '密钥设置';

    /**
     * Handle the form request.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        dump($request->secret);

        admin_success('Processed successfully.');

        return back();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('secret')->rules('required')->readOnly()->help("密钥自动生成");
        //$this->tags('ips')->help("ip lis 配置");
    }

    /**
     * The data of the form.
     *
     * @return array $data
     */
    public function data()
    {
        $uid = Admin::user()->id;
        $secret = str_random(50);
        //$org = \App\Models\Organization::where("user_id", $uid)->select(["secret","ips"])->first();
        \App\Models\Organization::where("user_id", $uid)->update(["secret"=>$secret]);
        return [
            "secret" => $secret,
        ];
        
    }
}
