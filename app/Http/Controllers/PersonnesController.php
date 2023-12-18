<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonneRequest;
use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use Illuminate\Contracts\Session\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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

    public function indexAdminP()
    {
        $personnes = Personne::all();
        $realisateurs = Personne::join('films', 'personnes.id', '=', 'films.realisateur_id')     ->select('personnes.*')     ->distinct()     ->get();
        $producteurs = Personne::join('films', 'personnes.id', '=', 'films.producteur_id')     ->select('personnes.*')     ->distinct()     ->get();
        $acteurs = Personne::join('film_personne', 'personnes.id', '=', 'film_personne.personne_id')     ->select('personnes.*')     ->distinct()     ->get();
        
        return View('admin.listePers', compact('personnes', 'realisateurs', 'producteurs', 'acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $personnes = Personne::all();
        return View('personnes.create', compact('personnes'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonneRequest $request)
    {
        Log::debug("Début store personne");

        try{
            Log::debug("Récup des données Personne");
            $personne = new Personne($request->all());

            $uploadedImage = $request->file('imagePers');
            $nomFichierUnique = str_replace(' ', '_', $request->nom . $request->prenom) . '-' . uniqid() . '.' . $uploadedImage->extension();

            try{
                $request->imagePers->move(public_path('img/Personnes'), $nomFichierUnique);
                log::debug('Image téléversée, nom de l\'image : ' . $nomFichierUnique);
            }

            catch(FileException $e){
                Log::debug("Erreur lors du téléversement du fichier", [$e]);                
            }

            $personne->imagePers = $nomFichierUnique;
            Log::debug("Save Personne");
            $personne->save();
            Log::debug("La personne " . $personne->nom . " " . $personne->prenom . " a été ajoutée!");           
        }

        catch(\Throwable $e){
            Log::debug($e);
        }

        return redirect()->route('admin.listePers');
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
    public function update(PersonneRequest $request, Personne $personne)
    {
        Log::debug("Début update personne");
        try{
            $personne->id = $request->id;            
            $personne->nom = $request->nom;
            $personne->prenom = $request->prenom;
            $personne->dateNaiss = $request->dateNaiss;
            $personne->sexe = $request->sexe;

            $uploadedImage = $request->file('imagePers');
            $nomFichierUnique = str_replace(' ', '_', $request->nom . $request->prenom) . '-' . uniqid() . '.' . $uploadedImage->extension();

            try{
                $request->imagePers->move(public_path('img/personnes'), $nomFichierUnique);
                log::debug('Image téléversée, nom de l\'image : ' . $nomFichierUnique);
            }

            catch(FileException $e){
                Log::debug("Erreur lors du téléversement du fichier", [$e]);                
            }

            $personne->imagePers = $nomFichierUnique;
            Log::debug("Save personne");
            $personne->save();
            
            Log::debug("La personne a été modifiée avec succès !");
            return redirect()->route('admin.listePers')->with('message', 'Personne modifiée avec succès');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('admin.listePers')->withErrors(['Impossible de modifier cette personne']);
        }

        return redirect()->route('admin.listePers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $personne = Personne::findorFail($id);

            $personne->delete();

            return redirect()->route('admin.listePers')->with('success', 'Personne supprimée avec succès');
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('admin.listePers')->withErrors(['Impossible de supprimer cette personne']);
        }

        return redirect()->route('admin.listePers');
    }
}
