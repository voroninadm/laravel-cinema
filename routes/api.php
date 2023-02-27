<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// default
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('auth.register');
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'show')->name('user.show');
    Route::patch('/user', 'update')->name('user.update');
});

Route::controller(FilmController::class)->group(function () {
    Route::get('/films', 'index')->name('film.index');
    Route::get('/films/{id}', 'show')->name('film.show');
    Route::get('/films/{id}/similar', 'similar')->name('film.similar');
    Route::patch('/films/{id}', 'update')->name('film.update');
    Route::post('/films', 'store')->name('film.store');
});

Route::controller(GenreController::class)->group(function () {
    Route::get('/genres', 'index')->name('genre.index');
    Route::patch('/genres/{genre}', 'update')->name('genre.update');
});

Route::controller(FavouriteController::class)->group(function () {
    Route::get('/favourite', 'index')->name('favourite.index');
    Route::post('/films/{id}/favourite', 'store')->name('favourite.store');
    Route::delete('/films/{id}/favourite', 'destroy')->name('favourite.destroy');
});

Route::controller(PromoController::class)->group(function () {
    Route::get('/promo', 'show')->name('promo.show');
    Route::post('/promo/{id}', 'store')->name('promo.store');
});

Route::controller(CommentController::class)->group(function () {
    Route::get('/films/{id}/comments', 'index')->name('comment.index');
    Route::post('/films/{id}/comments', 'store')->name('comment.store');
    Route::patch('/comments/{comment}', 'update')->name('comment.update');
    Route::delete('/comments/{comment}', 'destroy')->name('comment.destroy');
});
