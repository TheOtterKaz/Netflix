@extends('layouts.app')

@section('contenu')

<body class="body">
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
			<!-- Formulaire -->
						<form method="POST" action="" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Modification d'un usager</h3>
                        @csrf                          

            <!-- Username-->
                            <div class="sign__group">
                                <input type="text" name="username" class="modif__input" id="username" placeholder="Username" value="{{ old('nomUsager', $usager->nomUsager) }}">
                            </div>        
            
            <!-- Rôle -->
                            <div class="sign__group">
                                <select name="role" id="role" class="modif__input" placeholder="Rôle" value="{{ old('role', $usager->role) }}">                                    
                                        <option value="Admin" id="choixAdmin" selected>Admin</option>
                                        <option value="Adulte" id="choixAdulte">Adulte</option>
                                        <option value="Kid" id="choixKid">Enfant</option>                                   
                                </select>
							</div> 
            
            <!-- Courriel -->
							<div class="sign__group">
                                <input type="email" name="email" class="modif__input" id="email" placeholder="Courriel" value="{{ old('email', $usager->email) }}">
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