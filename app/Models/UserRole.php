<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\HasPrimaryKeyUuid;


class UserRole extends Model
{
    use HasFactory, HasPrimaryKeyUuid;

    protected $table = 'role_user';
    protected $fillable = ['user_id', 'role_id'];
}
