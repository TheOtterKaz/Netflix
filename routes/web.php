<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilsController;
use App\Http\Controllers\PersonnesController;

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
[AccueilsController::class, 'index']);

Route::get('personnes',
[PersonnesController::class, 'index']);
