@extends('layouts.app')

@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
                        <form method="post" action="{{ route('films.store') }}" class="sign__form" enctype="multipart/form-data">
                            @csrf
                                <h3 class="section__title">Ajout d'un film</h3>

            <!-- Titre -->
                            <div class="sign__group">
                                <input type="text" class="add_input" id='titreFilm' name="titre" placeholder="Titre du film">
                            </div>
            
            <!-- Résumé -->
							<div class="sign__group">
                                <textarea class="add_input" id="resumeFilm" name="resume" placeholder="Entrez le résumé du film" rows="3"></textarea>
							</div>

            <!-- Brand ¤ Genre -->
							<div class="sign__group">
                                <input type="text" class="sign__input" id='brandFilm' name="brand" placeholder="Catégorie (Ex. Marvel)">
                                <input type="text" class="sign__input" id='typeFilm' name="type" placeholder="Genre (Ex. Horreur)">
							</div>

            <!-- Cote ¤ Rating -->
							<div class="sign__group">
                                <input type="text" class="sign__input" id='coteFilm' name="cote" placeholder="Cote (Ex. 92)">
                                <input type="text" class="sign__input" id='ratingFilm' name="rating" placeholder="Rating (Ex. 13+)">
							</div>                            
                            
            <!-- Durée ¤ Année de sortie -->
                            <div class="sign__group">
                                <input type="number" class="sign__input" id="dureeFilm" name="duree" placeholder="Duree (en minutes)" min="0">
                                <input type="text" class="sign__input" id="anneeFilm" name="annee" placeholder="Année de sortie" value="{{ old('annee') }}">
                            </div>

            <!-- Réalisateur ¤ Producteur -->
                            <div class="sign__group">
                                <select class="sign__input" id="realisateur_id" name="realisateur_id">
                                    <option value="">-- Choisir un réalisateur --</option>
                                        @foreach($personnes as $personne)
                                            <option value="{{ $personne->id }}"
                                                {{ $personne->prenom == old('realisateur_id')? 'selected' : null}}
                                                {{ $personne->nom == old('realisateur_id')? 'selected' : null}}> 
                                                {{ $personne->prenom }}
                                                {{ $personne->nom }}
                                            </option>
                                        @endforeach
                                </select>

                                <select class="sign__input" id="producteur_id" name="producteur_id">
                                    <option value="">-- Choisir un producteur --</option>
                                        @foreach($personnes as $personne)
                                            <option value="{{ $personne->id }}">
                                                {{ $personne->prenom }}
                                                {{ $personne->nom }}
                                            </option>
                                        @endforeach
                                </select>
                            </div>
                            
            <!-- Image ¤ Bande Annonce -->
                            <div class="sign__group">                                
                                <input type="file" class="sign__input" id="imageFilm" name="imageFilm" placeholder="Image du film">
                                <input type="text" class="sign__input" id="lienFilm" name="lienFilm" placeholder="Lien du film">
                            </div>
                            
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button type="submit" class="modif__btn">Ajouter</button>                                                                                            
                                <a href="{{ route('admin.listeFilms') }}" class="modif__btn">Retour</a>                                
                            </div>						

						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

@endsection