@extends('layouts.app')

@section('title', 'Netflix - Accueil')

@section('contenu')

  <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="/img/logo.PNG" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="#nouveautes">Nouveautés</a>
        <a href="#animation">Animation</a>
        <a href="#scifi">Science-Fiction</a>
        <a href="#comedie">Comédie</a>
        <a href="#action">Action & Aventure</a>
        <a href="#thriller">Thriller</a>        
        <a href="#fantasie">Fantasie</a>        
        <a href="#drame">Drame</a>        
        <a href="#plusPOP">+ Populaires</a>        
        <a href="#moinsPOP">- Populaires</a>        
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>        
      </nav>      
    </header>
  
    <!-- MAIN CONTAINER -->
 
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="nouveautes">Nouveautés</h1>
          <div class="box">
                 @if(count($films))
                    @foreach($films as $film)
                      @if($film->annee == '2023')
                        <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
                      @endif
                    @endforeach
                  @endif
          </div>
          <h1 id="animation">Films d'animation</h1>
          <div class="box">
                 @if(count($films))
                    @foreach($films as $film)
                      @if($film->type == 'Animation')
                        <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
                      @endif
                    @endforeach
                  @endif
          </div>
      </div>


      <h1 id="scifi">Films Science-Fiction</h1>
      <div class="box">

                  @if(count($films))
                    @foreach($films as $film)
                      @if($film->type == 'Science-Fiction')
                        <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
                      @endif
                    @endforeach
                  @endif

      </div>

      <h1 id="comedie">Films de comédie</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Comédie')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
              @endif
            @endforeach
          @endif

      </div>
      
      <h1 id="action">Films d'action et aventure</h1>
      <div class="box">
          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Action, Aventure')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
              @endif
            @endforeach
          @endif
      </div>

      <h1 id="thriller">Thriller</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Thriller')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
              @endif
            @endforeach
          @endif

      </div>

      <h1 id="fantasie">Fantasie</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Fantasie')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
              @endif
            @endforeach
          @endif

      </div>

      <h1 id="drame">Drame</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Drame')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
              @endif
            @endforeach
          @endif

      </div>
      <h1 id="plusPOP">Plus populaires</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Drame')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
              @endif
            @endforeach
          @endif

      </div>
      <h1 id="moinsPOP">Moins populaires</h1>
      <div class="box">

          @if(count($films))
            @foreach($films as $film)
              @if($film->type == 'Drame')
                <a href=""><img src="{{$film->imageFilm}}" alt=""></a>
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
