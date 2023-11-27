<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/cupones', function () {
    return view('cupones');
});

Route::get('/ordenes', function () {
    return view('ordenes');
});

Route::get('/inventarios', function () {
    return view('inventarios');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/configuraciones', function () {
    return view('configuraciones');
});


