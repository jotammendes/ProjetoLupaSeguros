<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExemploRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'imagem' => (!empty($this->request->all()['id']) ? ['image'] : ['required','image']),
            'nome' => ['required', 'string'],
            'valor' => ['required', 'float'],
            'quantidade' => ['required', 'integer'],
            'data' => ['required', 'date'],
        ];
    }

    public function messages()
    {
        return [
            'imagem.required' => 'O campo Imagem deve ser preenchido',
            'imagem.image' => 'O campo Imagem deve ser de um formato válido',
            'nome.required' => 'O campo Nome deve ser preenchido',
            'nome.string' => 'O campo Nome deve ser um texto',
            'valor,required' => 'O campo Valor deve ser preenchido',
            'valor.float' => 'O campo Valor deve ser um número com até duas casas decimais (0,00)',
            'quantidade.required' => 'O campo Quantidade deve ser preenchido',
            'quantidade.integer' => 'O campo Quantidade deve ser um número inteiro',
            'data.required' => 'O campo Data deve ser preenchido',
            'data.date' => 'O campo Data deve ser uma data',
        ];
    }
}
