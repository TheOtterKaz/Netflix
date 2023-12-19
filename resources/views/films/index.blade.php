@extends('layouts.app')
@section('Titre', 'Liste des films')
@section('contenu')


<!-- MAIN CONTAINER -->

  	<!-- Caroussel des nouveautés -->
	<section class="home">
		<!-- images background -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg=" {{ asset('img/home/home__bg.jpg ') }}"></div>
			<div class="item home__cover" data-bg=" {{ asset('img/home/home__bg2.jpg') }}"></div>
			<div class="item home__cover" data-bg=" {{ asset('img/home/home__bg3.jpg') }}"></div>
			<div class="item home__cover" data-bg=" {{ asset('img/home/home__bg4.jpg') }}"></div>
		</div>
		<!-- fin images background -->

    <!-- caroussel des nouveautés -->
		<div class="container">
			<div class="row">
  <!-- titre et boutons  -->
				<div class="col-12">
					<h1 class="home__title"><b>Nouveautés</b></h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>


				<div class="col-12">
					<div class="owl-carousel home__carousel">

      @if(count($films))
        @foreach($films as $film)
          @if($film->annee == 2023)
						<div class="item">
	<!-- card -->
		<div class="card card--big">

			<a href="{{ route('films.show', [$film]) }}">              
				<div class="card__cover">
							@if (file_exists(public_path('img/films/' . $film->imageFilm)))
                                <img src="{{ asset('img/films/' . $film->imageFilm) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
                            @else
                                <img src="{{$film->imageFilm}}" alt="">
                            @endif           
				</div>
            </a>                

          	<div class="card__content">
            	<h3 class="card__title">{{$film->titre}}</h3>
            	<span class="card__category">{{$film->type}}</span>
            	<span class="card__rate"><i class="icon ion-ios-star"></i>{{$film->cote}}</span>
          	</div>
 
		</div>
	<!-- end card -->
						
            </div>
      @endif
        @endforeach
          @endif

					</div>
				</div>

			</div>
		</div>
	</section>

  <!-- parties des onglets -->
  <section class="content">
    <div class="content__head">
      <div class="container">
        <div class="row">
          <div class="col-12">

  <!-- titre du contenu -->
            <h2 class="content__title">Films en vedette</h2>

            <!-- onglets du navigateur -->
            <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Marvel</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">DC</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Pixar</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Disney</a>
							</li>
						</ul>

            <!-- partie mobile des onglets -->
            <div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Marvel</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">DC</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Pixar</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Disney</a></li>
								</ul>
							</div>
						</div>


    <div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
    
<!-- card marvel -->
      @if(count($films))
        @foreach($films as $film)
          @if($film->brand == 'Marvel')

          <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="{{ route('films.show', [$film]) }}">
						<div class="card__cover">
							@if (file_exists(public_path('img/films/' . $film->imageFilm)))
                                <img src="{{ asset('img/films/' . $film->imageFilm) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
                            @else
                                <img src="{{$film->imageFilm}}" alt="" class="g-0 border border-0 imgFilm card-img">
                            @endif
						</div>
                	</a>

					<div class="card__content">
						<h3 class="card__title">{{$film->titre}}</h3>
						<span class="card__category"><b>{{$film->type}}</b></span>
						<span class="card__rate"><i class="icon ion-ios-star"></i>{{$film->cote}}</span>
					</div>
				</div>
			</div>

          @endif
        @endforeach
      @endif 
<!-- fin card marvel-->

					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">

<!-- card DC -->
      @if(count($films))
        @foreach($films as $film)
          @if($film->brand == 'DC')

          <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="{{ route('films.show', [$film]) }}">
						<div class="card__cover">
							@if (file_exists(public_path('img/films/' . $film->imageFilm)))
                                <img src="{{ asset('img/films/' . $film->imageFilm) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
                            @else
                                <img src="{{$film->imageFilm}}" alt="" class="g-0 border border-0 imgFilm card-img">
                            @endif
						</div>
                	</a>

					<div class="card__content">
						<h3 class="card__title">{{$film->titre}}</h3>
						<span class="card__category"><b>{{$film->type}}</b></span>
						<span class="card__rate"><i class="icon ion-ios-star"></i>{{$film->cote}}</span>
					</div>
				</div>
			</div>

          @endif
        @endforeach
      @endif 
<!-- fin card DC-->

					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">

<!-- card Pixar -->
      @if(count($films))
        @foreach($films as $film)
          @if($film->brand == 'Pixar')

          <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="{{ route('films.show', [$film]) }}">
						<div class="card__cover">
							@if (file_exists(public_path('img/films/' . $film->imageFilm)))
                                <img src="{{ asset('img/films/' . $film->imageFilm) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
                            @else
                                <img src="{{$film->imageFilm}}" alt="" class="g-0 border border-0 imgFilm card-img">
                            @endif
						</div>
                	</a>

					<div class="card__content">
						<h3 class="card__title">{{$film->titre}}</h3>
						<span class="card__category"><b>{{$film->type}}</b></span>
						<span class="card__rate"><i class="icon ion-ios-star"></i>{{$film->cote}}</span>
					</div>
				</div>
			</div>

          @endif
        @endforeach
      @endif 

<!-- fin card Pixar-->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row">

<!-- card Disney -->
      @if(count($films))
        @foreach($films as $film)
          @if($film->brand == 'Disney')

          <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="{{ route('films.show', [$film]) }}">
						<div class="card__cover">
							@if (file_exists(public_path('img/films/' . $film->imageFilm)))
                                <img src="{{ asset('img/films/' . $film->imageFilm) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
                            @else
                                <img src="{{$film->imageFilm}}" alt="" class="g-0 border border-0 imgFilm card-img">
                            @endif
						</div>
				  	</a>

					<div class="card__content">
						<h3 class="card__title">{{$film->titre}}</h3>
						<span class="card__category"><b>{{$film->type}}</b></span>
						<span class="card__rate"><i class="icon ion-ios-star"></i>{{$film->cote}}</span>
					</div>
				</div>
			</div>

          @endif
        @endforeach
      @endif 

<!-- fin card Disney -->
	
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

@endsection

