@extends('layouts.app')

@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
                        <form method="POST" action="{{ route('personnes.store') }}" class="sign__form" enctype="multipart/form-data">
                            @csrf
                            <h3 class="section__title">Ajout d'une personne</h3>

            <!-- Prénom -->
                            <div class="sign__group">
                                <input type="text" class="sign__input" id='prenomPersonne' name="prenom" placeholder="Prénom">
                            </div>
            
            <!-- Nom -->
							<div class="sign__group">
                            <input type="text" class="sign__input" id='nomPersonne' name="nom" placeholder="Nom">
							</div>

            <!-- Date de naissance -->
							<div class="sign__group">
                                <input type="date" class="sign__input" id='inDateNaiss' name="dateNaiss" placeholder="Date de naissance">
							</div>

            <!-- Sexe-->
							<div class="sign__group">
                            <select name="sexe" id="Sexe" class="sign__input" placeholder="Sexe">                                    
                                        <option value="H" id="choixMasc" selected>Masculin</option>
                                        <option value="F" id="choixFem">Féminin</option>
                                        <option value="A" id="choixAutre">Autre</option>                                   
                                </select>
							</div>                            
                            
            <!-- Lien photo -->
                            <div class="sign__group">
                                <input type="file" class="sign__input" id="imageFilm" name="imageID" placeholder="Image de la personne">
                            </div>
                            
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button class="modif__btn" type="Submit">Ajouter</button>                                
                                <a href="{{ route('admin.listePers') }}" class="modif__btn">Retour</a>                                
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