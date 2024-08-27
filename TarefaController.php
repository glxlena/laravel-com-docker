<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function index(){
        $tasks = Tarefa::all();
        return view('tarefas', ['tarefas' => $tasks]);
    }

    public function store(){
        $tasks = new Tarefa();
        $tasks->titulo = 'Estudar';
        $tasks->descricao = 'Programação';
        $tasks->save();

       return redirect()->route('tarefas.index');
    }
}