<?php

namespace App\Http\Requests\admin\student;

use Illuminate\Foundation\Http\FormRequest;

class AdminStudentStoreRequest extends FormRequest
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
            'username' => 'required|min:8|unique:users',
            'password' => 'required|min:8',
            'level' => 'required|numeric',
            'mobile' => 'required|numeric|digits:11|unique:users',
        ];
    }
}
