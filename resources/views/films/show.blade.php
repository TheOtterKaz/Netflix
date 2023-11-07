@extends('layouts.app')

@section('title', 'Film - Zoom')

@section('contenu')

    <header class="row d-flex justify-content-evenly ">
        <div class="netflixLogo col-1 d-flex align-items-center justify-content-center p-0">
          <a id="logo" href="{{ route('films.index') }}"><img src="/img/logo.PNG" alt="Logo Image"></a>
        </div>      
        <nav class="main-nav d-flex align-items-center col-9 p-0 m-0">                
          <a href="#nouveautes" class="text-truncate d-block">Nouveautés</a>
          <a href="#animation" class="text-truncate d-block">Animation</a>
          <a href="#scifi" class="text-truncate d-block">Science-Fiction</a>
          <a href="#comedie" class="text-truncate d-block">Comédie</a>
          <a href="#action" class="text-truncate d-block">Action & Aventure</a>
          <a href="#thriller" class="text-truncate d-block">Thriller</a>        
          <a href="#fantasie" class="text-truncate d-block">Fantasie</a>        
          <a href="#drame" class="text-truncate d-block">Drame</a>        
          <a href="#plusPOP" class="text-truncate d-block">+ Populaires</a>        
          <a href="#moinsPOP" class="text-truncate d-block">- Populaires</a>        
        </nav>
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


<!-- Main conteneur -->


    <div class="row d-flex align-items-center justify-content-center">
        <div class="offset col-2"></div>
        <!-- <div class="card col-xl-8 mt-5 mb-5">
            <div class="row p-2">
                <div class="col-4">
                    <img src="{{$film->imageFilm}}" alt="" class="imgFilm">
                </div>
                <div class="col-8 d-flex flex-row">

                        <h2>{{$film->titre}}</h2>
                        <div class="d-flex align-items-center justify-content-center flex-column ">
                            <span>Genre : {{$film->type}}</span>
                            <span>Durée : {{$film->duree}}m</span>
                            <span>Rating : {{$film->rating}}</span>
                        </div>

                </div>
            </div>
        </div> -->

        <div class="card m-5 p-0 bg-secondary-subtle border border-0" style="max-width: 900px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{$film->imageFilm}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$film->titre}}</h5>
                    <p class="card-text">{{$film->resume}}</p>
                    <table class="w-100 text-dark">
                        <tr>
                            <th>Réalisateur</th>
                            <td class="d-flex align-items-center">{{$film->realisateur->nom}}, {{$film->realisateur->prenom}}</td>
                        </tr> 
                        <tr>
                            <th>Producteur</th>
                            <td class="d-flex align-items-center">{{$film->producteur->nom}}, {{$film->producteur->prenom}}</td>
                        </tr>
                        <tr>
                            <th>Acteurs</th>

                        </tr>

                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('films.edit', [$film])}}" class="btn btn-warning">aaaa</a>
                </div>
            </div>
        </div>
        </div>

        <div class="offset col-2"></div>
    </div>
