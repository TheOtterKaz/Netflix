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

            <!-- Prénom ¤ Nom-->
                            <div class="sign__group form-group">
                                <input type="text" class="sign__input form-control" id='prenomPersonne' name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                                <input type="text" class="sign__input form-control" id='nomPersonne' name="nom" placeholder="Nom" value="{{ old('nom') }}">
                            </div>            

            <!-- Date de naissance ¤ Sexe -->
							<div class="sign__group form-group">
                                <input type="date" class="sign__input form-control" id='inDateNaiss' name="dateNaiss" placeholder="Date de naissance" value="{{ old('dateNaiss') }}">

                                <select name="sexe" id="sexe" class="sign__input" placeholder="Sexe" value="{{ old('sexe') }}">                                    
                                        <option value="H" id="choixMasc" selected>Masculin</option>
                                        <option value="F" id="choixFem">Féminin</option>
                                        <option value="A" id="choixAutre">Autre</option>  
                                </select>
							</div>                           
                            
            <!-- Lien photo -->
                            <div class="sign__group form-group">
                                <input type="file" class="add__image form-control" id="imageID" name="imagePers" placeholder="Image de la personne" value="{{ old('imagePers') }}"
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