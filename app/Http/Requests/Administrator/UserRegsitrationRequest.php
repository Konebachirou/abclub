<?php

namespace App\Http\Requests\Administrator;

use Illuminate\Foundation\Http\FormRequest;

class UserRegsitrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'domaine' => 'string|required',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'tel' => 'string',
            'address' => 'string',
            'password' => 'required|min:8|max:255|confirmed',
        ];
    }
}
