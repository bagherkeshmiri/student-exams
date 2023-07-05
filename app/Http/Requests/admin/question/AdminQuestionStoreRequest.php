<?php

namespace App\Http\Requests\admin\question;

use Illuminate\Foundation\Http\FormRequest;

class AdminQuestionStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
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


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'text.required' => 'متن سوال الزامی است',
            'user_id.required' => 'انتخاب دانش آموز الزامی است',
            'admin_id.required' => 'انتخاب تصحیح کننده الزامی است',
        ];
    }
}
