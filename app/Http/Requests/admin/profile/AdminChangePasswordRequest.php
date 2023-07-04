<?php

namespace App\Http\Requests\admin\profile;

use Illuminate\Foundation\Http\FormRequest;

class AdminChangePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'old_pass' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
