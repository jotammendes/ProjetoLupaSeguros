<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaExemploController;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\SeguradoraController;

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

// rotas para User
Route::get('/user/deletados', [UserController::class, 'deletados'])->name('user.deletados');
Route::post('/user/restaurar/{id}', [UserController::class, 'restaurar'])->name('user.restaurar');
Route::delete('/user/deletar/{id}', [UserController::class, 'deletar'])->name('user.deletar');
Route::resource('user',UserController::class);

// rotas para Cliente
Route::get('/cliente/deletados', [ClienteController::class, 'deletados'])->name('cliente.deletados');
Route::post('/cliente/restaurar/{id}', [ClienteController::class, 'restaurar'])->name('cliente.restaurar');
Route::delete('/cliente/deletar/{id}', [ClienteController::class, 'deletar'])->name('cliente.deletar');
Route::resource('cliente',ClienteController::class);

// rotas para Veiculo
Route::get('/veiculo/index/{cliente}',[VeiculoController::class, 'index'])->name('veiculo.index');
Route::get('/veiculo/create/{cliente}',[VeiculoController::class, 'create'])->name('veiculo.create');
Route::post('/veiculo/store/{cliente}',[VeiculoController::class, 'store'])->name('veiculo.store');
Route::get('/veiculo/show/{id}',[VeiculoController::class, 'show'])->name('veiculo.show');
Route::get('/veiculo/edit/{cliente}/{id}',[VeiculoController::class, 'edit'])->name('veiculo.edit');
Route::put('/veiculo/update/{cliente}/{id}',[VeiculoController::class, 'update'])->name('veiculo.update');
Route::delete('/veiculo/destroy/{cliente}/{id}',[VeiculoController::class, 'destroy'])->name('veiculo.destroy');

// rotas para Seguradora
Route::resource('seguradora',SeguradoraController::class);

