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

    protected $appends = [
        'valor_formatado',
        'data_formatada',
    ];

    protected $with = [
        'categoria',
    ];

    public function getValorFormatadoAttribute()
    {
        return number_format($this->valor, 2, ',', '');
    }

    public function getDataFormatadaAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->data));
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\CategoriaExemplo', 'categoria_id');
    }
}
