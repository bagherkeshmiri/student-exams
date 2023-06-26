<?php

namespace App\Http\Requests\admin\question;

use Illuminate\Foundation\Http\FormRequest;

class AdminQuestionStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'link' => 'required|unique:questions,link',
            'response_deadline' => 'required|numeric',
            'admin_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'text' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'text.required' => 'متن سوال الزامی است',
            'user_id.required' => 'انتخاب دانش آموز الزامی است',
            'admin_id.required' => 'انتخاب تصحیح کننده الزامی است',
        ];
    }
}
