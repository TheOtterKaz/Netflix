<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use Illuminate\Support\Facades\Log;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne::all();
        
        $realisateurs = Personne::join('films', 'personnes.id', '=', 'films.realisateur_id')     ->select('personnes.*')     ->distinct()     ->get();
        $producteurs = Personne::join('films', 'personnes.id', '=', 'films.producteur_id')     ->select('personnes.*')     ->distinct()     ->get();
        $acteurs = Personne::join('film_personne', 'personnes.id', '=', 'film_personne.personne_id')     ->select('personnes.*')     ->distinct()     ->get();
        return View('personnes.index', compact('personnes', 'realisateurs', 'producteurs', 'acteurs'));        
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View('personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        $films = Film::join('film_personne', 'films.id', '=', 'film_personne.film_id')
        ->where('film_personne.personne_id', $personne->id)
        ->select('films.*')
        ->get();

        return View('personnes.show', compact('personne', 'films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        return View('personnes.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $personne = Personne::findorFail($id);

            $personne->delete();

            return redirect()->route('personnes.index')->with('success', 'La personne nommée ' . $personne->nom , $personne->prenom . ' supprimée avec succès !');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('personnes.index')->withErrors(['Impossible de supprimer cette personne !']);
        }

        return redirect()->route('personnes.index');
    }
}
