<?php

namespace App\Admin\Forms;

use Nicelizhi\Admin\Widgets\Form;
use Illuminate\Http\Request;

class Product extends Form
{
    /**
     * The form title.
     *
     * @var string
     */
    public $title = '商品设置';
    public $prod_id = null;
    public $categorProp = null;

    public function __construct($prod_id, $categorProp) {
        parent::__construct();
        $this->prod_id = $prod_id;
        $this->categorProp = $categorProp;
    }

    /**
     * Handle the form request.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        //dump($request->get("name"));
        //$name = $request->get("name");

        admin_success('Processed successfully.');

        return back();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        
        $this->table('prop_pro',__("Prop"), function ($table) {
            $table->select('prod_prop_id',__('Prop id'))->options($this->categorProp)->help("请不要选择重复属性值");
            $table->text('prod_value', __('Value'));
        });
        //$this->hidden('prod_id')->rules('required')->default($this->prod_id);
        
        
    }

    /**
     * The data of the form.
     *
     * @return array $data
     */
    public function data()
    { 
        return [
            'name'       => 'John Doe',
            'email'      => 'John.Doe@gmail.com',
            'created_at' => now(),
        ];
    }
}
