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

<div class="row h-100 d-flex align-items-center justify-content-center">
    <form method="POST" action="{{route('films.update', [$film]) }}" class="col-12 d-flex align-items-center justify-content-center h-75 w-75" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card h-75 w-75 bg-secondary-subtle border border-0 col-6">
            <div class="card-body h-75 d-flex flex-column justify-content-evenly">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="number" name="id" class="form-control" id="inputID" placeholder="ID" readonly aria-readonly="true" value="{{ old('id', $film->id) }}" name="id">
                            <label for="inputID">Identifiant</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" name="titre" class="form-control" id="textNouvTitre" placeholder="Titre" value="{{ old('titre', $film->titre) }}">
                            <label for="textNouvTitre">Titre</label>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-10">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Entrez le résumé du film" id="nouvResume" name="resume">{{ old('resume', $film->resume) }}</textarea>
                            <label for="resume">Résumé du film</label>
                        </div>
                    </div>
                </div>
                
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" name="brand" class="form-control" id="textNouvBrand" placeholder="Brand" value="{{ old('brand', $film->brand) }}">
                            <label for="textNouvBrand">Brand</label>
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" name="collection" class="form-control" id="textNouvCollection" placeholder="Collection" value="{{ old('collection', $film->collection) }}">
                            <label for="textNouvCollection">Collection</label>
                        </div>
                    </div>
                    
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" name="type" id="inType" class="form-control" placeholder="Type" value="{{ old('type', $film->type) }}">
                            <label for="inType">Type</label>
                        </div>
                    </div>
                </div>
                    
                <div class="row d-flex align-items-center justify-content-center">

                    <div class="col-3">
                        <div class="form-floating">
                            <input type="number" name="cote" id="inCote" class="form-control" placeholder="type" value="{{ old('cote', $film->cote) }}">
                            <label for="inCote">Cote</label>
                        </div>
                    </div>

                    <div class="col-7">
                            <input type="file" name="imageFilm" id="imageFilm" class="form-control-file" placeholder="Image du film" >
                    </div>
                </div>

                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" name="rating" class="form-control" id="textNouvRating" list="ratingOptions" placeholder="Rating" value="{{ old('rating', $film->rating) }}">
                            <datalist id="ratingOptions">
                                <option value="G">
                                <option value="13+">
                                <option value="16+">
                                <option value="18+">
                            </datalist> 
                            <label for="textNouvRating">Rating</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingDuree" name="duree" placeholder="Duree" min="0" value="{{ old('duree', $film->duree) }}">
                            <label for="floatingDuree">Durée du film (en minutes)</label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-floating">
                            <input type="number" name="annee" id="inAnnee" class="form-control" placeholder="année" min="0" value="{{ old('annee', $film->annee) }}">
                            <label for="inAnnee">Année de sortie</label>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class="card-footer border border-0 bg-secondary-subtle">
                <div class="row d-flex align-items-center justify-content-center p-0 m-0">
                    <div class="col-8 d-flex align-items-center justify-content-evenly p-0 m-0">

                        <a href="{{ route('films.index') }}" class="btn btn-primary d-flex flex-column">
                            <span class="material-symbols-outlined"> arrow_back</span>
                            <span>Retour</span>
                        </a>

                        <button type="submit" class="btn btn-warning d-flex flex-column align-items-center justify-content-center">
                            <span class="material-symbols-outlined">edit</span>
                            <span>Modifier</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection