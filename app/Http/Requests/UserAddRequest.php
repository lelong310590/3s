<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'username'  => 'required',
            'useremail' => 'required|unique:tbl_users,email',
            'userpassword1' => 'required|min:6',
            'userpassword2' => 'required|same:userpassword1',
            'userlevel' => 'required',
            'userAvatar' => 'image|mimes:jpeg,png'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Họ và tên không được bỏ trống',
            'useremail.required' => 'Email không được bỏ trống',
            'useremail.unique' => 'Địa chỉ Email đã tồn tại',
            'userpassword1.required' => 'Mật khẩu không được bỏ trống',
            'userpassword1.min' => 'Mật khẩu tối thiểu là 6 ký tự',
            'userpassword2.required' => 'Mật khẩu nhắc lại không được bỏ trống',
            'userpassword2.same' => 'Mật khẩu nhắc lại không trùng',
            'userAvatar.mimes' => 'Định dạng tập tin không đúng'
        ];
    }
}
