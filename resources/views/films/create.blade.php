@extends('layouts.app')

@section('title', 'Netflix - Accueil')

@section('contenu')

<header class="row d-flex justify-content-between">
 
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
        <div>
            <form method="post" action="{{ route('films.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header text-center ">
                        <h3 class="card-title">Ajout d'un film</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex flex-column justify-content-evenly">
                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id='titreFilm' name="titre" placeholder="Titre du film" value="{{ old('titre') }}">
                                            <label for="titreFilm">Titre du film</label>
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="resumeFilm" name="resume" placeholder="Description" value="{{ old('resume') }}" rows="3"></textarea>
                                            <label for="resumeFilm">Résumé</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-between ">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='brandFilm' name="brand" placeholder="Catégorie (Ex. Marvel)" value="{{ old('brand') }}">
                                                    <label for="brandFilm">Brand</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='collFilm' name="collection" placeholder="Collection (Ex. Thor)" value="{{ old('coll') }}">
                                                    <label for="collFilm">Collection</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
        
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='anneeFilm' name="annee" placeholder="Année de sortie" value="{{ old('annee') }}">
                                                    <label for="anneeFilm">Année de sortie</label>
                                                </div>
                                            </div>
        
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='dureeFilm' name="duree" placeholder="Durée (en minutes)" value="{{ old('duree') }}">
                                                    <label for="dureeFilm">Durée</label>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
            
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        <div class="row d-flex justify-content-between ">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='coteFilm' name="cote" placeholder="Cote (Ex. 92%)" value="{{ old('cote') }}">
                                                    <label for="coteFilm">Cote</label>
                                                </div>
                                            </div>
        
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='dureeFilm' name="duree" placeholder="Durée (en minutes)" value="{{ old('duree') }}">
                                                    <label for="dureeFilm">Durée</label>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                            
                            <div class="col-6 d-flex flex-column justify-content-evenly">
        
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='ratingFilm' name="rating" placeholder="Rating (Ex. 13+)" value="{{ old('rating') }}">
                                                    <label for="ratingFilm">Rating</label>
                                                </div>
                                            </div>
        
                                            <div class="col-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id='typeFilm' name="type" placeholder="Genre (Ex. Horreur)"  value="{{ old('type') }}">
                                                    <label for="typeFilm">Genre</label>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-control" id="realisateur_id" name="realisateur_id">
                                                <option value="">--Choisir un réalisateur--</option>
                                                @foreach($personnes as $personne)
                                                    <option value="{{ $personne->id }}"
                                                        {{ $personne->prenom == old('realisateur_id')? 'selected' : null}}
                                                        {{ $personne->nom == old('realisateur_id')? 'selected' : null}}> 
                                                        {{ $personne->prenom }}
                                                        {{ $personne->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label for="realisateur_id">Realisateur</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-control" id="producteur_id" name="producteur_id"  value="{{ old('producteur_id') }}">
                                                <option value="">--Choisir un producteur--</option>
                                                    @foreach($personnes as $personne)
                                                        <option value="{{ $personne->id }}" 
                                                            {{ $personne->prenom == old('producteur_id')? 'selected' : null}}
                                                            {{ $personne->nom == old('producteur_id')? 'selected' : null}}>
                                                            {{ $personne->prenom }}
                                                            {{ $personne->nom }}
                                                        </option>
                                                    @endforeach
                                            </select>
                                            <label for="producteur_id">Producteur</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <input type="file" name="imageFilm" id="imageID" class="form-control ">
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id='lienFilm' name="lienFilm" placeholder="Lien du film" value="{{ old('lien') }}">
                                            <label for="lienFilm">Lien du film</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



    
                    </div>
                    
                    <div class="card-footer d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-secondary">Enregistrer</button>
                    </div>

                </div>
                <!-- <div class="form-group">   -->
            




                    <div class="row pt-3">
                        
                    </div>
                    
                    <div class="row pt-3">
                        <div class="offset col-3"></div>
                        <div class="col-6">
                        </div>
                        <div class="offset col-3"></div>
                    </div>
                </div>

            </form>
        <!-- </div> -->
    </div>
</div>
    

@endsection