@extends('layouts.app')

@section('title', 'Netflix - Accueil')

@section('contenu')

  <!-- <div class="row"> -->
    <!-- <div class="col-12"> -->
      <header class="row d-flex justify-content-evenly ">
        <div class="netflixLogo col-1 d-flex align-items-center justify-content-center p-0">
          <a id="logo" href="{{ route('films.index') }}"><img src="/img/logo.PNG" alt="Logo Image"></a>
        </div>      
        <nav class="main-nav d-flex align-items-center col-9 p-0 m-0">                
          <a href="#nouveautes" class="text-truncate d-block">Nouveautés</a>
          <a href="#animation" class="text-truncate d-block">Animation</a>
          <a href="#scifi" class="text-truncate d-block">Science-Fiction</a>
          <a href="#comedie" class="text-truncate d-block">Comédie</a>
          <a href="#action" class="text-truncate d-block">Action & Aventure</a>
          <a href="#thriller" class="text-truncate d-block">Thriller</a>        
          <a href="#fantasie" class="text-truncate d-block">Fantasie</a>        
          <a href="#drame" class="text-truncate d-block">Drame</a>        
          <a href="#plusPOP" class="text-truncate d-block">+ Populaires</a>        
          <a href="#moinsPOP" class="text-truncate d-block">- Populaires</a>        
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
        </nav>      
      </header>
    <!-- </div> -->
  <!-- </div> -->

  
  
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


          <h1 id="animation" class="fs-3  text-truncate d-block">Animation</h1>
          <div class="box">
                 @if(count($films))
                    @foreach($films as $film)
                      @if($film->type == 'Animation')
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


      <h1 id="scifi" class="fs-3 text-truncate d-block">Science-Fiction</h1>
      <div class="box">

                  @if(count($films))
                    @foreach($films as $film)
                      @if($film->type == 'Science-Fiction')
                        <a href="{{ route('films.show', [$film]) }}">
                          <div class="card border border-0 p-0 m-0 g-0">
                            <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                          </div>
                        </a>
                      @endif
                    @endforeach
                  @endif

      </div>

      <h1 id="comedie" class="fs-3 text-truncate d-block">Comédie</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Comédie')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>
      
      <h1 id="action" class="fs-3 text-truncate d-block">Films d'action et aventure</h1>
      <div class="box">
          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Action, Aventure')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif
      </div>

      <h1 id="thriller" class="fs-3 text-truncate d-block">Thriller</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Thriller')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>

      <h1 id="fantasie" class="fs-3 text-truncate d-block">Fantasie</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Fantasie')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>

      <h1 id="drame" class="fs-3 text-truncate d-block">Drame</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Drame')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>


      <h1 id="plusPOP" class="fs-3 text-truncate d-block">Plus populaires</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Drame')
                <a href="{{ route('films.show', [$film]) }}">
                  <div class="card border border-0 p-0 m-0 g-0">
                    <img src="{{$film->imageFilm}}" alt="" class=" g-0 border border-0 imgFilm card-img">
                  </div>
                </a>
              @endif
            @endforeach
          @endif

      </div>


      <h1 id="moinsPOP" class="fs-3 text-truncate d-block">Moins populaires</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Drame')
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
    <section class="link">
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
    </section>
    <!-- END OF LINKS -->

@endsection
