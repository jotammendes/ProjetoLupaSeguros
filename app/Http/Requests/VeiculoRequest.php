<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'descricao_veiculo'=>['required','string'],					
            'chassi'=>['nullable','string'],
            'placa'=>['nullable','string'],
            'ano'=>['nullable','integer'],
            'combustivel'=>['nullable','string'],
            'alienado'=>['nullable','string'],
            'fator_de_ajuste'=>['nullable','numeric'],
            'valor_de_referencia'=>['nullable','numeric'],
            'cep_de_pernoite'=>['nullable','string'],
            'garagem_na_residencia'=>['nullable','string'],
            'garagem_no_trabalho'=>['nullable','string'],
            'garagem_no_local_de_estudo'=>['nullable','string'],
            'tipo_de_uso'=>['nullable','string'],
            'reside_com_menores_de_26_anos'=>['nullable','string'],
            'veiculos_na_residencia'=>['nullable','string'],
            'km_mensal'=>['nullable','numeric'],
            'tipo_de_residencia'=>['nullable','string'],
            'distancia_ate_o_trabalho'=>['nullable','numeric'],
        ];
    }

    public function messages()
    {
        return [
            'descricao_veiculo.required'=>'O campo Desc_Veiculo deve ser preenchido',
            'descricao_veiculo.string'=>'O campo Desc_Veiculo deve ser um texto',					
            'chassi.string'=>'O campo Chassi deve ser um válido',
            'placa.string'=>'O campo Placa deve ser um válido',
            'ano.integer'=> 'O campo Ano deve ser um número inteiro',
            'combustivel.string'=>'O campo Combustivel deve ser um válido',
            'alienado.string'=>'O campo Alienado deve ser um válido',
            'fator_de_ajuste.float'=>'O campo fator_de_ajuste deve ser um número com até duas casas decimais (0,00)',
            'valor_de_referencia.float'=>'O campo Valor_de_Referencia deve ser um número com até duas casas decimais (0,00)',
            'cep_de_pernoite.string'=>'O campo Cep_pernoite deve ser um válido',
            'garagem_na_residencia.string'=>'O campo Garagem_Residencia deve ser um válido',
            'garagem_no_trabalho.string'=>'O campo Garagem_Trabalho deve ser um válido',
            'garagem_no_local_de_estudo.string'=>'O campo Garagem_Estudo deve ser um válido',
            'tipo_de_uso.string'=>'O campo Tipo_de_Uso deve ser um válido',
            'reside_com_menores_de_26_anos.string'=>'O campo Reside<26 deve ser um válido',
            'veiculos_na_residencia.string'=>'O campo Veiculo_na_Residencia deve ser um válido',
            'km_mensal.float'=>'O campo km_mensal deve ser um número com até duas casas decimais (0,00)',
            'tipo_de_residencia.string'=>'O campo Tipo_Residencia deve ser um válido',
            'distancia_ate_o_trabalho.float'=>'O campo distancia_ate_o_trabalho deve ser um número com até duas casas decimais (0,00)',
        ];
    }
}