<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'aluno';

    // define o nome da chave primaria da sua tabela
    protected $primaryKey = 'alunos_id';

    // todos os campos da classe aluno
    protected $fillable = [
       'nome',
       'sobrenome',
       'endereco',
       'data_nascimento',
       'senha',
       'ativo',
       'cpf'
    ];

    // em uma busca esse campo nunca retornara ex select
    protected $hidden = [
        'senha'
    ];

}
