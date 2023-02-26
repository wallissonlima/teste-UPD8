<?php

use App\Http\Controllers\ClientesController;
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

// Route::get('/index', [ClientesController::class, 'index']);
Route::get('/cadastro', [ClientesController::class, 'clientes']);
Route::get('/getListar', [ClientesController::class, 'getListar'])->name('getListar');


Route::post('/getClientes', [ClientesController::class, 'getClientes'])->name('getClientes');
Route::post('/salvar', [ClientesController::class, 'salvar'])->name('salvar');
Route::post('/destroy', [ClientesController::class, 'destroy'])->name('destroy');
