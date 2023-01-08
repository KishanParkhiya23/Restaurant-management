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
            'firstname' => "required",
            'lastname' => "required",
            'contact' => "required|min:10|max:10",
            'city' => "required",
            'dob' => "required",
            'gender' => "required",
            'email' => "required|email|unique:users,email",
            'profile_img' => "",
            'email_verified_at' => "",
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
            'firstname.required' => 'firstname Field is required',
            'lastname.required' => 'lastname Field is required',
            'contact.required' => "Contact Field is required",
            'contact.min , contact.max' => "Contact number must be 10 digits",
            'city.required' => 'City Field is required',
            'dob.required' => 'Date of birth Field is required',
            'gender.required' => 'Gender Field is required',
            'email.unique' => "Email id has already been taken please enter unique email id",
            'email.required' => "Email Id Field is required",
            'city.required' => 'Name Field is required',
            'password.required' => "Password Field is required",
        ];
    }
}
