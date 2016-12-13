<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticationRequest extends FormRequest
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
            'login_email'   => 'required',
            'login_password'    => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'login_email.required' => 'Địa chỉ Email đăng nhập và mật khẩu không được bỏ trống',
            'login_password.required'   => 'Địa chỉ Email đăng nhập và mật khẩu không được bỏ trống'
        ];
    }
}
