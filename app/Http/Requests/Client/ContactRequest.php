<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'max:250'
        ];
    } 


    public function messages()
    {
        return [
            'name.required' => 'Name field is compulsory to fill',
            'email.required' => 'Email field is compulsory to fill',
            'email.email' => 'Email formet is not valid',
            'subject.required' => 'Subject field is compulsory to fill',
            'message.max' => 'Message length is very long, please summerize it',
        ];
    }
}
