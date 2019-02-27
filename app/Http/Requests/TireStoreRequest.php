<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TireStoreRequest extends FormRequest
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
            'name'          => 'required',
            'slug'          => 'required|unique:tires,slug',
            'file'          => 'nullable|mimes:jpeg,png,jpg',
            'brand'         => 'nullable|mimes:jpeg,png,jpg',
            'data'          => 'nullable|mimes:jpeg,png,jpg',
        ];
    }
}
