<?php

namespace App\Http\Requests\user\profile;

use Illuminate\Foundation\Http\FormRequest;

class UserChangePasswordRequest extends FormRequest
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
            'old_pass' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
