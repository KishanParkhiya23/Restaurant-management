<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileSaveRequest extends FormRequest
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
            'email' => "required|email",
            'profile_img' => "",
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
            'firstname.required' => 'First name  is required',
            'lastname.required' => 'Last name  is required',
            'contact.required' => "Contact  is required",
            'contact.min , contact.max' => "Contact number must be 10 digits",
            'city.required' => 'City  is required',
            'dob.required' => 'Date of birth  is required',
            'gender.required' => 'Gender  is required',
            'email.required' => "Email Id  is required",
            'city.required' => 'City  is required',
        ];
    }
}
