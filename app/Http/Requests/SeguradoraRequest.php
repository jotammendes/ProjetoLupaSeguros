<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeguradoraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
            'foto' => (!empty($this->request->all()['id']) ? ['required','image'] : ['nullable','image']),
            'nome' => ['required', 'string'],
            'cnpj' => ['nullable','string'],
            'valor' => ['required', 'numeric'],
            'detalhe_do_valor' => ['nullable','string'],
            'franquia'=> ['nullable','numeric'],
            'cobertura'=> ['nullable','string'],
            'danos_materiais' => ['nullable','numeric'],
            'danos_corporais' => ['nullable','numeric'],
            'danos_morais' => ['nullable','numeric'],
            'morte_invalidez' => ['nullable','numeric'],
            'vidros'=> ['nullable','string'],
            'carro_reserva'=> ['nullable','string'],
            'assistencia'=> ['nullable','string'],
            'observacoes'=> ['nullable','string'],
        ];
    }

    public function messages()
    {
        return [
            'foto.required' => 'O campo Imagem deve ser preenchido',
            'foto.image' => 'O campo Imagem deve ser de um formato válido',
            'nome.required' => 'O campo Nome deve ser preenchido',
            'nome.string' => 'O campo Nome deve ser um texto',
            'valor,required' => 'O campo Valor deve ser preenchido',
            'valor.float' => 'O campo Valor deve ser um número com até duas casas decimais (0,00)',
            'detalhe_do_valor.string' => 'O campo detalhe_do_valor deve ser um válido',
            'franquia.float'=> 'O campo Franquia deve ser um número com até duas casas decimais (0,00)',
            'cobertura.string'=> 'O campo cobertura deve ser um válido',
            'danos_materiais.float' => 'O campo Danos_Materiais deve ser um número com até duas casas decimais (0,00)',
            'danos_corporais.float' => 'O campo Danos_Corporais deve ser um número com até duas casas decimais (0,00)',
            'danos_morais.float' => 'O campo Danos_Morais deve ser um número com até duas casas decimais (0,00)',
            'morte_invalidez.float' => 'O campo Morte_Invalidez deve ser um número com até duas casas decimais (0,00)',
            'vidros.string'=> 'O campo vidros deve ser um texto',
            'carro_reserva.string'=> 'O campo carro_reserva deve ser um válido',
            'assistencia.string'=> 'O campo assistencia deve ser um válido',
            'observacoes.string'=> 'O campo observações deve ser um válido',
        ];
    }
}