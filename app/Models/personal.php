<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'apepaterno',
        'apematerno',
        'nombre',
        'direccion',
        'fechadeingreso',
        'id_user'
    ];
}
