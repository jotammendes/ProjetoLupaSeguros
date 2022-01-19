<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguradora extends Model
{
    use HasFactory;

    protected $fillable = [
        'veiculo_id',
        'foto',
        'nome',					
        'proposta',
        'valor',
        'detalhe_do_valor',
        'franquia',
        'cobertura',
        'danos_materiais',
        'danos_corporais',
        'danos_morais',
        'morte_invalidez',
        'vidros',
        'carro_reserva',
        'assistencia',
        'observacoes',
    ];
    
    protected $appends = [
        'franquia_formatada',
        'valor_formatado',
        'danos_materiais_formatado',
        'danos_corporais_formatado',
        'danos_morais_formatado',
        'morte_invalidez_formatado'
    ];

    protected $with = [
        'veiculo',
    ];

    public function getFranquiaFormatadaAttribute()
    {
        return 'R$ ' . number_format($this->franquia, 2, ',', '');
    }

    public function getValorFormatadoAttribute()
    {
        return 'R$ ' . number_format($this->valor, 2, ',', '');
    }

    public function getDanosMateriaisFormatadoAttribute()
    {
        return 'R$ ' . number_format($this->danos_materiais, 2, ',', '');
    }

    public function getDanosCorporaisFormatadoAttribute()
    {
        return 'R$ ' . number_format($this->danos_corporais, 2, ',', '');
    }

    public function getDanosMoraisFormatadoAttribute()
    {
        return 'R$ ' . number_format($this->danos_morais, 2, ',', '');
    }

    public function getMorteInvalidezFormatadoAttribute()
    {
        return 'R$ ' . number_format($this->morte_invalidez, 2, ',', '');
    }

    public function veiculo()
    {
        return $this->belongsTo('App\Models\Veiculo', 'veiculo_id');
    }
}
