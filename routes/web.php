<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/asientos', function () {
    return view('seats');
});

Route::get('/boletos-comprados', function () {
    return view('purchase');
});

Route::get('/peliculas', [MovieController::class, 'getMoviesPage']);
Route::get('/pelicula/{id}', [MovieController::class, 'getMoviePage']);

Route::get('/categorias', [CategoryController::class, 'getCategoriesPage']);
