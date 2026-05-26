<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        // Indica que vai ler a view dentro de views/perfil/perfil.blade.php
        return view('perfil.perfil'); 
    }
}