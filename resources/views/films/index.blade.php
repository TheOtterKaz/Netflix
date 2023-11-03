@extends('layouts.app')

@section('title', 'Netflix - Accueil')

@section('contenu')

    <header class="row d-flex justify-content-evenly ">

        <div class="netflixLogo col-1 d-flex align-items-center justify-content-center p-0">
            <a id="logo" href="{{ route('films.index') }}">
                <img src="/img/logo.PNG" alt="Logo Image">
            </a>
        </div>   

        <nav class="main-nav d-flex align-items-center col-9 p-0 m-0">                
            <a href="#nouveautes"   class="text-truncate d-block">Nouveautés</a>
            <a href="#gardiens"    class="text-truncate d-block">Les Gardiens de la galaxie</a>
            <a href="#thor"        class="text-truncate d-block">Thor</a>
            <a href="#avengers"      class="text-truncate d-block">Avengers</a>
            <a href="#ironman"       class="text-truncate d-block">Ironman</a>
            <a href="#captame"     class="text-truncate d-block">Capitaine America</a>        
            <a href="#spiderman"     class="text-truncate d-block">Spiderman</a>               
            <a href="#antman"     class="text-truncate d-block">Ant-man</a>        
            <a href="#docstrange"     class="text-truncate d-block">Doctor Strange</a>        
            <a href="#blackpanth"        class="text-truncate d-block">Black Panther</a>        
            <a href="#autre"     class="text-truncate d-block">Autres</a>        
        </nav>

        <nav class="sub-nav col-1 d-flex align-items-center justify-content-evenly flex-row p-0 m-0">

        <a href="{{route('films.create')}}" class="d-flex align-items-center">
            <span class="material-symbols-outlined">
                add
            </span>
</a>  

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

        </nav>      
    </header>

  
  
    <!-- MAIN CONTAINER -->
 
    <section class="main-container" >
        <div class="location" id="home">
            <h1 id="nouveautes" class="fs-3  text-truncate d-block">Nouveautés</h1>
            <div class="box">
                @if(count($films))
                    @foreach($films as $film)
                        @if($film->annee == '2023')
                            <a href="{{ route('films.show', [$film]) }}">
                                <div class="card border border-0 p-0 m-0 g-0">
                                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>


        <!-- gardiens de la galaxie -->
            <h1 id="gardiens" class="fs-3  text-truncate d-block">Les Gardiens de la galaxie</h1>
            <div class="box">
                @if(count($films))
                    @foreach($films as $film)
                        @if($film->collection == 'Gardiens de la galaxie')
                            <a href="{{ route('films.show', [$film]) }}">
                                <div class="card border border-0 p-0 m-0 g-0">
                                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>

        <!-- thor -->
            <h1 id="thor" class="fs-3 text-truncate d-block">Thor</h1>
            <div class="box">
                @if(count($films))
                    @foreach($films as $film)
                        @if($film->collection == 'Thor')
                            <a href="{{ route('films.show', [$film]) }}">
                                <div class="card border border-0 p-0 m-0 g-0">
                                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>

        <!-- avengers -->
            <h1 id="avengers" class="fs-3 text-truncate d-block">Avengers</h1>
            <div class="box">
                @if(count($films))
                    @foreach($films as $film)
                        @if($film->collection == 'Avengers')
                            <a href="{{ route('films.show', [$film]) }}">
                                <div class="card border border-0 p-0 m-0 g-0">
                                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>    

        <!-- ironman -->
            <h1 id="ironman" class="fs-3 text-truncate d-block">Ironman</h1>
            <div class="box">
                @if(count($films))
                    @foreach($films as $film)
                        @if($film->collection == 'Ironman')
                            <a href="{{ route('films.show', [$film]) }}">
                                <div class="card border border-0 p-0 m-0 g-0">
                                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
            
        <!-- capitaine america -->
            <h1 id="captame" class="fs-3 text-truncate d-block">Capitaine America</h1>
            <div class="box">
                @if(count($films))
                    @foreach($films as $film)
                        @if($film->collection == 'Capitaine America')
                            <a href="{{ route('films.show', [$film]) }}">
                                <div class="card border border-0 p-0 m-0 g-0">
                                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                                </div>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>

      </div>   

    <!-- spiderman -->
      <h1 id="spiderman" class="fs-3 text-truncate d-block">Spiderman</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->collection == 'Spiderman')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>

    <!-- antman -->
      <h1 id="antman" class="fs-3 text-truncate d-block">Ant-man</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->collection == 'Ant-man')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>

    <!-- doctor strange -->
      <h1 id="docstrange" class="fs-3 text-truncate d-block">Doctor Strange</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->collection == 'Doctor Strange')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>

    <!-- black panther -->
      <h1 id="blackpanth" class="fs-3 text-truncate d-block">Black Panther</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->collection == 'Black Panther')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>

    <!-- autre -->
      <h1 id="autre" class="fs-3 text-truncate d-block">Autres</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->collection == 'Autre')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>


    </section>
      
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <!-- <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section> -->
    <!-- END OF LINKS -->

@endsection
