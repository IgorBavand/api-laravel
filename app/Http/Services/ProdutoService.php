<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\Produto as Produto;
use App\Http\Resources\ProdutoResource as ProdutoRes;
use App\Models\User;
use App\Models\Role;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Symfony\Component\HttpFoundation\Response;

class ProdutoService
{

    public function salvarProduto(Request $req){
        $produto = new Produto;
        $produto->nome = $req->input('nome');
        $produto->descricao = $req->input('descricao');
        $produto->preco = $req->input('preco');
    
        if( $produto->save() ){
            return new ProdutoRes( $produto );
          }
    }

}






?>