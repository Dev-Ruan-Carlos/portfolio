<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\SobreMimController;
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

Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Route::prefix('sobremim')->group(function(){
//     Route::get('index2', [SobreMimController::class, 'index2'])->name('sobremim.index2');
// });

// Route::prefix('experiencia')->group(function(){
//     Route::get('index2', [ExperienciaController::class, 'index2'])->name('experiencia.index2');
// });

// Route::prefix('projetos')->group(function(){
//     Route::get('index2', [ProjetosController::class, 'index2'])->name('projetos.index2');
// });

// Route::prefix('contato')->group(function(){
//     Route::get('index2', [ContatoController::class, 'index2'])->name('contato.index2');
// });

Route::prefix('orcamento')->group(function(){
    Route::get('salvarOrcamento', [OrcamentoController::class, 'salvarOrcamento'])->name('salvarOrcamento');
});


