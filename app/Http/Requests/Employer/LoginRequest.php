<?php

namespace App\Http\Requests\Employer;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:company_users,email',
            'password' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Tài khoản email không được để trống!',
            'email.exists'=>'Tài khoản email không tồn tại',
            'email.email'=>'Tài khoản không đúng định dạng!',
            'password.required'=>'Mật khẩu không được để trống!',
        ];
    }
}
