<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsagerRequest;
use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('usagers.login');
    }

    public function indexAdminU()
    {
        $usagers = Usager::all();        
        return View('admin.listeUsagers', compact('usagers'));
    }
    /**
     * affiche form de user
     */
    public function showLoginForm()
    {
        return View('usagers.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usagers = Usager::all();
        return View('usagers.create', compact('usagers'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsagerRequest $request)
    {
        Log::debug("Début store usager");
        try{
            Log::debug("Récup des données Usager");
            $usager = new Usager($request->all());
            
            Log::debug("usager save");
            $usager->save();
        }

        catch(\Throwable $e){
            Log::debug($e);

        }
        return redirect()->route('admin.listeUsagers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usager $usager)
    {
        return View('usagers.edit', compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, Usager $usager)
    {
        Log::debug("Début update usager");
        try{
            Log::debug("Récup infos Usager");
            $usager->role = $request->role;
            $usager->nomUsager = $request->nomUsager;
            $usager->nom = $request->nom;
            $usager->prenom = $request->prenom;
            $usager->password = $request->password;

            Log::debug("usager save");
            $usager->save();

            return redirect()->route('admin.listeUsagers')->with('success', 'Usager modifié');
        }

        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('admin.listeUsagers')->with('error', 'Erreur lors de la modification');
        }
        return redirect()->route('admin.listeUsagers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Log::debug("Début suppression usager");
        try{
            $usager = Usager::findOrFail($id);
           
            $usager->delete();

            return redirect()->route('admin.listeUsagers')->with('success', 'Usager supprimé');
        }

        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('admin.listeUsagers')->with('error', 'Erreur lors de la suppression');
        }

        return redirect()->route('admin.listeUsagers');
    }

    /**
     * Connecte de user
     */
    public function login(Request $request)
    {
        Log::debug("Début login usager" . $request->email ."". $request->password);

        if($request->email == null || $request->password == null){
            return redirect()->route('login')->withErrors('Merci de remplir tous les champs');
        }
        else{
            $reussi = Auth::attempt([ 'email' => $request->email, 'password' => $request->password ]);

            if($reussi){
                return redirect()->route('films.index') ->with('message', 'Vous êtes connecté');
            }
            else{
                Log::debug("Erreur lors de la connexion");
                Log::debug($request->email ."". $request->password);
                return redirect()->route('login')->withErrors('Erreur lors de la connexion');
            }
        }


    }

    /**
     * Deconnecte de user
     */
    public function logout()
    {
       Auth::logout();
       return redirect()->route('login')->withErrors('Erreur lors de la connexion');
    }
}
