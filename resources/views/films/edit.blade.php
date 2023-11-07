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
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="inputID" placeholder="ID" readonly aria-readonly="true">
                        <label for="inputID">Identifiant</label>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="text" name="nouveauTitre" class="form-control" id="textNouvTitre" placeholder="Titre">
                        <label for="textNouvTitre">Titre</label>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Entrez le résumé du film" id="nouvResume"></textarea>
                        <label for="nouvResume">Résumé du film</label>
                    </div>
                </div>
            </div>
            
            


            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="text" name="nouvBrand" class="form-control" id="textNouvBrand" placeholder="Brand">
                        <label for="textNouvBrand">Brand</label>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="text" name="nouvCollection" class="form-control" id="textNouvCollection" placeholder="Collection">
                        <label for="textNouvCollection">Collection</label>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center py-2">
                <div class="col-8">
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
                        <div class="progress-bar bg-success p-2" style="width: {{$film->cote}}%">
                            <div class="d-flex flex-row align-items-center justify-content-evenly ">
                                <span class="material-symbols-outlined p-0 m-0"> star_rate </span>
                                <h5 class="p-0 m-0">{{$film->cote}}%</h5>
                                <span class="material-symbols-outlined p-0 m-0"> star_rate </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8 d-flex align-items-center justify-content-evenly">
                        <button class="btn btn-vert d-flex align-items-center justify-content-center">
                            <!-- <img src="/img/ratingGeneral.png" class="img-fluid"> -->
                            <p class="m-0 p-0"><b> G </b></p>
                        </button>
                        <button class="btn btn-jaune d-flex align-items-center justify-content-center">
                            <!-- <img src="/img/rating13.png" class="img-fluid"> -->
                            <p class="m-0 p-0"><b>13 +</b></p>
                        </button>
                        <button class="btn btn-bleu d-flex align-items-center justify-content-center">
                            <p class="m-0 p-0"><b>16 +</b></p>
                        </button>
                        <button class="btn btn-rouge d-flex align-items-center justify-content-center">
                            <p class="m-0 p-0"><b>18 +</b></p>
                        </button>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-8">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingDuree" placeholder="Duree" min="0">
                        <label for="floatingDuree">Durée du film (en minutes)</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection