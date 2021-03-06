<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function() {
    Route::prefix('listar')->group(function() {
        Route::prefix('alunos')->group(function() {
            Route::get('/', 'App\Http\Controllers\Api\AlunosController@listar');
            Route::get('/{id}', 'App\Http\Controllers\Api\AlunosController@listarAluno');
        });
    });

    Route::prefix('cadastrar')->group(function() {
        Route::prefix('alunos')->group(function() {
            Route::post('/', 'App\Http\Controllers\Api\AlunosController@cadastrarAluno');
        });
    });


});
