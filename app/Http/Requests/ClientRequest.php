<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|min:2',
            'cpf' => 'required|between:11,14', 
            'phone' => 'required|between:12,16',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Favor preencher o nome do cliente.',
            'name.min' => 'O nome do cliente deve ter no mínimo 2 caracteres.',
            'cpf.required' => 'Favor preencher o CPF do cliente.',            
            'cpf.between' => 'O CPF do cliente deve ter entre 11 números e/ou 14 dígitos.',
            'phone.required' => 'Favor preencher o número de celular do cliente.',
            'phone.between' => 'O número de celular do cliente deve conter entre 14 e 16 dígitos.',
            'street.required' => 'Favor preencher a rua do cliente.',
            'number.required' => 'Favor preencher o número da casa do cliente.',
            'neighborhood.required' => 'Favor preencher o bairro do cliente.',
            'city.required' => 'Favor preencher a cidade do cliente.',
            'state.required' => 'Favor preencher o estado do cliente.'
        ];
    }
}
