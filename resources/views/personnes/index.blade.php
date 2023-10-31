@extends('layouts.app')

@section('title', 'Page accueil Netflix')

@section('contenu')

    <header>
      <div class="netflixLogo">
        <a id="logo" href="{{ route('films.index') }}"><img src="/img/logo.PNG" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="#tous">Tous</a>
        <a href="#acteurs">Acteurs</a>
        <a href="#realisateurs">Réalisateurs</a>
        <a href="#producteurs">Producteurs</a>
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>        
      </nav>      
    </header>

    <section class="main-container" >
        <div class="location" id="home">
            
            <h1 id="tous">Tous</h1>
            <div class="box">
                @if(count($personnes))
                    @foreach($personnes as $personne)
                        <a href="" style="overflow-x: hidden;"><img src="{{$personne->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;"></a>
                    @endforeach
                @endif
            </div>

            <h1 id="acteurs">Acteurs</h1>
            <div class="box">
                @if(count($personnes))
                    @foreach($personnes as $personne)
                        @if($personne->rolePrinc == 'Acteur')
                            <a href=""><img src="{{$personne->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;"></a>
                        @endif
                    @endforeach
                @endif
            </div>

            <h1 id="realisateurs">Réalisateurs</h1>
            <div class="box">
                @if(count($realisateurs))
                    @foreach($realisateurs as $realisateur)
                        <a href=""><img src="{{$realisateur->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;"></a>
                    @endforeach
                @endif
            </div>

            <h1 id="producteurs">Producteurs</h1>
            <div class="box">
                    @if(count($producteurs))
                        @foreach($producteurs as $producteur)
                                <a href=""><img src="{{$producteur->imagePers}}" alt="" style="height:230px; width:205px; overflow-x: hidden;"></a>
                        @endforeach
                    @endif
            </div>
        </div>
    </section>

@endsection