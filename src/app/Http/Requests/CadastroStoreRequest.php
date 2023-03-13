<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'colaborador.nome' => 'required|max:100',
            'colaborador.email' => 'required|email|max:100',
            'colaborador.cpf' => 'required|max:14|unique:cadastros,cpf'
        ];
    }

    public function messages()
    {
        return [
            'colaborador.nome.required' => 'O nome e obrigatorio',
            'colaborador.nome.max' => 'O nome precisa ter no maximo 100 caracteres',
    
            'colaborador.email.required' => 'O email e obrigatorio',
            'colaborador.email.max' => 'O email precisa ter no maximo 100 caracteres',
            'colaborador.email.email' => 'o endereco de email e invalido',
    
            'colaborador.cpf.required' => 'O cpf e obrigatorio',
            'colaborador.cpf.max' => 'O cpf precisa ter no maximo 14 caracteres',
            'colaborador.cpf.unique' => 'Ja existe um cpf cadastrado em nossa base, por favor, tentar novamente com outro',

        ];
    }
}
