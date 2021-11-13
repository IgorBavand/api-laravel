<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\HasPrimaryKeyUuid;

class Produto extends Model
{
    use HasFactory,  HasPrimaryKeyUuid;

    protected $table = 'produtos';
    protected $fillable = ['id', 'nome', 'descricao', 'preco'];
}
