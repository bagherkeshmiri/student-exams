<?php

namespace App\Http\Requests\admin\account;

use Illuminate\Foundation\Http\FormRequest;

class AdminAccountEditRequest extends FormRequest
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
            'username' => 'required|min:8|unique:admins,username,' . $this->admin->id,
            'role' => 'required|numeric',
        ];
    }
}
