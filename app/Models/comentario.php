<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_nota',
        'comentario',
        'fecha'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function respuestas()
    {
        return $this->hasMany(respuesta::class, 'id_comentario', 'id');
    }
}
