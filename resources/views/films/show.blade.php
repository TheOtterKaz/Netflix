@extends('layouts.app')

@section('contenu')

<!-- MAIN CONTAINER -->
<section class="section details">
    <!-- background -->
    <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>

    <div class="container">
        <div class="row">
    <!-- titre -->
            <div class="col-12">
                <h1 class="details__title">{{$film->titre}}</h1>
            </div>

    <!-- contenu -->
        <div class="col-12 col-xl-6">
            <div class="card card--details">
                <div class="row">
    <!-- image  -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-4">
						<div class="card__cover">
							<img src="{{$film->imageFilm}}" alt="Affiche">
						</div>
					</div> 

    <!-- infos -->
                    <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
						<div class="card__content">
							<div class="card__wrap">
								<span class="card__rate"><i class="icon ion-ios-star"></i>{{$film->cote}}</span>

								<ul class="card__list">
									<li>HD</li>
									<li>{{$film->rating}}</li>
								</ul>
							</div>

							<ul class="card__meta">
								<li><span>Genre :</span> <span>{{$film->type}}</span></li>
								<li><span>Année de sortie : </span>{{$film->annee}}</li>
								<li><span>Durée : </span>{{$film->duree}} mins</li>
								<li><span>Réalisateur : </span>{{$film->realisateur->prenom}} {{$film->realisateur->nom}}</li>
								<li><span>Producteur : </span>{{$film->producteur->prenom}} {{$film->producteur->nom}}</li>
								<li>
                                    <span>Acteurs : </span>
									<ul>
										@foreach($acteurs as $acteur)                                        
											<li>{{$acteur->prenom}} {{$acteur->nom}}</li>
										@endforeach										
									</ul>
                                </li>
							</ul>

							<div class="card__description card__description--details">
                                <span>Synospis : </span><span>{{$film->resume}}</span>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>


    <!-- player -->
		<div class="col-12 col-xl-6">
			<iframe style="width:500px;height:300px;position:absolute;overflow:hidden" frameborder="0" type="text/html" src="{{$film->lienFilm}}" allowfullscreen title="Dailymotion Video Player"></iframe> 
		</div>

        <div class="col-12">
		    <div class="details__wrap">
    <!-- Applications -->
			    <div class="details__devices">
			    	<span class="details__devices-title">Disponible sur :</span>
			    		<ul class="details__devices-list">
			    			<li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
			    			<li><i class="icon ion-logo-android"></i><span>Android</span></li>
			    			<li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
			    			<li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
			    		</ul>
			    </div>

    <!-- Partage -->
	    		<div class="details__share">
	    			<span class="details__share-title">Partagez :</span>
	    				<ul class="details__share-list">
	    					<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
	    					<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
	    					<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
	    					<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
	    				</ul>
	    		</div>
	    	</div>
	    </div>

            </div>
        </div>
    </section>

@endsection