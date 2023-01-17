<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EditChefRequest extends FormRequest
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
            "name" => "required",
            "speciality" => "required",
            "discription" => "required",
            "image" => ""
        ];
    }

    public function messages()
    {
        return[
            "name.required" => "Name is required",
            "speciality.required" => "Speciality is required",
            "discription.required" => "Discription is required"
        ];
    }
}
