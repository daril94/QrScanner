<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticable
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays
     *
     * @var array
     */

    protected $hidden = [
        'password',
        'remenber_token'
    ];

    /**
     * The attributes that should be cast for native types
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuarios_roles', 'usuarios_id', 'roles_id');
    }

    public function controles(){

        return $this->hasMany('App\Models\Controles');
    }
}
