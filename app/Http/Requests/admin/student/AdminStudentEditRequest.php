<?php

namespace App\Http\Requests\admin\student;

use Illuminate\Foundation\Http\FormRequest;

class AdminStudentEditRequest extends FormRequest
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
            'name' => 'required',
            'family' => 'required',
            'username' => 'required|min:8|unique:users,username,'.$this->user->id,
            'level' => 'required|numeric',
            'mobile' => 'required|numeric|digits:11|unique:users,mobile,'.$this->user->id,
        ];
    }
}
