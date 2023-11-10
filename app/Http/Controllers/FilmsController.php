<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Film;
use App\Models\Personne;
use \Illuminate\Support\Facades\Log;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return View('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personnes = Personne::all();
        return View('films.create', compact('personnes'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $film = new Film($request->all());
            $film->save();
        }
        catch(\Throwable $e){
            Log::debug($e);
        }
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $acteurs = Personne::join('film_personne', 'personnes.id', '=', 'film_personne.personne_id')
        ->where('film_personne.film_id', $film->id)
        ->select('personnes.*')
        // ->distinct()
        ->get();

        return View('films.show', compact('film', 'acteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return View('films.edit', compact('film'));
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
            $film = Film::findOrFail($id);

            // Si un film a des acteurs, on ne peut pas le supprimer.
            $film->acteurs()->detach();

            $film->delete();

            return redirect()->route('films.index')->with('message', "Suppression de " . $film->titre . " réussie");           
        }

        catch (\Throwable $e) {
            // Gérer l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors('message', "Suppression de " . $film->titre . " échouée");
        }
        return redirect()->route('films.index');
    }

    public function storeFilmRealisateur(Request $request){
        try{
            $film = Film::find($request->film_id);
            $realisateur = Film::find($request->realisateur_id);
            
            if($realisateur->filmsRealises->contains($film)){
                Log::debug('Le film est déjà associé à ce réalisateur');
            }
            else{
                $realisateur->filmsRealises()->attach($film);
                $realisateur->save();
            }
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('films.index');
        }
        return redirect()->route('films.index');
    }

    public function storeFilmProducteur(Request $request){
        try{
            $film = Film::find($request->film_id);
            $producteur = Film::find($request->producteur_id);
            
            if($producteur->filmsProduits->contains($film)){
                Log::debug('Le film est déjà associé à ce producteur');
            }
            else{
                $producteur->filmsProduits()->attach($film);
                $producteur->save();
            }
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('films.index');
        }
        return redirect()->route('films.index');
    }
}
