@extends('layouts.app')
@section('Titre', 'Connexion')
@section('contenu')


<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="post" action="{{ route('usagers.login') }}" class="sign__form" enctype="multipart/form-data">
                            <h3 class="section__title">Connexion</h3>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Courriel">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Mot de passe">
							</div>
							
							<button class="sign__btn" type="button">Se connecter</button>

							<!-- <span class="sign__text">Vous n'avez pas encore de compte? <a href="signup.html">S'inscrire</a></span> -->

						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection