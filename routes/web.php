<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AidesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PrixController;
use App\Http\Controllers\FaqController;

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

//? Films
        Route::get('films', 
        [FilmsController::class, 'index']) ->name('films.index')->middleware('CheckRole:Admin, Adulte, Enfant');

    //* Création
        Route::get('/films/creation',
        [FilmsController::class, 'create'])->name('films.create')->middleware('CheckRole:Admin');
        
        Route::post('/films',
        [FilmsController::class, 'store'])->name('films.store')->middleware('CheckRole:Admin');

    //* Modification
        Route::get('/films/{film}/modifier',
        [FilmsController::class, 'edit']) ->name('films.edit')->middleware('CheckRole:Admin');

        Route::patch('/films/{film}/modifier',
        [FilmsController::class, 'update'])->name('films.update')->middleware('CheckRole:Admin');

    //* Affichage zoom
        Route::get('/films/{film}/',
        [FilmsController::class, 'show']) ->name('films.show')->middleware('CheckRole:Admin, Adulte, Enfant');

    //* Suppression
        Route::delete('/films/{film}',
        [FilmsController::class, 'destroy']) ->name('films.destroy')->middleware('CheckRole:Admin');    

    //* Liste des films ADMIN
        Route::get('/admin/films',
        [FilmsController::class, 'indexAdminF']) ->name('admin.listeFilms')->middleware('CheckRole:Admin');

//? Personnes
        Route::get('personnes',
        [PersonnesController::class, 'index']) ->name('personnes.index')->middleware('CheckRole:Admin, Adulte, Enfant');

    //* Création
        Route::get('personnes/creation',
        [PersonnesController::class, 'create']) ->name('personnes.create')->middleware('CheckRole:Admin');

        Route::post('/personnes',
        [PersonnesController::class, 'store'])->name('personnes.store')->middleware('CheckRole:Admin');

    //* Modification
        Route::get('/personnes/{personne}/modifier',
        [PersonnesController::class, 'edit']) ->name('personnes.edit')->middleware('CheckRole:Admin');

        Route::patch('/personnes/{personne}/modifier',
        [PersonnesController::class, 'update'])->name('personnes.update')->middleware('CheckRole:Admin');

    //* Affichage zoom    
        Route::get('/personnes/{personne}',
        [PersonnesController::class, 'show']) ->name('personnes.show')->middleware('CheckRole:Admin, Adulte, Enfant');

    //* Suppression
        Route::delete('/personnes/{personne}',
        [PersonnesController::class, 'destroy'])->name('personnes.destroy')->middleware('CheckRole:Admin');

    //* Liste des personnes ADMIN
        Route::get('/admin/personnes',
        [PersonnesController::class, 'indexAdminP']) ->name('admin.listePers')->middleware('CheckRole:Admin,');

//? Usagers
    //* Connexion
        Route::get('/login',
        [UsagersController::class, 'showLoginForm']) ->name('login')->middleware('CheckRole:Admin, Adulte, Enfant');

        Route::post('/login',
        [UsagersController::class, 'login'])->name('loginAuth')->middleware('CheckRole:Admin, Adulte, Enfant');

    //* Déconnexion
        Route::post('/logout',
        [UsagersController::class, 'logout']) ->name('logout');

    //* Création
        Route::get('/usagers/creation',
        [UsagersController::class, 'create']) ->name('usagers.create')->middleware('CheckRole:Admin');

        Route::post('/usagers',
        [UsagersController::class, 'store'])->name('usagers.store')->middleware('CheckRole:Admin');

    //* Modification
        Route::get('/usagers/{usager}/modifier',
        [UsagersController::class, 'edit']) ->name('usagers.edit')->middleware('CheckRole:Admin');

        Route::patch('/usagers/{usager}/modifier',
        [UsagersController::class, 'update'])->name('usagers.update')->middleware('CheckRole:Admin');

    //* Suppression
        Route::delete('/usagers/{usager}',
        [UsagersController::class, 'destroy']) ->name('usagers.destroy')->middleware('CheckRole:Admin');

    //* Liste des usagers ADMIN
        Route::get('/admin/usagers',
        [UsagersController::class, 'indexAdminU']) ->name('admin.listeUsagers')->middleware('CheckRole:Admin');

//? Autres
    //* Page des prix
        Route::get('prix',
        [PrixController::class, 'index']) ->name('prix.index')->middleware('CheckRole:Admin, Adulte, Enfant'); 

    //* Page de la FAQ
        Route::get('aide',
        [AidesController::class, 'index']) ->name('aide.index')->middleware('CheckRole:Admin, Adulte, Enfant'); 


    
