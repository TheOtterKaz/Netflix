@extends('layouts.app')

@section('contenu')

<!-- MAIN CONTAINER -->

<section class="section section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
<!-- acteurs -->
	<!-- titre -->
		    <div class="col-12">
		    	<h2 class="section__title">Acteurs</h2>
		    </div>

	<!-- card acteurs -->
            @if(count($acteurs))
                @foreach($acteurs as $acteur) 
				    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					    <div class="card">
					        <a href="{{ route('personnes.show', [$acteur]) }}">
						        <div class="card__cover">
                	  		        <img src="{{$acteur->imagePers}}" alt="PhotoActeur" style="height:200px; width:160px; overflow-x: hidden;">
						        </div>
                	        </a>

						    <div class="card__content">
						    	<h3 class="card__title"><a href="#">{{$acteur->prenom}} {{$acteur->nom}}</a></h3>
						    </div>
					    </div>
				    </div>
                @endforeach
            @endif
    <!-- fin card acteurs -->

<!-- réalisateurs -->
	<!-- titre -->
		    <div class="col-12">
		    	<h2 class="section__title">Réalisateurs</h2>
		    </div>

	<!-- card réalisateurs -->
    @if(count($realisateurs))
                @foreach($realisateurs as $realisateur)
				    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					    <div class="card">
					        <a href="{{ route('personnes.show', [$realisateur]) }}">
						        <div class="card__cover">
                	  		        <img src="{{$realisateur->imagePers}}" alt="PhotoActeur" style="height:200px; width:160px; overflow-x: hidden;">
						        </div>
                	        </a>

						    <div class="card__content">
						    	<h3 class="card__title"><a href="#">{{$realisateur->prenom}} {{$realisateur->nom}}</a></h3>
						    </div>
					    </div>
				    </div>
                @endforeach
            @endif
    <!-- fin card réalisateurs -->

<!-- producteurs -->
	<!-- titre -->
		    <div class="col-12">
		    	<h2 class="section__title">Producteurs</h2>
		    </div>

	<!-- card réalisateurs -->
    @if(count($producteurs))
                @foreach($producteurs as $producteur)
				    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					    <div class="card">
					        <a href="{{ route('personnes.show', [$producteur]) }}">
						        <div class="card__cover">
                	  		        <img src="{{$producteur->imagePers}}" alt="PhotoActeur" style="height:200px; width:160px; overflow-x: hidden;">
						        </div>
                	        </a>

						    <div class="card__content">
						    	<h3 class="card__title"><a href="#">{{$producteur->prenom}} {{$producteur->nom}}</a></h3>
						    </div>
					    </div>
				    </div>
                @endforeach
            @endif
    <!-- fin card réalisateurs -->
			</div>
		</div>
	</section>

@endsection