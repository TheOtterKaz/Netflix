@extends('layouts.app')

@section('title', 'Page accueil Netflix')

@section('contenu')
<header class="row d-flex fixed-top justify-content-evenly ">

    <div class="netflixLogo col-1 d-flex align-items-center justify-content-center p-0">
        <a id="logo" href="{{ route('films.index') }}">
            <img src="/img/logo.PNG" alt="Logo Image">
        </a>
    </div>      

    <nav class="main-nav d-flex align-items-center col-9 p-0 m-0">                
        <a href="#tous">Tous</a>
        <a href="#acteurs">Acteurs</a>
        <a href="#realisateurs">Réalisateurs</a>
        <a href="#producteurs">Producteurs</a>
    </nav>

    <nav class="sub-nav col-1 d-flex align-items-center justify-content-evenly flex-row p-0 m-0">

        <a href="#" class="d-flex align-items-center">
            <span class="material-symbols-outlined">
                search
            </span>
        </a>

        <a href="#" class="d-flex align-items-center">
            <span class="material-symbols-outlined">
                circle_notifications
            </span>
        </a>

        <a href="#" class="d-flex align-items-center"> 
            <span class="material-symbols-outlined">
                account_circle 
            </span> 
        </a>

        <a href="{{route('personnes.create')}}" class="d-flex align-items-center"> 
            <span class="material-symbols-outlined">
                add
            </span> 
        </a>        

    </nav>      
</header>

<section class="main-container" >
    <div class="location" id="home">
            
        <h1 id="tous">Tous</h1>
        <div class="box">
            @if(count($personnes))
                @foreach($personnes as $personne)
                    <a href="" style="overflow-x: hidden;">
                        <img src="{{$personne->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;">
                    </a>
                @endforeach
            @endif
        </div>

        <h1 id="acteurs">Acteurs</h1>
        <div class="box">
            @if(count($personnes))
                @foreach($personnes as $personne)
                    @if($personne->rolePrinc == 'Acteur')
                        <a href="">
                            <img src="{{$personne->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;">
                        </a>
                    @endif
                @endforeach
            @endif
        </div>

        <h1 id="realisateurs">Réalisateurs</h1>
        <div class="box">
            @if(count($realisateurs))
                @foreach($realisateurs as $realisateur)
                    <a href="">
                        <img src="{{$realisateur->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;">
                    </a>
                @endforeach
            @endif
        </div>

        <h1 id="producteurs">Producteurs</h1>
        <div class="box">
            @if(count($producteurs))
                @foreach($producteurs as $producteur)
                    <a href="">
                        <img src="{{$producteur->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;">
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</section>

@endsection