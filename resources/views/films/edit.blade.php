@extends('layouts.app')

@section('contenu')


<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
						<form method="POST" action="{{route('films.update', [$film]) }}" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification d'un film</h3>
                        @csrf
                        @method('PATCH')    

            <!-- Identifiant ¤ Titre-->
                            <div class="sign__group">
                                <input type="number" name="id" class="modif__id" id="inputID" placeholder="ID" value="{{ old('id', $film->id) }}" readonly aria-readonly="true">
                                <input type="text" name="titre" class="modif__titre" id="textNouvTitre" placeholder="Titre" value="{{ old('titre', $film->titre) }}">
                            </div>        
            
            <!-- Résumé -->
							<div class="sign__group">
                                <textarea name="resume" class="modif_textarea" placeholder="Entrez le résumé du film" id="nouvResume">{{ old('resume', $film->resume) }}</textarea>
							</div>
            
            <!-- Brand ¤ Type -->
							<div class="sign__group">
                                <input type="text" name="brand" class="modif__input" id="textNouvBrand" placeholder="Brand" value="{{ old('brand', $film->brand) }}">
                                <input type="text" name="type" class="modif__input" id="inType" placeholder="Type" value="{{ old('type', $film->type) }}">
							</div>
            
            <!-- Cote ¤ Rating -->
							<div class="sign__group">
                                <input type="number" name="cote" class="modif__input" id="inCote" placeholder="Cote" value="{{ old('cote', $film->cote) }}">                                

                                <input type="text" name="rating" class="modif__input" id="textNouvRating" list="ratingOptions" placeholder="Rating" value="{{ old('rating', $film->rating) }}">
                                    <datalist id="ratingOptions">
                                        <option value="G">
                                        <option value="13+">
                                        <option value="16+">
                                        <option value="18+">
                                    </datalist>
                                </input>     
							</div>

            <!-- Durée ¤ Année de sortie -->
                            <div class="sign__group">
                                <input type="number" name="duree" class="modif__input" id="floatingDuree" placeholder="Duree (en minutes)" min="0" value="{{ old('duree', $film->duree) }}">
                                <input type="number" name="annee" class="modif__input" id="inAnnee" placeholder="Année de sortie" min="0" value="{{ old('annee', $film->annee) }}">
                            </div>                                                                   
            
            <!-- Image -->
                            <div class="sign__group">
                                <input type="text" name="imageFilm" class="modif__image" id="imageFilm" placeholder="Image du film" value="{{ old('imageFilm', $film->imageFilm) }}">
							</div>
            
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button class="modif__btn" type="submit">Modifier</button>                                
                                <a href="{{ route('admin.listeFilms') }}" class="modif__btn">Retour</a>                                
                            </div>						

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection
