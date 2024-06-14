<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.salvar');

Route::get('/login', [ContatoController::class, 'contato'])->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', [ContatoController::class, 'contato'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [ContatoController::class, 'contato'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, "teste"])->name('site.teste');