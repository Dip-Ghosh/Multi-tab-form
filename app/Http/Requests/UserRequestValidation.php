<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(){

        return [

            'password'=>'required',
            'name'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'password is required',
            'name.email' => 'Name is invalid',

        ];
    }
}
