<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(){

        return [
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'mobile'=>'required',
            'address'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'mobile.required' => 'Mobile is Required',
            'password.required' => 'Password is required',
            'gender.required' => 'Gender is required',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'address.required' => 'Address is required'
        ];
    }
}
