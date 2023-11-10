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

    //* Création
        Route::get('/films/creation',
        [FilmsController::class, 'create']) ->name('films.create');

    //* Modification
        Route::get('/films/{film}/modifier',
        [FilmsController::class, 'edit']) ->name('films.edit');

    //* Affichage zoom
        Route::get('/films/{film}/',
        [FilmsController::class, 'show']) ->name('films.show');

Route::post('/films',
[FilmsController::class, 'store'])->name('films.store');

// Personnes
Route::get('personnes',
[PersonnesController::class, 'index']) ->name('personnes.index');

    //* Création
        Route::get('personnes/creation',
        [PersonnesController::class, 'create']) ->name('personnes.create');

    //* Modification
        Route::get('/personnes/{personne}/modifier',
        [PersonnesController::class, 'edit']) ->name('personnes.edit');

Route::get('/personnes/{personne}',
[PersonnesController::class, 'show']) ->name('personnes.show');

//? : Store

    //* Personnes
        Route::post('/personnes',
        [PersonnesController::class, 'store'])->name('personnes.store');

Route::post('/films',
[FilmsController::class, 'store'])->name('films.store');