<?php

namespace App\Http\Requests\Administrator;

use Illuminate\Foundation\Http\FormRequest;

class EditPasswordRequest extends FormRequest
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
            "currentpassword" => ["required", "string", function ($attribute, $value, $fail) {
                if (!\Hash::check($value, auth()->user()->password)) {
                    $fail("The current password is incorrect.");
                }
            }],
            "password" => "required|string|confirmed",

        ];
    }
}
