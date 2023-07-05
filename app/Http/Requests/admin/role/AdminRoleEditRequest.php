<?php

namespace App\Http\Requests\admin\role;

use Illuminate\Foundation\Http\FormRequest;

class AdminRoleEditRequest extends FormRequest
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
            'name' => 'required|string',
            'permissions' => 'required',
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
            'permissions.required' => 'انتخاب حداقل یک سطح دسترسی الزامی است',
        ];
    }
}
