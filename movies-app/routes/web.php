<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index']);

Route::resource('movies', MovieController::class)
    ->only(['index', 'create', 'store']);