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
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Ajout d'un film</h3>
                </div>
            </div>

            <form method="post" action="{{ route('films.store') }}">
                @csrf
                <div class="form-group">  
                <div class="row pt-5">
                    <div class="offset col-3"></div>
                    <div class="col-6">
                        <input type="text" class="form-control" id='titreFilm' name="titre" placeholder="Titre du film" value="{{ old('titre') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>   
            
                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-6">
                        <textarea class="form-control" id="resumeFilm" name="resume" placeholder="Description" value="{{ old('resume') }}" rows="3"></textarea>
                    </div>
                    <div class="offset col-3"></div>
                </div>

                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-3">
                        <input type="text" class="form-control" id='brandFilm' name="brand" placeholder="Catégorie (Ex. Marvel)" value="{{ old('brand') }}">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id='collFilm' name="coll" placeholder="Collection (Ex. Thor)" value="{{ old('coll') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>

                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-3">
                        <input type="text" class="form-control" id='coteFilm' name="cote" placeholder="Cote (Ex. 92%)" value="{{ old('cote') }}">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id='ratingFilm' name="rating" placeholder="Rating (Ex. 13+)" value="{{ old('rating') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>

                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-3">
                        <input type="text" class="form-control" id='dureeFilm' name="duree" placeholder="Durée (en minutes)" value="{{ old('duree') }}">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id='anneeFilm' name="annee" placeholder="Année de sortie" value="{{ old('annee') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>

                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-6">
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
                    </div>
                    <div class="offset col-3"></div>
                </div>

                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-6">
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
                    </div>
                    <div class="offset col-3"></div>
                </div>
                
                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-6">
                    <input type="text" class="form-control" id='typeFilm' name="type" placeholder="Genre (Ex. Horreur)"  value="{{ old('type') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>
                
                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-6">
                    <input type="text" class="form-control" id='imageFilm' name="image" placeholder="Image du film" value="{{ old('image') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>
                
                <div class="row pt-3">
                    <div class="offset col-3"></div>
                    <div class="col-6">
                    <input type="text" class="form-control" id='lienFilm' name="lien" placeholder="Lien du film" value="{{ old('lien') }}">
                    </div>
                    <div class="offset col-3"></div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="offset col-3"></div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-secondary">Enregistrer</button>
                    </div>
                <div class="offset col-3"></div>
            </div>

        </form>
    </div>
    </div>
</div>
    

@endsection