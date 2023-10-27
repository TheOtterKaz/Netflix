<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    // Fonction films réalisés
    public function filmsRealises()
    {
        return $this->hasMany(Film::class, 'realisateur_id');
    }

    // Fonction films produits
    public function filmsProduits()
    {
        return $this->hasMany(Film::class, 'producteur_id');
    }

    // Fonction acteurs films
    public function acteursfilms()
    {
        return $this->hasMany(FilmPersonne::class);
    }
}
