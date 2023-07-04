<?php

namespace App\Http\Requests\admin\role;

use Illuminate\Foundation\Http\FormRequest;

class AdminRoleStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fa_name' => 'required|string',
            'en_name' => 'required|string',
            'permissions' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'permissions.required' => 'انتخاب حداقل یک سطح دسترسی الزامی است',
        ];
    }
}
