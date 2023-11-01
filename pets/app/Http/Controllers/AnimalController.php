<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal\Animal;

class AnimalController extends Controller
{
    public function adotar()
    {
        $animais = Animal::orderBy('id')->get();
        return view('quero-adotar', compact('animais'));
    }

}
