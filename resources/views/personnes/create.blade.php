@extends('layouts.app')

@section('title', 'Création personne')

@section('contenu')


<header class="row d-flex justify-content-between fixed-top">

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

<div class="row h-75 d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-center h-50">

        
        <div class="col-4 h-100">

            <!-- Titre page -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Ajout d'une personne</h3>
                </div>
            </div>

            <form method="post" action="{{ route('personnes.store') }}" class="h-100">

                @csrf

                <div class="form-group h-100 d-flex justify-content-evenly flex-column">

                    <div class="row">

                        <!-- Nom de la personne -->
                        <div class="col-6">
                            <input type="text" name="nom" id="nomPersonne" class="form-control" placeholder="Nom de la personne">
                        </div>

                        <!-- Prénom de la personne -->
                        <div class="col-6">
                            <input type="text" name="prenom" id="prenomPersonne" class="form-control" placeholder="Prénom de la personne">
                        </div>

                    </div>

                    <div class="row">

                        <!-- Label pour date naissance -->
                        <div class="col-6 d-flex justify-content-start align-items-center ">
                            <label for="inDateNaiss">Date de naissance</label>
                        </div>

                        <!-- Input date naissance -->
                        <div class="col-6 d-flex justify-content-end align-items-center ">
                            <input type="date" name="dateNaiss" id="inDateNaiss" class="w-100 form-control " placeholder="Date de naissance">
                        </div>
                        
                    </div>

                    <div class="row">

                    <input type="text" name="sexe" id="idSexe">

                        <!-- Radio choix sexe de la personne : HOMME
                        <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                            <input type="radio" name="sexe" id="sexeM" class="btn-check" autocomplete="off" v>
                            <label class="btn btn-secondary " for="sexeM">Homme</label>
                        </div> -->

                        <!-- Radio choix sexe de la personne : FEMME -->
                        <!-- <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                            <input type="radio" name="sexe" id="sexeF" class="btn-check" autocomplete="off">
                            <label for="sexeF" class="btn btn-secondary">Femme</label>
                        </div> -->

                        <!-- Radio choix sexe de la personne : AUTRE -->
                        <!-- <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                            <input type="radio" name="sexe" id="sexeA" class="btn-check">
                            <label for="sexeA" class="btn btn-secondary">Autre</label>
                        </div> -->
                    </div>

                    <div class="row">

                        <!-- Input lien imagePers -->
                        <div class="col-12">
                            <input type="text" name="imagePers" id="imagePers" class="form-control" placeholder="Lien vers une image de cette personne">
                        </div>

                    </div>

                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="col-4 btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                    
                </div>

            </form>

        </div>
        
    </div>
</div>
@endsection