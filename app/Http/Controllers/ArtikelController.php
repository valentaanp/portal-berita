<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; 

class ArtikelController extends Controller
{
    public function index()
    {
        // return view('artikel.index');

        $artikels = Artikel::with(['kategori'])->latest()->get();

        return view('artikel.index', compact('artikels'));
    }

    public function show($id)
    {
        // $artikel = Artikel::findOrFail($id);

        // return view('artikel.detail', compact('artikel'));
        return view('artikel.detail');
    }
}
