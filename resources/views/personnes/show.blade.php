@extends('layouts.app')

@section('title', 'Film - Zoom')

@section('contenu')

<header class="row d-flex justify-content-between ">
        <div class="netflixLogo col-1 d-flex align-items-center justify-content-center p-0">
          <a id="logo" href="{{ route('films.index') }}"><img src="/img/logo.PNG" alt="Logo Image"></a>
        </div>      

        <nav class="sub-nav col-1 d-flex align-items-center justify-content-evenly flex-row p-0 m-0">
          <a href="#" class="d-flex align-items-center">
            <span class="material-symbols-outlined">
              search
            </span>
          </a>
          <a href="#" class="d-flex align-items-center">
          <span class="material-symbols-outlined">
            circle_notifications
          </span>
          </a>
          <a href="#" class="d-flex align-items-center"> 
            <span class="material-symbols-outlined">
               account_circle 
              </span> 
            </a>        
        </nav>      
    </header>

    <!-- Main Container -->
<div class="row d-flex align-items-center justify-content-center">
    <div class="offset col-2"></div>
        <div class="card mt-5 p-0 bg-secondary-subtle border border-0" style="max-width: 900px;">
            <div class="row g-0">

                <div class="col-md-4">
                    <img src="{{$personne->imagePers}}" alt="ImagePersonne" class="img-fluid rounded-start">
                </div>
                
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$personne->prenom}} {{$personne->nom}}</h5>
                        <div class="pt-3 m-0">
                            <p class="card-text">Date de naissance : {{$personne->dateNaiss}}</p>
                            <p class="card-text">Sexe : {{$personne->sexe}}</p>

                        </div>
                    </div>    
                </div>

                <div class="card-footer d-flex flex-row align-items-center justify-content-evenly ">
                    <a href="{{ route('personnes.index') }}" class="btn btn-primary d-flex flex-column">
                        <span class="material-symbols-outlined">arrow_back</span>
                        <span>Retour</span>
                    </a>
                    <a href="{{ route('personnes.edit', [$personne]) }}" class="btn btn-warning d-flex flex-column">
                        <span class="material-symbols-outlined">edit</span>
                        <span>Modifier</span>
                    </a>

                    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                </div>

            </div>
        </div>   
    <div class="offset col-2">

    <dialog id="leDialog">hahah</dialog>
</div>