<?php

use Illuminate\Support\Facades\Route;
use App\Models\Lomba;
use App\Models\Panitia;
use App\Models\Hadiah;
use App\HTTP\Controllers\LombaController; 
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\HadiahController;



Route::get('/', function () {
    return view('home');
});
Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);   
});

Route::get('/lomba/all', [LombaController::class, 'index']);
Route::get('/lomba/detail/{lomba}', [LombaController::class, 'show']);
Route::get('/panitia/all', [PanitiaController::class, 'index']);
Route::get('/panitia/detail/{panitia}', [PanitiaController::class, 'show']);
Route::get('/hadiah/all', [HadiahController::class, 'index']);
Route::get('/hadiah/detail/{hadiah}', [HadiahController::class, 'show']);


