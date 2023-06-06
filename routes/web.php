<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PetInfoController;
use App\Http\Controllers\VaccinesAdministeredController;
use App\Http\Controllers\HistoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PetInfoController::class, 'index'])->name('pets.index');

Route::get('/species', [SpeciesController::class, 'index'])->name('species.index');
Route::get('/species/create', [SpeciesController::class, 'create'])->name('species.create');
Route::post('/species', [SpeciesController::class, 'store'])->name('species.store');
Route::get('/species/{id}', [SpeciesController::class, 'show'])->name('species.show');
Route::get('/species/{id}/edit', [SpeciesController::class, 'edit'])->name('species.edit');
Route::patch('/species/{id}', [SpeciesController::class, 'update'])->name('species.update');
Route::delete('/species/{id}', [SpeciesController::class, 'destroy'])->name('species.destroy');

Route::get('/vaccines', [VaccineController::class, 'index'])->name('vaccines.index');
Route::get('/vaccines/create', [VaccineController::class, 'create'])->name('vaccines.create');
Route::post('/vaccines', [VaccineController::class, 'store'])->name('vaccines.store');
Route::get('/vaccines/{id}', [VaccineController::class, 'show'])->name('vaccines.show');
Route::get('/vaccines/{id}/edit', [VaccineController::class, 'edit'])->name('vaccines.edit');
Route::patch('/vaccines/{id}', [VaccineController::class, 'update'])->name('vaccines.update');
Route::delete('/vaccines/{id}', [VaccineController::class, 'destroy'])->name('vaccines.destroy');

Route::get('/pets', [PetInfoController::class, 'index'])->name('pets.index');
Route::get('/pets/create', [PetInfoController::class, 'create'])->name('pets.create');
Route::post('/pets', [PetInfoController::class, 'store'])->name('pets.store');
Route::get('/pets/{pet}', [PetInfoController::class, 'show'])->name('pets.show');
Route::get('/pets/{pet}/edit', [PetInfoController::class, 'edit'])->name('pets.edit');
Route::patch('/pets/{pet}', [PetInfoController::class, 'update'])->name('pets.update');
Route::delete('/pets/{pet}', [PetInfoController::class, 'destroy'])->name('pets.destroy');

Route::get('/vaccines_administered/create/{pet}', [VaccinesAdministeredController::class, 'create'])->name('vaccines_administered.create');
Route::post('/vaccines_administered/store', [VaccinesAdministeredController::class, 'store'])->name('vaccines_administered.store');

Route::get('/history/create/{pet}', [HistoryController::class, 'create'])->name('history.create');
Route::post('/history/store', [HistoryController::class, 'store'])->name('history.store');
