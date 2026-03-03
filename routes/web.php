<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/tarefas',[TarefasController::class, 'index']);
                                        