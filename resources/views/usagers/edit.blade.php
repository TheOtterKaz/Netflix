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
						<form method="POST" action="" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification de l'usager</h3>
                            <h3 class="section__subtitle">{{ $usager->username}}</h3>
                            @csrf     
                            @method('PATCH')                    

            <!-- Rôle --->
                        <div class="sign__group form-group">
                                <select name="role" id="role" class="modif__input form-control" placeholder="Rôle" value="{{ old('role', $usager->role) }}">                                    
                                        <option value="Admin" id="choixAdmin" selected>Admin</option>
                                        <option value="Adulte" id="choixAdulte">Adulte</option>
                                        <option value="Kid" id="choixKid">Enfant</option>                                   
                                </select>
							</div>            
           
            <!-- Username ¤ Courriel -->
                            <div class="sign__group form-group">
                                <input type="text" name="nomUsager" class="modif__input form-control" id="nomUsager" placeholder="Username" value="{{ old('nomUsager', $usager->nomUsager) }}">
                                <input type="email" name="email" class="modif__input form-control" id="email" placeholder="Courriel" value="{{ old('email', $usager->email) }}">
							</div>

            <!-- Prénom ¤ Nom-->
                            <div class="sign__group form-group">
                                <input type="text" class="modif__input form-control" id='prenom' name="prenom" placeholder="Prénom" value="{{ old('prenom', $usager->prenom) }}">
                                <input type="text" class="modif__input form-control" id='nom' name="nom" placeholder="Nom" value="{{ old('nom', $usager->nom) }}">
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