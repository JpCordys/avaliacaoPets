<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
        {if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/painel');
        } else {
            return redirect()->route('admin.login')->with('error', 'Credenciais inválidas');
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
