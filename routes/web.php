<?php

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

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/home/{id}', [BooksController::class, 'index']);
Route::get('/{id}/review/{idReview}', [ReviewsController::class, 'show']);
Route::get('/detail/{id}', [BooksController::class, 'show']);

