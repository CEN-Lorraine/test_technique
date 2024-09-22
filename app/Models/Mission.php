<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $table = 'missions';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'nom_interne'];

    // Méthode permettant (normalement) d'accéder aux missions associées à un projet
    public function missions()
    {
        return $this->belongsToMany(Mission::class, 'mission_projet', 'projet_id', 'mission_id');
    }

    protected $casts = [
        'debut' => 'date',
        'fin' => 'date',
    ];
}
