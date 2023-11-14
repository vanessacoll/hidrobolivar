<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'desc')
        ->take(3) // ultimas 3 noticias
        ->get();
        return view('welcome', compact('noticias'));
    }
}
