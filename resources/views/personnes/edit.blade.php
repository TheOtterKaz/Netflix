@extends('layouts.app')
@section('Titre', 'Modification personne')
@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="{{ asset('img/section/section.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
						<form method="POST" action="{{ route('personnes.update', [$personne]) }}" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification de</h3>
                            <h3 class="section__subtitle">{{ $personne->prenom . ' ' . $personne->nom}}</h3>
                            @csrf
                            @method('PATCH')    

            <!-- Identifiant -->
                            <div class="sign__group form-group">
                                <input type="number" name="id" id="inputID" class="modif__input form-control" placeholder="ID" value="{{ old('id', $personne->id) }}" readonly aria-readonly="true">
                            </div> 

            <!-- Prenom ¤ Nom -->
                            <div class="sign__group form-group">
                                <input type="text" name="prenom" id="prenom" class="modif__input form-control" placeholder="Prénom" value="{{ old('prenom', $personne->prenom) }}">
                                <input type="text" name="nom" id="nom" class="modif__input form-control" placeholder="Nom" value="{{ old('nom', $personne->nom) }}">
                            </div>      
            
            <!-- Date de naissance ¤ Sexe -->
							<div class="sign__group form-group">
                                <input type="date" name="dateNaiss" id="dateNaiss" class="modif__input form-control" placeholder="Date de Naissance" value="{{ old('dateNaiss', $personne->dateNaiss) }}">
							
                                <select name="sexe" id="sexe" class="modif__input form-control" placeholder="Sexe" value="{{ old('sexe', $personne->sexe) }}">
                                    @if($personne->sexe == 'M' || $personne->sexe == 'H')
                                        <option value="H" id="choixMasc" selected>Masculin</option>
                                        <option value="F" id="choixFem">Féminin</option>
                                        <option value="A" id="choixAutre">Autre</option>

                                    @elseif($personne->sexe == 'F')
                                        <option value="H" id="choixMasc">Masculin</option>
                                        <option value="F" id="choixFem" selected>Féminin</option>
                                        <option value="A" id="choixAutre">Autre</option>
                                    @else
                                        <option value="A" id="choixAutre" selected>Autre</option>
                                        <option value="H" id="choixMasc">Masculin</option>
                                        <option value="F" id="choixFem">Féminin</option>
                                    @endif
                                </select>
                            </div>   
                            
            <!-- Image -->
                            <div class="sign__group form-group">
                                <input type="file" name="imagePers" id="imagePers" class="modif__image form-control" placeholder="Image de la personne" value="{{ old('imagePers', $personne->imagePers) }}">
							</div>                
            
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button class="modif__btn" type="submit">Modifier</button>                                
                                <a href="{{ route('admin.listePers') }}" class="modif__btn">Retour</a>                                
                            </div>						

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection
