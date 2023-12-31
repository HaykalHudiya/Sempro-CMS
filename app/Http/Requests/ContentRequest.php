<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:10', 'max:70', 'string'],
            'file' => ['required', 'image', 'mimes:png,jpg,jpeg,svg,webp', 'dimensions:min-width=450', 'dimensions:min-height=500'],
        ];
    }
}
