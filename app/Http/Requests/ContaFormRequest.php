<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaFormRequest extends FormRequest
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
            'name'      => ['required','min:3'],
            'saldo'     => ['required','min:4']
        ];
    }

    public function messages(){
        return [
            'name.*'    => 'O campo nome é obrigatorio e precisa de  pelo menos 3 letras',
            'saldo.*'   => 'O campo saldo é obrigatorio digitar no minimo 4 números'
        ];
    }
}
