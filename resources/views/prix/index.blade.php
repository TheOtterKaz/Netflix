@extends('layouts.app')
@section('Titre', 'Prix')
@section('contenu')

<!-- page title -->
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">

	<!-- Titre -->
						<h2 class="section__title">Prix</h2>

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="{{ route('films.index') }}">Accueil</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Prix</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Prix -->
	<div class="section">
		<div class="container">
			<div class="row">

				<!-- Caractéristiques des prix -->
				<div class="col-12">
					<ul class="row plan-features">
						<li class="col-12 col-md-6 col-lg-4">1 mois d'accès illimité!</li>
						<li class="col-12 col-md-6 col-lg-4">Regardez sur votre cellulaire, ordinateur ou TV</li>
						<li class="col-12 col-md-6 col-lg-4">Possibilité de télécharger</li>
						<li class="col-12 col-md-6 col-lg-4">Regardez hors-ligne</li>
						<li class="col-12 col-md-6 col-lg-4">Plus de 1000 films, séries et plus</li>
					</ul>
				</div>

				<!-- Prix de base -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price">
						<div class="price__item price__item--first"><span>Basique</span> <span>Gratuit</span></div>
						<div class="price__item"><span>7 jours</span></div>
						<div class="price__item"><span>720p Resolution</span></div>
						<div class="price__item"><span>Disponibilité limitée</span></div>
						<div class="price__item"><span>Ordinateur seulement</span></div>
						<div class="price__item"><span>Aide limité</span></div>
						<a href="#" class="price__btn">Choisir ce plan</a>
					</div>
				</div>

				<!-- Prix Prenium -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price price--premium">
						<div class="price__item price__item--first"><span>Premium</span> <span>19.99$</span></div>
						<div class="price__item"><span>1 mois</span></div>
						<div class="price__item"><span>Full HD</span></div>
						<div class="price__item"><span>Disponible en tout temps</span></div>
						<div class="price__item"><span>TV & Ordinateur</span></div>
						<div class="price__item"><span>Aide 24/7</span></div>
						<a href="#" class="price__btn">Choisir ce plan</a>
					</div>
				</div>

				<!-- Prix Cinématique -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price">
						<div class="price__item price__item--first"><span>Cinematique</span> <span>39.99$</span></div>
						<div class="price__item"><span>2 Mois</span></div>
						<div class="price__item"><span>Ultra HD</span></div>
						<div class="price__item"><span>Disponible en tout temps</span></div>
						<div class="price__item"><span>Tout appareil</span></div>
						<div class="price__item"><span>Aide 24/7</span></div>
						<a href="#" class="price__btn">Choisir ce plan</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Caractéristiques -->
	<section class="section section--dark">
		<div class="container">
			<div class="row">

	<!-- titre -->
			<div class="col-12">
				<h2 class="section__title section__title--no-margin">Nos caractéristiques</h2>
			</div>

	<!-- Ultra HD -->
			<div class="col-12 col-md-6 col-lg-4">
				<div class="feature">
					<i class="icon ion-ios-tv feature__icon"></i>
					<h3 class="feature__title">Ultra HD</h3>
					<p class="feature__text">Avec ce degré de définition de l'image ultra-élevé, vous serez toujours comblé par la qualité de votre divertissement.</p>
				</div>
			</div>

	<!-- Films -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-film feature__icon"></i>
						<h3 class="feature__title">Film</h3>
						<p class="feature__text">Peu importe votre style, nous sommes persuadés que vous trouverez quelque chose qui vous satisfera.</p>
					</div>
				</div>

	<!-- Prix -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-trophy feature__icon"></i>
						<h3 class="feature__title">Prix</h3>
						<p class="feature__text">Grâce à notre concept, nous avons remporté plusieurs prix à travers le monde.</p>
					</div>
				</div>

	<!-- Notifications -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-notifications feature__icon"></i>
						<h3 class="feature__title">Notifications</h3>
						<p class="feature__text">Restez informer en activant les notifications sur les nouveautés et vos favoris.</p>
					</div>
				</div>

	<!-- Rocket -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-rocket feature__icon"></i>
						<h3 class="feature__title">Rocket</h3>
						<p class="feature__text">Cette option unique permet de créer son propre algorithme.</p>
					</div>
				</div>

	<!-- Multi-langues -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-globe feature__icon"></i>
						<h3 class="feature__title">Sous-titres</h3>
						<p class="feature__text">Il est possible d'avoir plusieurs langues dans les sous-titres.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end features -->

@endsection