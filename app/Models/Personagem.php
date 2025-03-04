<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $fillable = [
        'imagem',
        'descricao',
        'stats',
        'status',
    ];
    protected $table = 'personagens';
}
