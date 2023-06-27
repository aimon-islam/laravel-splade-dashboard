<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "email" => "required|email",
            "phone" => "nullable|numeric|min:11", // the minimum digit 11 is only for bangladesh if you are living outside input your own
            "password" => "required|confirmed|min:6", // the minimum digit 11 is only for bangladesh if you are living outside input your own
        ];
    }
}
