<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;
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

Route::get('/funcionarios', [FuncionarioController::class, 'index']);
Route::post('/funcionarios/novo', [FuncionarioController::class, 'insert'])->name('insertF');
Route::get('/funcionarios/novo', [FuncionarioController::class, 'ViewAdd']);
Route::get('/funcionarios/show/{id}', [FuncionarioController::class, 'ViewShow'])->name('mostrarFuncionario');
Route::get('/funcionarios/delete/{id}', [FuncionarioController::class, 'Delete'])->name('deletarFuncionario');
Route::get('/funcionarios/update/{id}', [FuncionarioController::class, 'ViewUpdate'])->name('editarFuncionario');
Route::post('/funcionarios/update/{id}', [FuncionarioController::class, 'editarFuncionario'])->name('updateF');

Route::get('/departamentos', [DepartamentoController::class, 'index']);
Route::post('/departamentos/novo', [DepartamentoController::class, 'insert'])->name('insertD');
Route::get('/departamentos/novo', [DepartamentoController::class, 'ViewAdd']);
Route::get('/departamentos/show/{id}', [DepartamentoController::class, 'ViewShow'])->name('mostrarDepartamento');
Route::get('/departamentos/delete/{id}', [DepartamentoController::class, 'Delete'])->name('deletarDepartamento');
Route::get('/departamentos/update/{id}', [DepartamentoController::class, 'ViewUpdate'])->name('editarDepartamento');
Route::post('/departamentos/update/{id}', [DepartamentoController::class, 'editarDepartamento'])->name('updateD');


