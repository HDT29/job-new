<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'name' => 'required|min:2|max:190',
            
            
            'address'=>'bail|required',
            'phone_number'=>'bail|required|min:10|max:11|regex:/[0-9]/',
            'language'=>'bail|required',
        ];
    }

    public function messages(){
    return [
        'name.required'=>"Nhập tên tài khoản",
        'name.min'=>"Tên tài khoản dài hơn 2 ký tự",
        'address.required'=>"Nhập địa chỉ của bạn",
        'phone_number'=>"Nhập số điện thoại",
        'phone_number.integer'=>"Nhập đúng định dạng số điện thoại",
        'phone_number.min'=>"Nhập đúng định dạng số điện thoại",
        'phone_number.max'=>"Nhập đúng số dạng điện thoại",
        'phone_number.regex'=>"Số điện thoại không đúng định dạng",
        'language.required'=>"Nhập ngôn ngữ",

    ];
    }
}
