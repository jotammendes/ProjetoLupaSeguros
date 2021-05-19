<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaExemploController;
use App\Http\Controllers\ExemploController;

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

// rotas para categoria de exemplo
Route::resource('categoria_exemplo', CategoriaExemploController::class);

// rotas para exemplo
Route::get('/exemplo/deletados', [ExemploController::class, 'deletados'])->name('exemplo.deletados');
Route::post('/exemplo/restaurar/{id}', [ExemploController::class, 'restaurar'])->name('exemplo.restaurar');
Route::delete('/exemplo/deletar/{id}', [ExemploController::class, 'deletar'])->name('exemplo.deletar');
Route::resource('exemplo', ExemploController::class);