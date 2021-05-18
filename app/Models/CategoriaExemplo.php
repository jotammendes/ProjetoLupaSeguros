<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaExemplo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo'
    ];

    public function exemplos()
    {
        return $this->hasMany('App\Models\Exemplo', 'categoria_id');
    }
}
