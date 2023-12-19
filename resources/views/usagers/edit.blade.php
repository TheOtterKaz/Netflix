@extends('layouts.app')
@section('Titre', 'Modification usager')
@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
						<form method="POST" action="{{ route('usagers.update', [$usager]) }}" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification de </h3>
                            <h3 class="section__subtitle">{{ $usager->nomUsager}}</h3>
                            @csrf     
                            @method('PATCH')                    

            <!-- Courriel --->
            <input type="email" name="email" id="email" class="modif__input form-control" placeholder="Courriel" value="{{ old('email', $usager->email) }}" readonly aria-readonly="true">
    

             <!-- Prénom ¤ Nom-->
                            <div class="sign__group form-group">
                                <input type="text" name="prenom" id='prenom' class="modif__input form-control" placeholder="Prénom" value="{{ old('prenom', $usager->prenom) }}">
                                <input type="text" name="nom" id='nom' class="modif__input form-control" placeholder="Nom" value="{{ old('nom', $usager->nom) }}">
                            </div>      

            <!-- Username ¤ Rôle -->
                            <div class="sign__group form-group">
                                <input type="text" name="nomUsager" id="nomUsager" class="modif__input form-control" placeholder="Username" value="{{ old('nomUsager', $usager->nomUsager) }}">
                               
                                    <select name="role" id="role" class="modif__input form-control" placeholder="Rôle" value="{{ old('role', $usager->role) }}">                                    
                                            <option value="Admin" id="choixAdmin" selected>Admin</option>
                                            <option value="Adulte" id="choixAdulte">Adulte</option>
                                            <option value="Kid" id="choixKid">Enfant</option>                                   
                                    </select>
							</div>

            <!-- Mot de passe ¤ Validation Mot de passe-->
                            <div class="sign__group form-group">
                                <input type="password" class="modif__input form-control" id='password' name="password" placeholder="Mot de passe" value="{{ old('password', $usager->password) }}">
                                <input type="password" class="modif__input form-control" id='password_confirmation' name="password_confirmation" placeholder="Validation du mot de passe" value="{{ old('password', $usager->password) }}">
							</div>  
                                        
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button class="modif__btn" type="submit">Modifier</button>                                
                                <a href="{{ route('admin.listeUsagers') }}" class="modif__btn">Retour</a>                                
                            </div>						

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection