<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dentiste extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "dentistes";
    protected $fillable = [
        'nom_dent',
        'prenom_dent',
        'tel_dent',
        'email_dent',
        'password',
        'ville',
        'adresse',
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
