<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hadiah;

class HadiahController extends Controller
{
    public function index()
    {
        $hadiah = Hadiah::all();
        
        return view('hadiah', [
            "title" => 'Hadiah',
            "hadiah" => $hadiah
        ]);
    }

    public function show($hadiah)
{
    $hadiah = Hadiah::find($hadiah);

    return view('hadiah.detail', [
        'title' => 'Detail Hadiah',
        'hadiah' => $hadiah
    ]);
}
}