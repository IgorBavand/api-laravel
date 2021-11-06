<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
            //return parent::toArray($request);
            return [
              'id_produto' => $this->id_produto,
              'nome' => $this->nome,
              'descricao' => $this->descricao,
              'preco' => $this->preco
            ];
          
    }
}