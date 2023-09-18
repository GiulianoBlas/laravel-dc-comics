<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class  , 'home'])->name('partials.home');

Route::get('/comic/{comic}', [MainController::class  , 'singleComic'])->name('partials.single-comic');

Route::resource('comics', ComicController::class);