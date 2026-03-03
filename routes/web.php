<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TarefasController::class, 'index']);

Route::get('/tarefas/cadastrar', function () {
    return view('cadastrarTarefa');
})->name('tarefas.cadastrar');

Route::post('/tarefas', [TarefasController::class, 'store'])->name('tarefas.store');

