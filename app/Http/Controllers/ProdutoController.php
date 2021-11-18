<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto as Produto;
use App\Http\Resources\ProdutoResource as ProdutoRes;
use App\Models\User;
use App\Models\Role;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use App\Http\Services;
use App\Http\Services\ProdutoService;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ProdutoService::salvarProduto();
        

    //$user = User::find("00e23586-7f63-4225-a905-a67087f0e748");

    //$json = $user->roles;
       
       
      // $token = JWTAuth::getToken();
        //$apy = JWTAuth::getPayload($token)->toArray();

        /*
        $tokenParts = explode(".", $token);  
        $tokenHeader = base64_decode($tokenParts[0]);
        $tokenPayload = base64_decode($tokenParts[1]);
        $jwtHeader = json_decode($tokenHeader);
        $jwtPayload = json_decode($tokenPayload);
       
        echo $json = $jwtPayload->authorization->toArray();
        */

      //  echo $json;
        /*
    
        foreach($json as $j){
            echo $j->name;
        }
        */
    
   //      return response()->json($roles->name);
    
    
    
    
        // $produtos = Produto::paginate(15);
    //return ProdutoRes::collection($produtos);
   

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvarProduto(Request $request)
    {

        return ProdutoService::salvarProduto($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
    }
}
