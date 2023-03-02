<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSkuEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'prod_id' => 'required',
            'ori_price' => 'required',
            'price' => 'required',
            'pic' => 'required',
            'properties' => 'required',
            'sku_name' => 'required',
            'prod_name' => 'required',
            'actual_stocks' => 'int',
            'weight' => 'int',
            'party_code' => 'required'
        ];
    }
}
