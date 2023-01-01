<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'name' => "required",
            'email' => "required|email|unique:users,email",
            'profile_img' => "",
            'email_verified_at' => "",
            'contact' => "required|min:10|max:10",
            'password' => "required",
            'remember_token	' => "",
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name Field is required',
            'email.required' => "Email Id Field is required",
            'email.unique' => "Email id has already been taken please enter unique email id",
            'contact.required' => "Contact Field is required",
            'contact.min , contact.max' => "Contact number must be 10 digits",
            'password.required' => "Password Field is required",
        ];
    }
}
