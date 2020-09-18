<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddJob extends FormRequest
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
            'job_name' => 'required',
            'address' => 'required',
            'id_language' => 'required',
            'deadline_job' => 'required',
            'amount_people' => 'required|integer',
            'formality' => 'required',
            'gender' => 'required',
            'job_desc' => 'required',
            'salary_type' => 'required|',
            'salary_from' => 'required|max:99|min:1',
            'interest' => 'required',
            'request' => 'required',
            'email_get_cv' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'job_name.required' => 'Vui lòng điền tên công việc',
//            'company_user_id.required' => 'Điền vào chỗ trống',
//            'job_category_id.required' => 'Điền vào chỗ trống',
//            'zone_id.required' => 'Điền vào chỗ trống',
            'address.required' => 'Vui lòng điền địa chỉ làm việc',
            'deadline_job.required' => 'Vui lòng thêm thời hạn nộp hồ sơ',
            'amount_people.required' => 'Vui lòng điền số lượng người cần tuyển',
            'formality.required' => 'Vui lòng chọn hình thức làm việc',
            'experience.required' => 'Vui lòng chọn yêu cầu kinh nghiệm',
            'gender.required' => 'Vui lòng chọn giới tính',
            'id_language.required' => 'Vui lòng chọn kỹ năng',
            'job_desc.required' => 'Không được để trống phần mô tả công việc',
            'salary_type.required' => 'Chọn hình thức lương',
            'salary_from.required' => 'Vui lòng điền mức lương đưa ra',
            'salary_from.max' => 'Mức lương tối đa là 99tr',
            'salary_from.min' => 'Mức lương tối thiểu là 1tr',
            'interest.required' => 'Vui lòng điền các quyền lợi khi làm việc tại công ty',
            'request.required' => 'Vui lòng điền các yêu cầu của công ty đối với ứng viên',
            'email_get_cv.required' => 'Điền email nhận CV',
        ];
    }
}
