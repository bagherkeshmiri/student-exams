<?php

namespace App\Http\Requests\user\auth\register;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'mobile' => 'required|min:11|max:11|unique:users,mobile|regex:/^(\+98?)?{?(0?9[0-9]{9,9}}?)$/'
        ];
    }
}
