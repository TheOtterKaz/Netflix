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
            <form method="POST" action="{{route('personnes.update', [$personne]) }}" >
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <!-- ID -->
                    <div class="row d-flex align-items-center justify-content-center">               
                        <div class="col-8">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="inputID" name="id" placeholder="ID" readonly aria-readonly="true" value="{{old('id', $personne->id)}}">
                                <label for="inputID" class="text-dark">Identifiant</label>
                            </div>
                        </div>
                    </div>

                    <!-- Prénom -->                    
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-8">
                            <div class="form-floating">
                                <input type="text" name="prenom" class="form-control" id="newPrenom" placeholder="Prenom" value="{{old('prenom', $personne->prenom)}}">
                                <label for="newPrenom" class="text-dark">Prénom</label>
                            </div>
                        </div>
                    </div>

                    <!-- Nom -->                    
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-8">
                            <div class="form-floating">
                                <input type="text" name="nom" class="form-control" id="newNom" placeholder="Nom" value="{{old('nom', $personne->nom)}}">
                                <label for="newNom" class="text-dark">Nom</label>
                            </div>
                        </div>
                    </div>

                    <!-- Date de naissance-->                    
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-8">
                            <div class="form-floating">
                                <input type="date" name="dateNaiss" class="form-control" id="newDateNaiss" placeholder="DateNaiss" value="{{old('dateNaiss', $personne->dateNaiss)}}">
                                <label for="newDateNaiss">Date de naissance</label>
                            </div>
                        </div>
                    </div>

                    <!-- Sexe-->                    
                    <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-8 d-flex justify-content-evenly">
                                
                            
                                @if ($personne->sexe == "M") 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculin" checked>
                                        <label class="form-check-label text-dark" for="inlineRadio1">Masculin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminin">
                                        <label class="form-check-label text-dark" for="inlineRadio2">Féminin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Autre" >
                                        <label class="form-check-label text-dark" for="inlineRadio3">Autre</label>
                                    </div>

                                @elseif ($personne->sexe == "F")
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculin">
                                        <label class="form-check-label text-dark" for="inlineRadio1">Masculin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminin" checked>
                                        <label class="form-check-label text-dark" for="inlineRadio2">Féminin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Autre" >
                                        <label class="form-check-label text-dark" for="inlineRadio3">Autre</label>
                                    </div>

                                @elseif ($personne->sexe == "A")
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculin">
                                        <label class="form-check-label text-dark" for="inlineRadio1">Masculin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminin">
                                        <label class="form-check-label text-dark" for="inlineRadio2">Féminin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input border-dark border-1" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Autre" checked>
                                        <label class="form-check-label text-dark" for="inlineRadio3">Autre</label>
                                    </div>
                                @endif
                            </div>
                    </div>  

                </div>

                <div class="card-footer border border-0 bg-secondary-subtle">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-8 d-flex align-items-center justify-content-evenly">
                            <a href="{{ route('personnes.index') }}" class="btn btn-primary d-flex flex-column">
                                <span class="material-symbols-outlined"> arrow_back</span>
                                <span>Retour</span>
                            </a>
                            <button type="submit" class="btn btn-warning d-flex flex-column align-items-center justify-content-center">
                                <span class="material-symbols-outlined">edit</span>
                                <span>Modifier</span>
                            </button>
                            <!-- <form mehtod="POST" action="{{route('personnes.destroy', [$personne->id]) }}" class="d-flex align-items-center m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger d-flex flex-column align-items-center justify-content-center">
                                    <span class="material-symbols-outlined">delete</span>
                                    <span>Supprimer</span>
                                </button>
                            </form> -->
                        </div>
                    </div>                    
                </div>
            </form>  
    </div>
</div>
@endsection