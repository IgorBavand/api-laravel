<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\HasPrimaryKeyUuid;

use Tymon\JWTAuth\Contracts\JWTSubject;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class User extends Authenticatable implements JWTSubject{
    use HasApiTokens, HasFactory, Notifiable, HasPrimaryKeyUuid;

    // Rest omitted for brevity
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        
        return [
            'sub' => $this->email,
            'sub_id' => $this->id,
            'sub_name' => $this->name,
            /*
            'user' => [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
            ],
            
            'authorization' => [
                   $this->UserRoles()
                    
                 ]
                 */
        ];
    }

    private function UserRoles(){
        $user = User::find($this->id);
        $allRoles = $user->roles;

        $autorizacoes = array();
        foreach($allRoles as $role){
            array_unshift($autorizacoes, $role->name);
            
        }
        return $autorizacoes;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function roles()

    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
    
    
}
