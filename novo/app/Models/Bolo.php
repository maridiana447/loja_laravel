<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bolo extends Model
{
    protected $table = 'bolo';

    protected $fillable = [
        'nome',
        'recheio',
        'cobertura',
        'descricao',
        'telefone',
        'endereco',
        'data_entrega',
    ];
}