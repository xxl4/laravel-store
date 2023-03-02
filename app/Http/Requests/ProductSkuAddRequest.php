<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSkuAddRequest extends FormRequest
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
            'actual_stocks' => 'required',
            'party_code' => 'required',
            'weight' => 'required|int',
            'weight' => 'required|int',
            'volume' => 'required',
        ];
    }
}
