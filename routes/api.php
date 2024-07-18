<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\movieController;
use App\Http\Controllers\directorController;
use App\Http\Controllers\actorController;
use App\Http\Controllers\authController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/movies', [movieController::class, 'index']);
    Route::get('/movies/{id}', [movieController::class, 'show']);
    Route::get('/directors/{id}', [directorController::class, 'show']);
    Route::get('/actors/{id}', [actorController::class, 'show']);
    Route::get('/movies/genres', [movieController::class, 'moviesWithGenres']);
    Route::get('/movies/ratings', [movieController::class, 'moviesWithRatings']);
});

Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomAuthController::class, 'login']);
