<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // Fonction realisateur
    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
    }

    // Fonction producteur
    public function producteur()
    {
        return $this->belongsTo(Personne::class);
    }
}
