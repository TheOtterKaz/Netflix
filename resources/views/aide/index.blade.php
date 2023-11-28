@extends('layouts.app')

@section('contenu')

<!-- page title -->
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">

	<!-- Titre -->
					<h2 class="section__title">FAQ</h2>

	<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('films.index') }}">Accueil</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">FAQ</li>
					</ul>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
	<!-- chargement -->
					<div class="faq">
						<h3 class="faq__title">Pourquoi la vidéo ne charge pas?</h3>
						<p class="faq__text">Essayez de mettre à jour votre navigateur ou de vider son cache et supprimer ses cookies.</p>
						<p class="faq__text">Vous pouvez également vérifier si les extensions de votre navigateur qui bloquent les annonces ont un impact sur la lecture des vidéos.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Pourquoi il n'y a pas de version HD de la vidéo?</h3>
						<p class="faq__text">La diffusion de contenu HD nécessite un débit de 8 Mbits/s. Il est possible que les normes de connexion Wi-Fi plus lentes ne permettent pas de diffuser du contenu vidéo HD</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Pourquoi le son est distordu?</h3>
						<p class="faq__text">Il est fort probable qu'un autre signal est interféré avec le signal sans fil allant de l'émetteur vers le casque. Cela pourrait être causé par d'autres appareils sans fil, comme une autre paire d'écouteurs sans fil, les appareils Bluetooth actifs ou d'un routeur WiFi.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Pourquoi la vidéo s'arrêt de manière aléatoire?</h3>
						<p class="faq__text">Les causes les plus courantes qui font que la lecture d'une vidéo est saccadée sont les problèmes de codecs audio et vidéo. Vérifiez les mises à jour disponibles.</p>
					</div>
				</div>	

				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">Pourquoi ma vidéo ne débute pas au commencement?</h3>
						<p class="faq__text">Si vous avez déjà commencé cette vidéo auparavent, il se peut que la lecture soit restée au dernier point de lecture. Il suffit d'aller dans les paramètres et ajuster pour remettre au début.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Comment je fais pour avoir la vidéo en plein écran?</h3>
						<p class="faq__text">Lorsque vous regardez dans les options en bas du lecteur de la vidéo, il y a un petit icône avec 2 flèches. Il suffit de peser dessus pour mettre en plein écran.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Quel navigateur est supporté?</h3>
						<p class="faq__text">Sur les appareils qui utilisent Windows, Microsoft Edge, Firefox et Google chrome peuvent être utilisés. Au niveau de Linux, vous pouvez utiliser Chronium et sur Apple, Safari peut être pris en charge.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Comment je peux vous contacter?</h3>
						<p class="faq__text">Les coordonnées sont disponibles dans le bas de chaque page du site. Notre numéro de téléphone est le 1-800-123-5678. Notre courriel est le support@flixgo.com</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection