<?php

namespace App\Http\Controllers;

class ExplorarController extends Controller
{
    public function index()
    {
        // Indica que vai ler a view dentro de views/explore/explore.blade.php
        return view('explorar.explorar'); 
    }
}