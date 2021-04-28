<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminUserRequest extends FormRequest
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
            'email'   => [
                'required',
                'email',
                Rule::unique('admin_users')->ignore($this->id)
            ],
            'role' => 'required|exists:roles,id',
            'profile_picture' => 'image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
