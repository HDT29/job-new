<?php

namespace App\Http\Requests\ForgotPassword;

use Illuminate\Foundation\Http\FormRequest;

class RequestPasswordEmployer extends FormRequest
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
        ];
    }
    public function messages()
    {
        return [

            'email.required'=>'Tài khoản email không được để trống!',
            'email.email'=>'Tài khoản không đúng định dạng!',
            'email.exists'=>'Tài khoản email không tồn tại',
        ];
    }
}
