<?php

namespace App\Http\Requests\admin\account;

use Illuminate\Foundation\Http\FormRequest;

class AdminAccountEditRequest extends FormRequest
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
            'username' => 'required|min:8|unique:admins,username,'.$this->admin->id,
            'role' => 'required|numeric',
        ];
    }
}
