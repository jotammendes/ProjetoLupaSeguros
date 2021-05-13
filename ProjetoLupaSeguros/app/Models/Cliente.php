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


}
