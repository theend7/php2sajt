<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertDestRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "picture" =>"required|mimes:jpeg,jpg,png|max:5000",
            "alt" =>"min:4",
            "name" => "min:5",
            "price" => "required|numeric|min:0"
        ];
    }
    public function messages(){
        return [
            "required"=>"This field is required!"
        ];
    }
}
