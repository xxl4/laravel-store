<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'product_id'=> 'required',
            'name' => 'required|max:100',
            'cid' => 'required',
            'price' => 'required',
            'outer_id' => 'required',
            'image' => 'required|array',
            'props' => 'required',
            'desc' => 'required',
            'customer_props' => 'required',
            'market_time' => 'required',
        ];
    }
}
