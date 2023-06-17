<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Assistante extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "assistantes";
    protected $fillable = [
        'nom_assist',
        'prenom_assist',
        'tel_assist',
        'email_assist',
        'password',
        'ville',
        'roles',
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
}
