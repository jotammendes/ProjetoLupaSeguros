<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento', 
        'estado_civil',
        'genero',
        'telefone',
        'email',
        'seguradora_anterior',
        'preco_anterior',
        'bonus',
        'vigencia_entrada',
        'vigencia_saida',
    ];

    protected $appends = [
        'data_nascimento_formatada',
        'preco_anterior_formatado',
        'vigencia_entrada_formatada',
        'vigencia_saida_formatada',
    ];

    public function getDataNascimentoFormatadaAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->data));
    }

    public function getPrecoAnteriorFormatadoAttribute()
    {
        return number_format($this->valor, 2, ',', '');
    }

    public function getVigenciaEntradaFormatadaAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->data));
    }

    public function getVigenciaSaidaFormatadaAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->data));
    }

    
}
