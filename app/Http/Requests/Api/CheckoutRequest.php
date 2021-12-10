<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckoutRequest extends FormRequest
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
            'email' => 'required|email',
            'phone_number' => 'required|numeric|digits_between:6,20',
            'address' => 'required|string|min:2|max:666',
        ];
    }
}
