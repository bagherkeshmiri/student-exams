<?php

namespace App\Http\Requests\admin\correction;

use Illuminate\Foundation\Http\FormRequest;

class AdminCorrectionStoreRequest extends FormRequest
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
//        dd($this->question->answer::VERY_WEAK);
        return [
            'answer_status' => 'required|numeric',
            'incorrect_text' => 'required_if:answer_status,'.$this->question->answer::VERY_WEAK.'|required_if:answer_status,'.$this->question->answer::WEAK_NEED_CORRECTION,
            'correct_text' => 'required_if:answer_status,'.$this->question->answer::VERY_WEAK.'|required_if:answer_status,'.$this->question->answer::WEAK_NEED_CORRECTION,
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
            'incorrect_text.required_if' => 'عبارت غلط الزامی است',
            'correct_text.required_if' => 'عبارت صحیح الزامی است',
        ];
    }
}
