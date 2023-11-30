<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Favor preencher o nome do produto.',
            'name.min' => 'O nome do produto deve ter no mínimo 2 caracteres.',
            'name.max' => 'O nome do produto deve ter no máximo 50 caracteres.',
            'price.required' => 'Favor preencher o preço do produto.',
            'price.numeric' => 'O preço do produto deve ser um valor numérico.',
            'price.min' => 'O preço do produto deve ser maior que zero.',
            'quantity.required' => 'Favor preencher a quatidade em estoque do produto..',
            'quantity.integer' => 'A quantidade em estoque deve ser um valor inteiro.',
            'quantity.min' => 'A quantidade em estoque deve ser maior ou igual a zero.',
            'quantity.max' => 'A quantidade em estoque não pode ser maior que 1000.',
        ];
    }
}
