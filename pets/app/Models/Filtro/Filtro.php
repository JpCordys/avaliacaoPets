<?php

namespace App\Models\Filtro;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filtro extends Model
{
    use HasFactory;

    protected $fillable = [
        'especie',
        'raca',
        'local',
        'porte',
        'genero',
    ];
}
