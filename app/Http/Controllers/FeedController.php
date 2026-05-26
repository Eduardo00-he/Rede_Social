<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        // Indica que vai ler a view dentro de views/feed/feed.blade.php
        return view('feed.feed'); 
    }
}