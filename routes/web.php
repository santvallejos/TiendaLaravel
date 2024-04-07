<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Luego del Auth, son todas rutas protegidas
Auth::routes();

//Verifica si esta logeado el usuario
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
