<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-page', function () {
    return 'Bem-vindo à minha página!';
});
