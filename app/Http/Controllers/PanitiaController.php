<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panitia;

class PanitiaController extends Controller
{
    public function index()
    {
        $panitia = Panitia::all();
        
        return view('panitia', [
            "title" => 'Panitia',
            "panitia" => $panitia
        ]);
        
    }

    public function show($panitia)
{
    $panitia = Panitia::find($panitia);

    return view('panitia.detail', [
        'title' => 'Detail Panitia',
        'panitia' => $panitia
    ]);    
}
}
