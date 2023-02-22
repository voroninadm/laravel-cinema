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

//auth routes
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// user routes
Route::get('/user', [UserController::class, 'show'])->name('user.show');
Route::patch('/user', [UserController::class, 'update'])->name('user.update');

// film routes
Route::get('/films', [FilmController::class, 'index'])->name('film.index');
Route::get('/films/{id}', [FilmController::class, 'show'])->name('film.show');
Route::get('/films/{id}/similar', [FilmController::class, 'similar'])->name('film.similar');
Route::patch('/films/{id}', [FilmController::class, 'update'])->name('film.update');
Route::post('/films', [FilmController::class, 'store'])->name('film.store');

// genre routes
Route::get('/genres', [GenreController::class, 'index'])->name('genre.index');
Route::patch('/genres/{genre}', [GenreController::class, 'update'])->name('genre.update');

// favourite routes
Route::get('/favourite', [FavouriteController::class, 'index'])->name('favourite.index');
Route::post('/films/{id}/favourite', [FavouriteController::class, 'store'])->name('favourite.store');
Route::delete('/films/{id}/favourite', [FavouriteController::class, 'destroy'])->name('favourite.destroy');

// promo routes
Route::get('/promo', [PromoController::class, 'show'])->name('promo.show');
Route::post('/promo/{id}', [PromoController::class, 'store'])->name('promo.store');

// comment routes
Route::get('/films/{id}/comments', [CommentController::class, 'index'])->name('comment.index');
Route::post('/films/{id}/comments', [CommentController::class, 'store'])->name('comment.store');
Route::patch('/comments/{comment}', [CommentController::class, 'update'])->name('comment.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
