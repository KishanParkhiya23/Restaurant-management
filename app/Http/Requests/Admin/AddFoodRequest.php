<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AddFoodRequest extends FormRequest
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
            "prize" => "required|numeric",
            "poppings" => "required",
            "type" => "",
            "image" => ""
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Please enter name of item",
            "prize.required" => "Please enter prize of item",
            "prize.numeric" => "Item prize is must be in number",
            "poppings.required" => "Please enter poppings of item"
        ];
    }
}
