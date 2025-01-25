<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [AnimeController::class, 'index']);
Route::get('/anime/{id}', [AnimeController::class, 'show']);
Route::post('/anime/favorite', [AnimeController::class, 'addToFavorites']);
Route::get('/favorites', [AnimeController::class, 'favorites']);
