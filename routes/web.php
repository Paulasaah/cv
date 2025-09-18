<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/proyectos', function () {
    return view('proyectos');
});

