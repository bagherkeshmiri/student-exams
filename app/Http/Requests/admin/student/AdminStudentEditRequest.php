<?php

namespace App\Http\Requests\admin\student;

use Illuminate\Foundation\Http\FormRequest;

class AdminStudentEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'family' => 'required',
            'username' => 'required|min:8|unique:users,username,' . $this->user->id,
            'level' => 'required|numeric',
            'mobile' => 'required|numeric|digits:11|unique:users,mobile,' . $this->user->id,
        ];
    }
}
