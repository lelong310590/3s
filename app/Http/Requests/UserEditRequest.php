<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'userpassword1' => 'min:6',
            'userpassword2' => 'same:userpassword1'
        ];
    }

    public function messages()
    {
        return [
            'userpassword1.min' => 'Độ dài mật khẩu từ 6 ký tự trở lên',
            'userpassword2.same' => 'Mật khẩu nhắc lại không trùng khớp'
        ];
    }
}
