<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilmRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Film;
use App\Models\Personne;
use \Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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

    public function indexAdminF()
    {
        $films = Film::all();
        return View('admin.listeFilms', compact('films'));
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
    public function store(FilmRequest $request)
    {
        Log::debug("Début store film");
        try{
            Log::debug("Récup infos Films");
            $film = new Film($request->all());
            $uploadedImage = $request->file('imageFilm');
            $nomFichierUnique = str_replace(' ', '_', $request->titre) . '_' . uniqid() . '.' . $uploadedImage->extension();

            try{
                $request->imageFilm->move(public_path('img/films'), $nomFichierUnique);
                log::debug('Image téléversée, nom de l\'image : ' . $nomFichierUnique);
            }
            catch(FileException $e){
                Log::error('Erreur lors du téléversement de l\image. ', [$e]);
            }

            $film->imageFilm = $nomFichierUnique;
            Log::debug("Save film");
            $film->save();
            Log::debug("Le film" . $film->titre . " a bien été ajouté");
        }
        catch(\Throwable $e){
            Log::debug($e);
        }
        return redirect()->route('admin.listeFilms');
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
    public function update(FilmRequest $request, Film $film)
    {
        Log::debug("Début update film");

        try{
            Log::debug("Récup infos Film");
            $film->id = $request->id;
            $film->titre = $request->titre;
            $film->resume = $request->resume;
            $film->brand = $request->brand;
            $film->cote = $request->cote;          
            $film->rating = $request->rating;
            $film->duree = $request->duree;
            $film->annee = $request->annee;
            $film->type = $request->type;
            $film->imageFilm = $request->imageFilm;

            Log::debug("Save Film");
            $film->save();
            Log::debug("Le film" . $film->titre . "a bien été modifié");
            return redirect()->route('admin.listeFilms')->with('message', "Modification de " . $film->titre . " réussie");

        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('admin.listeFilms')->withErrors('message', "Modification de " . $film->titre . " a échoué");
        }
        return redirect()->route('admin.listeFilms');
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

            return redirect()->route('admin.listeFilms')->with('message', "Suppression de " . $film->titre . " réussie");           
        }

        catch (\Throwable $e) {
            // Gérer l'erreur
            Log::debug($e);
            return redirect()->route('admin.listeFilms')->withErrors('message', "Suppression de " . $film->titre . " échouée");
        }
        return redirect()->route('admin.listeFilms');
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
            return redirect()->route('admin.listeFilms');
        }
        return redirect()->route('admin.listeFilms');
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
            return redirect()->route('admin.listeFilms');
        }
        return redirect()->route('admin.listeFilms');
    }

    
}
