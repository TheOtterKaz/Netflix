@extends('layouts.app')
@section('Titre', 'Modification film')
@section('contenu')


<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
						<form method="POST" action="{{route('films.update', [$film]) }}" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification du film</h3>
                            <h3 class="section__subtitle">{{ $film->titre}}</h3>
                            @csrf
                            @method('PATCH')    

            <!-- Identifiant ¤ Titre-->
                            <div class="sign__group form-group">
                                <input type="number" name="id" id="id" class="modif__id form-control" placeholder="ID" value="{{ old('id', $film->id) }}" readonly aria-readonly="true">
                                <input type="text" name="titre" id="titre" class="modif__titre form-control" placeholder="Titre" value="{{ old('titre', $film->titre) }}">
                            </div>        
            
            <!-- Résumé -->
							<div class="sign__group form-group">
                                <textarea name="resume" id="resume" class="modif_textarea form-control" placeholder="Entrez le résumé du film">{{ old('resume', $film->resume) }}</textarea>
							</div>
            
            <!-- Brand ¤ Type -->
							<div class="sign__group form-group">
                                <input type="text" name="brand" id="brand" class="modif__input form-control" placeholder="Brand" value="{{ old('brand', $film->brand) }}">
                                <input type="text" name="type" id="type" class="modif__input form-control" placeholder="Type" value="{{ old('type', $film->type) }}">
							</div>
            
            <!-- Cote ¤ Rating -->
							<div class="sign__group form-group">
                                <input type="number" name="cote" id="cote" class="modif__input form-control" placeholder="Cote" value="{{ old('cote', $film->cote) }}">                                

                                <input type="text" name="rating" id="rating" class="modif__input form-control" list="ratingOptions" placeholder="Rating" value="{{ old('rating', $film->rating) }}">
                                    <datalist id="ratingOptions">
                                        <option value="G">
                                        <option value="13+">
                                        <option value="16+">
                                        <option value="18+">
                                    </datalist>
                                </input>     
							</div>

            <!-- Durée ¤ Année de sortie -->
                            <div class="sign__group form-group">
                                <input type="number" name="duree" id="duree" class="modif__input form-control" placeholder="Duree (en minutes)" min="0" value="{{ old('duree', $film->duree) }}">
                                <input type="number" name="annee" id="annee" class="modif__input form-control" placeholder="Année de sortie" min="0" value="{{ old('annee', $film->annee) }}">
                            </div>                                                                   
            
            <!-- Image -->
                            <div class="sign__group form-group">
                                <input type="text" name="imageFilm" id="imageFilm" class="modif__image form-control" placeholder="Image du film" value="{{ old('imageFilm', $film->imageFilm) }}">
							</div>
            
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button type="submit" class="modif__btn">Modifier</button>                                                              
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
