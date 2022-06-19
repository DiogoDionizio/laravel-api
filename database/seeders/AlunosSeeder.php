<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Aluno::create([
            'nome' => 'Diogo',
            'sobrenome' => 'Guimaraes',
            'endereco' => 'Rua que desce',
            'data_nascimento' => '1986-08-18',
            'senha' => bcrypt('123'),
            'cpf' => '741258896'
        ]);

        Aluno::create([
            'nome' => 'Joao',
            'sobrenome' => 'Pedro',
            'endereco' => 'Rua que sobe',
            'data_nascimento' => '1986-08-17',
            'senha' => bcrypt('123'),
            'cpf' => '741258896'
        ]);
    }
}
