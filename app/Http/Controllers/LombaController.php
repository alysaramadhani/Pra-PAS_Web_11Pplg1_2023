<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lomba;

class LombaController extends Controller
{
    public function index()
    {
        $lomba = Lomba::all();
        
        return view('lomba', [
            "title" => 'Lomba',
            "lomba" => $lomba
        ]);
    }

    public function show($lomba)
    {
        $lomba = Lomba::find($lomba);

        return view('lomba.detail', [
            'title' => 'Detail Lomba',
            'lomba' => $lomba
        ]);
}
}
