<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Aluno;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aluno', function(Blueprint $table) {
            $table->increments('alunos_id', true); // Criara o ID incrementado para fazer relacionamento
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('endereco')->nullable();
            $table->timestamp('data_nascimento')->nullable();
            $table->string('senha');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('aluno');
    }
};
