<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; 

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();

        return view('artikel.index', compact('artikel'));
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('artikel.detail', compact('artikel'));
    }
}
