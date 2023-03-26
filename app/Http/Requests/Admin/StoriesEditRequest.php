<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoriesEditRequest extends FormRequest
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
            "title" => "required",
            "date" => "required",
            "description" => "required"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Title is required to add.",
            "date.required" => "Date field is required to add.",
            "description.required" => "Description field is required to add."
        ];
    }
}
