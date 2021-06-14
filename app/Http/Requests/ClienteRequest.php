<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required','string'],
            'cpf'  => ['required','string'],
            'data_nascimento'  => ['required', 'date'],
            'estado_civil'  => ['required','string'],
            'genero'  => ['required','string'],
            'telefone'  => ['required','string'],
            'email'  => ['required','string'],
            'seguradora_anterior'  => ['nullable','string'],
            'preco_anterior'  => ['nullable','numeric'],
            'bonus'  => ['nullable','integer'],
            'vigencia_entrada'  => ['nullable','date'],
            'vigencia_saida'  => ['nullable','date'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome deve ser preenchido',
            'nome.string' => 'O campo Nome deve ser um texto',

            'cpf.required' => 'O campo CPF deve ser preenchido',
            'cpf.string' => 'O campo CPF deve ser um texto',
            
            'data_nascimento.required' => 'O campo Data deve ser preenchido',
            'data_nascimento.date' => 'O campo Data deve ser uma data',

            'estado_civil.required' => 'O campo Estado_Civil deve ser preenchido',
            'cpf.string' => 'O campo Estado_Civil deve ser um válido',

            'genero.required' => 'O campo Genero deve ser preenchido',
            'genero.string' => 'O campo Genero deve ser um válido',

            'telefone.required' => 'O campo Telefone deve ser preenchido',
            'telefone.string' => 'O campo Telefone deve ser um válido',

            'email.required' => 'O campo Email deve ser preenchido',
            'email.string' => 'O campo Email deve ser um email Válido',

            'seguradora_anterior.string' => 'O campo Seguradora_Anterior deve ser um válido',

            'preco_anterior.float' => 'O campo Valor deve ser um número com até duas casas decimais (0,00)',

            'bonus.integer' => 'O campo Bonus deve ser um número inteiro',

            'vigencia_entrada.date' => 'O campo Data deve ser uma data',

            'vigencia_saida.date' => 'O campo Data deve ser uma data',  
            
            
            
        ];
    }
}