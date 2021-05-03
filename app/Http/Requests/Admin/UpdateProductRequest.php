<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required',
            'slug' => [
                'required',
                Rule::unique('products')->ignore($this->id)
            ],
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'description' => 'required',
            'short_description' => 'required',
        ];
    }
}
