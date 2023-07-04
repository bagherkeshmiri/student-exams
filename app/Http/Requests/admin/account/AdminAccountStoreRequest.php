<?php

namespace App\Http\Requests\admin\account;

use Illuminate\Foundation\Http\FormRequest;

class AdminAccountStoreRequest extends FormRequest
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
            'username' => 'required|min:8|unique:admins',
            'password' => 'required|min:8',
            'role' => 'required|numeric',
            'mobile' => 'required|numeric|digits:11|unique:admins',
        ];
    }
}
