<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{
    protected $table = "usuarios";
    use  HasFactory, Notifiable;
    protected $guarded = [];

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
}
