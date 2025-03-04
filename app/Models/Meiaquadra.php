<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meiaquadra extends Model
{
    protected $fillable = [
        'usuario_id',
        'personagem1_id',
    ];
    protected $table = 'meia-quadra';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
