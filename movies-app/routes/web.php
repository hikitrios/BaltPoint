<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MovieController@index');

Route::resource('movies', 'MovieController')
    ->only(['index', 'create', 'store']);