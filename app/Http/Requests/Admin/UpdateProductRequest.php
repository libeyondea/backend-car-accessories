<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

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

    public function rules()
    {
        return [
            'slug' => 'nullable|string',
            'name' => 'required|string|max:166',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
        ];
    }

    public function messages()
    {
        return [];
    }
}
