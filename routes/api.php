<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;




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


//Route::get('produtos', [ProdutoController::class, 'index']);


/**Rota para o Login */
Route::post('auth/login', [AuthController::class, 'login']);



Route::middleware(['apiJWT'])->group(function () {
    /** Informações do usuário logado */
    Route::get('auth/me', [AuthController::class, 'me']); 
    /** Encerra o acesso */
    Route::get('auth/logout', [AuthController::class, 'logout']); 
    /** Atualiza o token */
    Route::get('auth/refresh', [AuthController::class, 'refresh']); 
    /** Listagem dos usuarios cadastrados, este rota serve de teste para verificar a proteção feita pelo jwt */
    Route::get('users', [UserController::class, 'index']); 


    Route::post('salvar/produto', [ProdutoController::class, 'store']);
    Route::get('produtos', [ProdutoController::class, 'index']);


});

