<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'prodName' => 'required',
            'price' => 'required|decimal:0,2',
            'category_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'prodName.required' => 'El nombre es requerido',
            'price.required' => 'El precio es requerido',
            'price.decimal' => 'El precio debe ser un decimal',
            'category_id.required' => 'La categoria es requerida',
        ];
    }
}
