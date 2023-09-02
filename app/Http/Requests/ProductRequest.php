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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:4|max:255',
            'description' => 'required|min:4|max:30000',
            'distributor' => 'required',
            'price' => 'required|decimal:2',
            'stock' => 'required|integer|numeric'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório.',
            'min' => 'Mínimo 4 caracteres.',
            'stock.integer' => 'O campo precisa ser um número inteiro.',
            'price.decimal' => 'O campo precisa ser um número decimal no formato 1234.56.'
        ];
    }
}
