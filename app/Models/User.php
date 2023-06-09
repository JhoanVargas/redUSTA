<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use App\Models\Post;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lastname',
        'username',
        'programa',
        'semestre',
        'celular',
        'direccion',
        'presentacion',
        'genero',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts(){
        return $this->hasMany(Post::class,'user_id');
    }
    public function comentario(){
        return $this->hasMany(Comentario::class,'user_id');
    }
    public function like(){
        return $this->hasMany(Like::class,'user_id');
    }
    public function lastPost($id){
        $registro = Post::where('user_id',$id)->latest()->first();
    return $registro;
    }
}
