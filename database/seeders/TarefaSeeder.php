<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TarefaSeeder extends Seeder
{
    public function run()
    {
        Tarefa::create(['titulo' => 'Estudar', 'descricao' => 'Programação']);
        Tarefa::create(['titulo' => 'Organizar mala', 'descricao' => 'Viagem para a praia']);
    }
}