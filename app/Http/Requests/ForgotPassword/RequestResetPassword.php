<?php

namespace App\Http\Requests\ForgotPassword;

use Illuminate\Foundation\Http\FormRequest;

class RequestResetPassword extends FormRequest
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
            'password' => 'required|min:5|max:15|',
            'password_confirm' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [

            'password.required'=>'Thông tin password không được để trống',
            'password.min'=>'Mật khẩu phải ít nhất 5 ký tự!',
            'password.max'=>'Mật khẩu nhiều nhất 15 ký tự!',
            'password_confirm.requierd'=>'Thông tin password confirm không được để trống',
            'password_confirm.same'=>'Thông tin Mật khẩu xác nhận và mật khẩu phải khớp.',

        ];
    }
}
