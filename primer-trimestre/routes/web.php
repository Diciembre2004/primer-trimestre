<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditorialController;

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
Route::view('/','Welcome')->name('Bienvenidos');

Route::get('/autores', [AutorController::class,'index'])->name('autores.index');
Route::get('/autores/create',[AutorController::class,'create'])->name('autores.create');
Route::post('/autores', [AutorController::class,'store'])->name('autores.store');


Route::get('/editoriales', [EditorialController::class,'index'])->name('editoriales.index');
Route::get('/editoriales/create',[EditorialController::class,'create'])->name('editoriales.create');
Route::post('/editoriales', [EditorialController::class,'store'])->name('editoriales.store');


// para editaaar
Route::get('/autores/edit/{autor}',[AutorController::class,'edit'])->name('autores.edit');
Route::patch('/autores/{autor}', [AutorController::class,'update'])->name('autores.update');