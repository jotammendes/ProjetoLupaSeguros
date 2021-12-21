<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
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

    protected $appends = [
        'fator_de_ajuste_formatado',
        'valor_de_referencia_formatado',
    ];

    protected $with = [
        'cliente',
    ];

    public function getFatorDeAjusteFormatadoAttribute()
    {
        return number_format($this->fator_de_ajuste, 2, ',', '');
    }

    public function getValorDeReferenciaFormatadoAttribute()
    {
        return number_format($this->valor_de_referencia, 2, ',', '');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }

    public function seguradoras()
    {
        return $this->hasMany('App\Models\Seguradora', 'veiculo_id');
    }
}
