<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal\Animal;

class AnimalFormuController extends Controller
{
    public function formuDetalhe($id)
    {
        $animal = Animal::find($id);
        return view('formulario', compact('animal'));
    }
}
