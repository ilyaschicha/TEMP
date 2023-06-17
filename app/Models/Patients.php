<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Patients extends  Model {

    use HasFactory;

    protected $primaryKey = 'NumDoss';
    protected $fillable = [
        'NumDoss',
        'PrenomPat',
        'NomPat',
        'Sexe',
        'DateNaiss',
        'LieuNaiss',
        'Age',
        'Etat_civil',
        'AddressePat',
        'Mutuelle',
        'Profession',
        'Email',
        'Tel',
        'Observations',
    ];

    public function traitements(): BelongsToMany {
        return $this->belongsToMany(Traitement::class, 'patient_traitements', 'NumDoss', 'Num_Traitement')
            ->withPivot('NumDoss', 'Num_Traitement');
    }
}
