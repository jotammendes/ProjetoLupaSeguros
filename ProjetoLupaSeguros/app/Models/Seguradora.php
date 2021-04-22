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
        'cnpj',
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
    
}
