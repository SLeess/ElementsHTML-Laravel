<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElementController;
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


Route::get('/', [ElementController::class, 'index']);
Route::get('/elementos', [ElementController::class, 'elementos']);
Route::get('/obter-detalhes-elemento/{id}', [ElementController::class, 'obterDetalhesElemento']);
Route::put('/atualizar-elemento/{id}', [ElementController::class, 'atualizarElemento']);
Route::put('/apagar-elemento/{id}', [ElementController::class, 'apagarElemento']);