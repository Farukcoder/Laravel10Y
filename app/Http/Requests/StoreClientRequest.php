<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreClientRequest extends FormRequest
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'city' => 'required|string|max:255',
            'age' => 'required|numeric',
            'phone' => 'required|regex:/^(01)[0-9]{9}/',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ];
    }

    public function messages()
    {
        return [
            "username.required" => ':attribute strongly required',
            "email.required" => ':attribute strongly required',
            "city.required" => ':attribute strongly required',
            "age.required" => ':attribute strongly required',
            "password.required" => ':attribute strongly required',
        ];
    }

    public function attributes()
    {
       return [
          "username" => 'User Name',
          "email" => 'Email',
          "city" => 'City',
          "age" => 'Age',
          "password" => 'Password',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
           "username" => strtoupper($this->username)
        ]);
    }

    protected $stopOnFirstFailure = true;
}
