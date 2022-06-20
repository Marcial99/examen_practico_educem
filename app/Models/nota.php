<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'contenido',
        'id_user',
        'imagen',
        'fecha'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
