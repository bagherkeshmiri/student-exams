<?php

namespace App\Http\Requests\admin\correction;

use App\Enums\Answers\AnswerStatus;
use App\Enums\Questions\QuestionStatus;
use Illuminate\Foundation\Http\FormRequest;

class AdminCorrectionStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'answer_status' => 'required|numeric',
            'incorrect_text' => 'required_if:answer_status,' . AnswerStatus::VeryWeak->value . '|required_if:answer_status,' . AnswerStatus::WeakAndNeedCorrection->value,
            'correct_text' => 'required_if:answer_status,' . AnswerStatus::VeryWeak->value . '|required_if:answer_status,' . AnswerStatus::WeakAndNeedCorrection->value,
        ];
    }

    public function messages(): array
    {
        return [
            'incorrect_text.required_if' => 'عبارت غلط الزامی است',
            'correct_text.required_if' => 'عبارت صحیح الزامی است',
        ];
    }
}
