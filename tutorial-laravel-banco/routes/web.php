<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar', function () {
    return view('produtos.cadastrar-produto');
});

Route::get('/detalhe', function () {
    return view('produtos.detalhe-produto');
});