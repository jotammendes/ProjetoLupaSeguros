<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exemplo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'imagem',
        'nome',
        'valor',
        'quantidade',
        'data',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Models\CategoriaExemplo', 'categoria_id');
    }
}
