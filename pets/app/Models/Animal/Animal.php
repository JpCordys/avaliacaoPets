<?php

namespace App\Models\Animal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais';

    protected $fillable = [
        "especie",
        "nome",
        "porte",
        "codigo",
        "img",
        "peso",
        "idade",
        "local",
        "sobre",
        "genero",
        "raca",
    ];
}
