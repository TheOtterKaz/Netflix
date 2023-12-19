@extends('layouts.app')
@section('Titre', 'Détails personne')
@section('contenu')

<!-- MAIN CONTAINER -->
<section class="section details">
    <!-- background -->
    <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
        <div class="container">
            <div class="row">

    <div class="offset col-xl-3"></div>
    <!-- contenu -->
            <div class="col-12 col-xl-6" >
                <div class="card card--details d-flex align-items-center justify-content-center">
                    <div class="row">
    <!-- image  -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
						<div class="card__cover">
                        @if (file_exists(public_path('img/personnes/' . $personne->imagePers)))
                                <img src="{{ asset('img/personnes/' . $personne->imagePers) }}" alt="{{ $personne->prenom }}" title="{{ $personne->prenom }}">
                            @else
                                <img src="{{ $personne->imagePers }}" alt="PersonneImage" >
                            @endif 
						</div>

                    <!-- Boutons -->                                                     
                        <a href="{{ route('personnes.index') }}" class="zoom__btn"><- Retour</a>                                
                         
					</div> 

                                      

    <!-- infos -->
                    <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
						<div class="card__content">
                            <h1 class="details__title">{{$personne->prenom}} {{$personne->nom}}</h1>
							
                            <div class="card__wrap">
							    <ul class="card__meta">
							    	<li><span>Date de naissance :</span> <span>{{$personne->dateNaiss}}</span></li>
							    	<li><span>Sexe : </span>{{$personne->sexe}}</span></li>
                                    <li>
                                    <span>Films : </span>
									<ul>
										@foreach($films as $film)                                        
											<li>{{$film->titre}}</li>
										@endforeach	  
									</ul>
                                </li>
							    </ul>
						    </div>

                        </div> 
                    </div>       
					
                    </div>
                </div>
            </div>   

    <div class="offset col-xl-3"></div>        
            </div>
        </div>
    </div>
</section>

@endsection