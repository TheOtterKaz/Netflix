<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\FilmsController;

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
    return view('layouts.app');
});

Route::get('films', 
[FilmsController::class, 'index']) ->name('films.index');

Route::get('/films/creation',
[FilmsController::class, 'create']) ->name('films.create');

Route::get('/films/{film}/',
[FilmsController::class, 'show']) ->name('films.show');

Route::get('personnes',
[PersonnesController::class, 'index']) ->name('personnes.index');


Route::post('/films',
[FilmsController::class, 'store']) ->name('films.store');