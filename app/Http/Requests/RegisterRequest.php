<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'user_name' =>'required',
            'user_phone'=>'required',
            'user_email'=>'required|unique:users,email',
            'user_password' => 'required|min:5|max:15|',
            'password_confirm' => 'required|same:user_password',
            'address'=>'required',
            'birthday'=>'required',
            'language'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'user_name.required'=>'Thông tin User name không được để trống!',
            'user_phone.required'=>'Thông tin số điện thoại không được để trống',
            'user_email.required'=>'Thông tin email không được để trống',
            'user_email.unique'=>'Thông tin email đã tồn tại',

            'user_password.required'=>'Thông tin password không được để trống',
            'user_password.min'=>'Mật khẩu phải ít nhất 5 ký tự!',
            'user_password.max'=>'Mật khẩu nhiều nhất 15 ký tự!',
            'password_confirm.requierd'=>'Thông tin password confirm không được để trống',
            'password_confirm.same'=>'Thông tin Mật khẩu xác nhận và mật khẩu phải khớp.',

            'address.required'=>'Thông tin address không được để trống',
            'birthday.required'=>'Thông tin birthday không được để trống',
            'language.required'=>'Thông tin language không được để trống',

        ];
    }
}
