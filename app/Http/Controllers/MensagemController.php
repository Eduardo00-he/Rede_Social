<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        // Indica que vai ler a view dentro de views/messages/messages.blade.php
        return view('mensagens.mensagens'); 
    }
}