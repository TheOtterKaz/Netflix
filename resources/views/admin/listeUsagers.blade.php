@extends('layouts.app')

@section('contenu')

<!-- page title -->
<section class="section section--first section--bg" data-bg="{{ asset('img/section/section.jpg') }}">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
<!-- titre -->
					<h2 class="section__title">Liste des usagers</h2>

<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('films.index') }}">Accueil</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Liste des usagers</li>
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
                <a href="{{ route('usagers.create') }}" class="add__btn">Ajouter</a>
			</div>
		</div>
	</div>
</div>

<!-- liste -->
<div class="catalog">
	<div class="container">
		<div class="row">

            @if(count($usagers))
                @foreach($usagers as $usager)
	                <!-- carte -->
		    <div class="col-6 col-sm-4 col-lg-3 col-xl-4">
				<div class="card">              
             
				    <div class="card__user">
                        <h1 class="card__title">{{$usager->nomUsager}}</h1>  
                        <span class="card__category">Rôle : {{$usager->role}}</span>     
                        <span class="card__rate">Courriel : {{$usager->email}}</span>                            
				    </div>              						
                    
            <!-- boutons -->            
            <div class="card__listUsers">
                <a href="{{ route('usagers.edit', [$usager]) }}" class="admin__btn">Modifier</a>

                <form method="POST" action="{{route('usagers.destroy', [$usager->id]) }}">
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