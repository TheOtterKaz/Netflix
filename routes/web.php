<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AidesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PrixController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UsagersController;

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
        [FilmsController::class, 'index']) ->name('films.index');

    //* Création
        Route::get('/films/creation',
        [FilmsController::class, 'create']) ->name('films.create');
        
        Route::post('/films',
        [FilmsController::class, 'store'])->name('films.store');

    //* Modification
        Route::get('/films/{film}/modifier',
        [FilmsController::class, 'edit']) ->name('films.edit');

        Route::patch('/films/{film}/modifier',
        [FilmsController::class, 'update'])->name('films.update');

    //* Affichage zoom
        Route::get('/films/{film}/',
        [FilmsController::class, 'show']) ->name('films.show');

    //* Suppression
        Route::delete('/films/{film}',
        [FilmsController::class, 'destroy']) ->name('films.destroy');    

    //* Liste des films ADMIN
        Route::get('/admin/films',
        [FilmsController::class, 'indexAdminF']) ->name('admin.listeFilms');

//? Personnes
        Route::get('personnes',
        [PersonnesController::class, 'index']) ->name('personnes.index');

    //* Création
        Route::get('personnes/creation',
        [PersonnesController::class, 'create']) ->name('personnes.create');

        Route::post('/personnes',
        [PersonnesController::class, 'store'])->name('personnes.store');

    //* Modification
        Route::get('/personnes/{personne}/modifier',
        [PersonnesController::class, 'edit']) ->name('personnes.edit');

        Route::patch('/personnes/{personne}/modifier',
        [PersonnesController::class, 'update'])->name('personnes.update');

    //* Affichage zoom    
        Route::get('/personnes/{personne}',
        [PersonnesController::class, 'show']) ->name('personnes.show');

    //* Suppression
        Route::delete('/personnes/{id}',
        [PersonnesController::class, 'destroy'])->name('personnes.destroy');

    //* Liste des personnes ADMIN
        Route::get('/admin/personnes',
        [PersonnesController::class, 'indexAdminP']) ->name('admin.listePers');

//? Usagers
    //* Connexion
        Route::get('/usagers/login',
        [UsagersController::class, 'showLoginForm']) ->name('usagers.login');

    //* Création
        Route::get('usagers/creation',
        [UsagersController::class, 'create']) ->name('usagers.create');

    //* Modification
        Route::get('/usagers/{usager}/modifier',
        [UsagersController::class, 'edit']) ->name('usagers.edit');

        Route::patch('/usagers/{usager}/modifier',
        [UsagersController::class, 'update'])->name('usagers.update');

    //* Déconnexion
        Route::get('/usagers/logout',
        [UsagersController::class, 'logout']) ->name('usagers.logout');

    //* Liste des usagers ADMIN
        Route::get('/admin/usagers',
        [UsagersController::class, 'indexAdminU']) ->name('admin.listeUsagers');

//? Autres
    //* Page des prix
        Route::get('prix',
        [PrixController::class, 'index']) ->name('prix.index'); 

    //* Page de la FAQ
        Route::get('aide',
        [AidesController::class, 'index']) ->name('aide.index'); 


    
