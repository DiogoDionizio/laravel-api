<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\CadastrarAlunoRequest;

class AlunosController extends Controller
{
    public function __construct(Aluno $aluno) {
        $this->aluno = $aluno;
    }

    public function listar() {
        try {
            $resultado = $this->aluno->where('ativo', true)->get();

            if($resultado != '') {
                return response()->json([
                    'mensagem' => 'listado com sucesso',
                    'data' => $resultado,
                ], Response::HTTP_OK);
            }

            return response()->json([], Response::HTTP_NO_CONTENT);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // listarAluno
    public function listarAluno($id) {
        try {
            $resultado = $this->aluno->where('alunos_id', $id)->where('ativo', true)->get();

            if($resultado->isEmpty() != 1) {
                return response()->json([
                    'mensagem' => 'listado com sucesso',
                    'data' => $resultado,
                ], Response::HTTP_OK);
            }

            return response()->json('', Response::HTTP_NO_CONTENT);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function cadastrarAluno(CadastrarAlunoRequest $resquest) {
        try {
            $post = $resquest->all();

            $this->aluno->create([
                'nome' => $post['nome'],
                'sobrenome' => $post['sobrenome'],
                'endereco' => $post['endereco'],
                'senha' => $post['senha'],
                'cpf' => $post['cpf'],
            ]);

            return response()->json('', Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
