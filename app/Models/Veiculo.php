<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'veiculo_id',
        'descricao_veiculo',					
        'chassi',
        'placa',
        'ano',
        'combustivel',
        'alienado',
        'fator_de_ajuste',
        'valor_de_referencia',
        'cep_de_pernoite',
        'garagem_na_residencia',
        'garagem_no_trabalho',
        'garagem_no_local_de_estudo',
        'tipo_de_uso',
        'reside_com_menores_de_26_anos',
        'veiculos_na_residencia',
        'km_mensal',
        'tipo_de_residencia',
        'distancia_ate_o_trabalho',
    ];
}
