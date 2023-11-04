<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal\Animal;
use App\Models\Filtro;

class FiltroAnimalController extends Controller
{
    public function busca(Request $request)
    {
        $especie = $request->input('especie');
        $raca = $request->input('raca');
        $local = $request->input('local');
        $porte = $request->input('porte');
        $genero = $request->input('genero');

        $query = Animal::query();

        if ($especie) {$query->where('especie', $especie);}
        if ($raca) {$query->where('raca', $raca);}
        if ($local) {$query->where('local', $local);}
        if ($porte) {$query->where('porte', $porte);}
        if ($genero) {$query->where('genero', $genero);}

        $animais = $query->get();

        return view('quero-adotar', compact('animais'));
    }
}
