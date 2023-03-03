<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserGetRquest extends FormRequest
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
            //
            'user_id' => 'string',
            'nick_name' => 'string',
            'real_name' => 'string|min:2',
            'user_mail' => 'string',
            'user_mobile' => 'int',
            'birth_date' => 'date',
        ];
    }
}
