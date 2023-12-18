@extends('layouts.app')

@section('contenu')

<!-- page title -->
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
<!-- titre -->
					<h2 class="section__title">Liste des films</h2>

<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('films.index') }}">Accueil</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Liste des films</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</section>

<!-- bouton ajouter -->
<div class="filter">
	<div class="container">
        <div class="row">
			<div class="col-12 col-md-12 col-xl-12">								
                <a href="{{ route('films.create') }}" class="add__btn">Ajouter</a>
			</div>
		</div>
	</div>
</div>

<!-- liste -->
<div class="catalog">
	<div class="container">
		<div class="row">

@if(count($films))
    @foreach($films as $film)
	<!-- carte -->
		    <div class="col-6 col-sm-4 col-lg-3 col-xl-3">
				<div class="card">              
        <!-- image -->             
				    <div class="card__films">
							@if (file_exists(public_path('img/films/' . $film->imageFilm)))
                                <img src="{{ asset('img/films/' . $film->imageFilm) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
                            @else
                                <img src="{{$film->imageFilm}}" alt="" >
                            @endif             
				    </div>               
        
                    <!-- boutons -->            
					<div class="card__listAdmin">
                        <a href="{{ route('films.edit', [$film]) }}" class="admin__btn">Modifier</a>

						<form method="POST" action="{{route('films.destroy', [$film->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin__btn">Supprimer</button>
                        </form>
                    </div>							

				</div>			
		    </div>
    @endforeach
@endif

	    </div>
    </div>
</div>

@endsection