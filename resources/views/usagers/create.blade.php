@extends('layouts.app')
@section('Titre', 'Ajout usager')
@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="{{ asset('img/section/section.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
                        <form method="post" action="{{ route('usagers.store')}}" class="sign__form" enctype="multipart/form-data">
                            @csrf
                                <h3 class="section__title">Ajout d'un usager</h3>

            <!-- Role ¤ Username -->
                            <div class="sign__group form-group">                                
                                <select name="role" id="role" class="sign__input form-control" placeholder="Rôle">                                    
                                        <option value="Admin" id="choixAdmin" selected>Admin</option>
                                        <option value="Adulte" id="choixAdulte">Adulte</option>
                                        <option value="Enfant" id="choixKid">Enfant</option>                                   
                                </select>							    

                                <input type="text" class="sign__input form-control" id='nomUsager' name="nomUsager" placeholder="Username" value="{{ old('nomUsager') }}">
                            </div>

            <!-- Prénom ¤ Nom -->
                            <div class="sign__group form-group">
                                <input type="text" class="sign__input form-control" id='prenom' name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                                <input type="text" class="sign__input form-control" id='nom' name="nom" placeholder="Nom" value="{{ old('nom') }}">
                            </div>

            <!-- Mot de passe ¤ Validation Mot de passe-->
                            <div class="sign__group form-group">
                                <input type="password" class="sign__input form-control" id='password' name="password" placeholder="Mot de passe">
                                <input type="password" class="sign__input form-control" id='password_confirmation' name="password_confirmation" placeholder="Validation du mot de passe">
							</div>        

            <!-- Courriel -->
                            <div class="sign__group form-group">
                                <input type="email" class="sign__input form-control" id='email' name="email" placeholder="Courriel" value="{{ old('email') }}">
                            </div>                     
                                                     
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button type="submit" class="modif__btn">Ajouter</button>                                
                                <a href="{{ route('admin.listeUsagers') }}" class="modif__btn">Retour</a>                                
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