<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivroController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('livros')->group(function (){
    Route::get('/', [LivroController::class, 'index'])->name('index.livros');
    Route::get('/create', [LivroController::class, 'create'])->name('create.livros');
    Route::post('/store', [LivroController::class, 'store'])->name('store.livros');
    Route::get('/edit/{id}', [LivroController::class, 'edit'])->name('edit.livros');
    Route::put('/update/{id}', [LivroController::class, 'update'])->name('update.livros');
    Route::delete('/destroy/{id}', [LivroController::class, 'destroy'])->name('destroy.livros');
});

Route::prefix('categoria')->group(function (){
    Route::get('/create', [CategoriaController::class, 'create'])->name('create.categoria');
    Route::post('/store', [CategoriaController::class, 'store'])->name('store.categoria');
    Route::delete('/destroy/{id}', [CategoriaController::class, 'destroy'])->name('destroy.categoria');
});
