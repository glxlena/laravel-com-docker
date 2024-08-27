<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tarefas', [TarefasController::class, 'index'])->name('tarefas.index');

Route::get('/tarefas/store', [TarefasController::class, 'store'])->name('tarefas.store');