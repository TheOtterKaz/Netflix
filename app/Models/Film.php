<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'resume', 'brand', 'collection', 'cote', 'rating', 
    'duree', 'annee', 'realisateur_id', 'producteur_id', 'type', 'imageFilm', 'lienFilm'];

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

    // Fonction acteurs
    public function acteurs()
    {
        return $this->belongsToMany(Personne::class);
    }
}
