<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_comentario',
        'id_user',
        'respuesta',
        'fecha'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
    public function comentario()
    {
        return $this->hasOne(comentario::class, 'id', 'id_comentario');
    }
}
