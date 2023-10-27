@extends('layouts.app')

@section('title', 'Film - Zoom')

@section('contenu')

<header>
    <div class="netflixLogo">
        <a id="logo" href="#home"><img src="/img/logo.PNG" alt="Logo Image"></a>
    </div>      
    <nav class="main-nav">                
        <a href="#nouveautes"   class="text-truncate d-block">Nouveautés</a>
        <a href="#animation"    class="text-truncate d-block">Animation</a>
        <a href="#scifi"        class="text-truncate d-block">Science-Fiction</a>
        <a href="#comedie"      class="text-truncate d-block">Comédie</a>
        <a href="#action"       class="text-truncate d-block">Action & Aventure</a>
        <a href="#thriller"     class="text-truncate d-block">Thriller</a>        
        <a href="#fantasie"     class="text-truncate d-block">Fantasie</a>        
        <a href="#drame"        class="text-truncate d-block">Drame</a>        
        <a href="#plusPOP"      class="text-truncate d-block">+ Populaires</a>        
        <a href="#moinsPOP"     class="text-truncate d-block">- Populaires</a>        
    </nav>
    <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>        
    </nav>      
</header>

<!-- Main conteneur -->


    <div class="row d-flex align-items-center justify-content-center">
        <div class="offset col-2"></div>
        <div class="card col-xl-8">
            <div class="row">
                <div class="col-4">
                    <img src="{{$film->imageFilm}}" alt="" class="imgFilm">
                </div>
                <hr>
                <div class="col-8 d-flex flex-column">

                        <h2>{{$film->titre}}</h2>
                        <div class="d-flex align-items-center justify-content-center flex-row ">
                            <span>Genre : {{$film->type}}</span>
                            <span>Durée : {{$film->duree}}m</span>
                            <span>Rating : {{$film->rating}}</span>
                            <span>$film['type']</span>
                            
                        </div>

                </div>
            </div>
        </div>
        <div class="offset col-2"></div>
    </div>
