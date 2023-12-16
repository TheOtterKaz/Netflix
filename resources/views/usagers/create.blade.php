@extends('layouts.app')

@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
                        <form method="post" action="" class="sign__form" enctype="multipart/form-data">
                            @csrf
                                <h3 class="section__title">Ajout d'un usager</h3>

            <!-- Username -->
                            <div class="sign__group">
                                <input type="text" class="sign__input" id='Username' name="Username" placeholder="Username">
                            </div>
            
            <!-- Courriel -->
                            <div class="sign__group">
                                <input type="email" class="sign__input" id='email' name="email" placeholder="Courriel">
                            </div>

            <!-- Mot de passe -->
							<div class="sign__group">
                                <input type="password" class="sign__input" id='mdp1' name="mdp1" placeholder="Mot de passe">
							</div>

            <!-- Validation Mot de passe -->
                            <div class="sign__group">
                                <input type="password" class="sign__input" id='mdp2' name="mdp2" placeholder="Validation du mot de passe">
							</div>                           
                            
            <!-- Role -->
                            <div class="sign__group">
                                <select name="role" id="role" class="sign__input" placeholder="Rôle">                                    
                                        <option value="Admin" id="choixAdmin" selected>Admin</option>
                                        <option value="Adulte" id="choixAdulte">Adulte</option>
                                        <option value="Kid" id="choixKid">Enfant</option>                                   
                                </select>
							</div>           
                            
            <!-- Boutons -->
                            <div class="modif_btn_group">
                                <button class="modif__btn" type="Submit">Ajouter</button>                                
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