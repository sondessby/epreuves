<?php

use App\Http\Controllers\EprController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;

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
    return view('welcome');
});

Route::get ('/matieres/index',[MatiereController::class,'index'])->name('matieres.index');
Route::get ('/matieres/create',[MatiereController::class,'create'])->name('matieres.create');
Route::post ('/matieres/store',[MatiereController::class,'store'])->name('matieres.store');

Route::get ('/epreuves',[EprController::class,'index'])->name('epreuves.index');
Route::get ('/epreuves/create',[EprController::class,'create'])->name('epreuves.create');
Route::post ('/epreuves/store',[EprController::class,'store'])->name('epreuves.store');

