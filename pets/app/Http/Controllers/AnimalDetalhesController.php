<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal\Animal;

class AnimalDetalhesController extends Controller
{
    public function integraDetalhe($id)
    {
        $animal = Animal::find($id);
        return view('integra', compact('animal'));
    }
}
