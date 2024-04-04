<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileCompleteRequest extends FormRequest
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
            'escort_name'=>'required',
            'whatsapp_number'=>'required',
            'sexuality'=>'required',
            'quarter_id'=>'required',
            "age"=>"required",
            'description'=>"required",
            "quarter_id"=>"required",
            "shape_id"=>"required",
            'height_id'=>"required",
            'weight_id'=>"required",
            "skin_color_id"=>"required",
            "genre"=>"required"
        ];
    }
}
