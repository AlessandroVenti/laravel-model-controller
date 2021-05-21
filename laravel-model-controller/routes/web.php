<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('movies', 'MoviesController@moviesFunction');

Route::get('/movies/{id}', 'MoviesController@movieDetailFunction') -> name('movie');
