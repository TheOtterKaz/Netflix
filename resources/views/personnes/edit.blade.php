@extends('layouts.app')

@section('title', 'Film - Zoom')

@section('contenu')

<header class="row d-flex justify-content-between fixed-top ">

    <div class="netflixLogo col-1 d-flex align-items-center justify-content-center p-0">
        <a id="logo" href="{{ route('films.index') }}">
            <img src="/img/logo.PNG" alt="Logo Image">
        </a>
    </div>      

    <nav class="sub-nav col-1 d-flex align-items-center justify-content-evenly flex-row p-0 m-0">

        <a href="#" class="d-flex align-items-center"> 
            <span class="material-symbols-outlined">
                account_circle 
            </span> 
        </a>     
    </nav>

</header>

<div class="row h-75 d-flex align-items-center justify-content-center">
    <div class="card m-5 p-0 bg-secondary-subtle border border-0 col-6">
        <div class="card-body">          
        
            <!-- ID -->
            <div class="row d-flex align-items-center justify-content-center">               
                <div class="col-8">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="inputID" placeholder="ID" readonly aria-readonly="true">
                        <label for="inputID" class="text-dark">Identifiant</label>
                    </div>
                </div>
            </div>

            <!-- Prénom -->                    
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="text" name="newPrenom" class="form-control" id="newPrenom" placeholder="Prenom">
                        <label for="newPrenom" class="text-dark">Prénom</label>
                    </div>
                </div>
            </div>

            <!-- Nom -->                    
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="text" name="newNom" class="form-control" id="newNom" placeholder="Nom">
                        <label for="newNom" class="text-dark">Nom</label>
                    </div>
                </div>
            </div>

            <!-- Date de naissance-->                    
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="date" name="newDateNaiss" class="form-control" id="newDateNaiss" placeholder="DateNaiss">
                        <label for="newDateNaiss">Date de naissance</label>
                    </div>
                </div>
            </div>

            <!-- Sexe-->                    
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculin">
                        <label class="form-check-label text-dark" for="inlineRadio1">Masculin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminin">
                        <label class="form-check-label text-dark" for="inlineRadio2">Féminin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Autre">
                        <label class="form-check-label text-dark" for="inlineRadio3">Autre</label>
                    </div>
                </div>
            </div>   
            
            <div class="card-footer border border-0 bg-secondary-subtle">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-5">
                        <a href="{{ route('personnes.index') }}" class="btn btn-primary">Retour</a>
                        <a href="" class="btn btn-warning">Modifier</a>
                        <form method="POST" action="{{route('personnes.destroy', [$personne->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection