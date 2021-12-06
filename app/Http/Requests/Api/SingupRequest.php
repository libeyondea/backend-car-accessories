<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SingupRequest extends FormRequest
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
            'first_name' => 'required|string|min:2|max:66',
            'last_name' => 'required|string|min:2|max:66',
            'user_name' => 'required|alpha_dash|min:2|max:66|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:100',
            'phone_number' => 'required|numeric|digits_between:6,20',
            'address' => 'required|string|min:2|max:666',
            'gender' => ['required', Rule::in(['male', 'female', 'other'])]
        ];
    }
}
