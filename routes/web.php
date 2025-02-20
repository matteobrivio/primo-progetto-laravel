<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono', function () {
    return view('chi-sono');
});

Route::get('/contatti', function () {

    $services = ['web', 'market', 'consulenza'];
    $titolo = 'i miei servizi';
    return view('contatti', ['services'=>$services, 'titolo'=>$titolo]);
});

Route::get('/contatti/{parametro}', function($parametro){
    return $parametro;
});