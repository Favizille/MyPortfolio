<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "name"=> "required",
            "category" => "required",
            "client" => "required",
            "date" => "required",
            "github" => "required",
            "url" => "required",
            "description" => "required",
            "image1" => "required|mimes:png,jpg,jpeg",
            "image2" => "required|mimes:png,jpg,jpeg",
            "image3" => "required|mimes:png,jpg,jpeg",
        ];
    }
}
