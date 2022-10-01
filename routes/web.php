<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [EstudiantesController::class, 'index'])->name('personas.index');
Route::get('/create', [EstudiantesController::class, 'create'])->name('personas.create');
Route::post('/store', [EstudiantesController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [EstudiantesController::class, 'edit'])->name('personas.edit');
Route::get('/show', [EstudiantesController::class, 'show'])->name('personas.show');