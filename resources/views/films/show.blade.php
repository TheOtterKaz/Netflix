@extends('layouts.app')

@section('title', 'Film - Zoom')

@section('contenu')

<div class="row">
            <div class="netflixLogo d-flex align-items-center justify-content-center col-2 p-2">
                <a id="logo" href="#home"><img src="/img/logo.PNG" alt="Logo Image"></a>
            </div>      
            <nav class="main-nav col-xl-10 d-flex align-items-center justify-content-evenly">                
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
            <!-- <nav class="sub-nav">
                <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
                <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
                <a href="#">Account</a>        
            </nav>       -->
</div>


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

        <div class="card m-5 p-0" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{$film->imageFilm}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$film->titre}}</h5>
                <p class="card-text">{{$film->resume}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                <table>
                    <tr>
                        <th class="text-primary">Réalisateur : </th>
                        <td class="text-primary">{{$film->realisateur->nom}}, {{$film->realisateur->prenom}}</td>
                    </tr>    

                </table>
            </div>
            </div>
        </div>
        </div>

        <div class="offset col-2"></div>
    </div>
