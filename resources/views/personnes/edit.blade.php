@extends('layouts.app')

@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
						<form method="POST" action="{{ route('personnes.update', [$personne]) }}" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification d'une personne</h3>
                            @csrf
                            @method('PATCH')    

            <!-- Identifiant -->
                            <div class="sign__group">
                                <input type="number" name="id" class="modif__input" id="inputID" placeholder="ID" value="{{ old('id', $personne->id) }}" readonly aria-readonly="true">
                            </div> 

            <!-- Prenom ¤ Nom -->
                            <div class="sign__group">
                                <input type="text" name="prenom" class="modif__input" id="newPrenom" placeholder="Prénom" value="{{ old('prenom', $personne->prenom) }}">
                                <input type="text" name="nom" class="modif__input" id="newNom" placeholder="Nom" value="{{ old('nom', $personne->nom) }}">
                            </div>      
            
            <!-- Date de naissance ¤ Sexe -->
							<div class="sign__group">
                                <input type="date" name="dateNaiss" class="modif__input" id="newDateNaiss" placeholder="Date de Naissance" value="{{ old('dateNaiss', $personne->dateNaiss) }}">
							
                                <select name="sexe" id="choixNouvSexe" class="modif__input" placeholder="Sexe" value="{{ old('sexe', $personne->sexe) }}">
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
