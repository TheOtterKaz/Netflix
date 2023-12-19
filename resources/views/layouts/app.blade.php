<!DOCTYPE html>
<html lang="fr-ca">

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset('css/default-skin.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('icon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('icon/favicon-32x32.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-touch-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-touch-icon-144x144.png') }}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>FlixGo</title>
</head>

<body class="body">
  <!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">

  <!-- header - logo -->
							<a href="{{ route('films.index') }}" class="header__logo"> 
								<img src="{{ asset('img/logo.svg') }}" alt="FlixGo">
							</a>
  <!-- fin header - logo -->

  <!-- header nav -->
							<ul class="header__nav">
@role('Admin')
	<!-- Onglet Admin -->
							  <li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
										<li><a href="{{ route('admin.listeFilms') }}">Liste Films</a></li>
										<li><a href="{{ route('admin.listePers') }}">Liste Personnes</a></li>
										<li><a href="{{ route('admin.listeUsagers') }}">Liste Usagers</a></li>
									</ul>
								</li>
@endrole
  <!-- Onglet films -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{ route('films.index') }}" role="button" id="dropdownMenuFilms">Films</a>
								</li>	
  <!-- Onglet personnes -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{ route('personnes.index') }}" role="button" id="dropdownMenuPers">Personnes</a>
								</li>

  <!-- Onglet des prix -->
								<li class="header__nav-item">
									<a href="{{ route('prix.index') }}" class="header__nav-link">Prix</a>
								</li>

  <!-- Onglet Aide -->
								<li class="header__nav-item">
									<a href="{{ route('aide.index') }}" class="header__nav-link">Aide</a>
								</li>
							</ul>
  <!-- Fin header nav -->

  <!-- header Connexion -->
							<div class="header__auth">
								<a href="{{ route('login') }}" class="header__sign-in" title="Connexion">		
									<img src="{{ asset('img/connexion.png') }}" alt="Connexion" style="height: 30px;">																
								</a>

							@auth
								<form method="post" action="{{ route('logout') }}">
									@csrf
									<button type="submit" class="header__sign-in" title="Déconnexion"><img src="{{ asset('img/deconnexion.png') }}" alt="Connexion" style="height: 30px;"></button>
								</form>
							@endauth							
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">

						</div>
					</div>
				</div>
			</div>
		</form>
	<!-- Fin header Recherche -->

	</header>
	<!-- Fin du header -->

	<!-- Permet d'afficher les erreurs dans le formulaire -->
	<!-- @if(isset($errors) && $errors->any())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<h1>{{ $error }}</h1>
			@endforeach
		</div>
	@endif -->

	<dialog id="dialog" class="card__alert" style="display: none;">
		<div style="display:flex; width:100%; height: 5%; justify-content : end; background: none; ">
				<button id="btnClose">
					<span class="material-symbols-outlined"> close </span>
				</button>
			</div>
		</div>
			<h3 id="hTitre">Erreur (s)</h3>
			<div id="containerErrors"></div>
    </dialog>

	<script>
		document.getElementById('btnClose').addEventListener('click', function() {
			document.getElementById('dialog').close();
			document.getElementById('dialog').style.display = "none";
			document.getElementById('dialog').style.visibility = "hidden";
			document.getElementById('containerErrors').innerHTML = "";
			sessionStorage.removeItem('message');
		});
	</script>
    @if(isset($errors) && count($errors) > 0)
        
        @foreach($errors->all() as $error)
            <script>
                document.getElementById('hTitre').innerHTML = "Erreur(s)";
                document.getElementById('containerErrors').innerHTML += "<p>{{$error}}</p>";
            </script>
        @endforeach
        <script>
			document.getElementById('dialog').style.display = "block";
            document.getElementById('dialog').style.visibility = "visible";
			document.getElementById('dialog').showModal();
        </script>
    @elseif(isset($errors) && count($errors) <= 0)
        <script>
			document.getElementById('dialog').close();
			document.getElementById('dialog').style.display = "none";
			document.getElementById('dialog').style.visibility = "hidden";
			document.getElementById('containerErrors').innerHTML = "";
			sessionStorage.removeItem('message');
			// closeDialog();
        </script>
    @endif

    @if(session()->has('message'))
        <script>
			document.getElementById('dialog').style.display = "block";
			document.getElementById('dialog').style.visibility = "visible";
			document.getElementById('dialog').showModal();
            document.getElementById('hTitre').innerHTML = "Succès";
            document.getElementById('containerErrors').innerHTML += "<p class=\"text-wrap\">{{ session()->get('message') }}</p>";
            // openDialog();
        </script>
    @endif

	@if(!isset($errors) && !session()->has('message'))
		<script>
			document.getElementById('dialog').close();
			document.getElementById('dialog').style.display = "none";
			document.getElementById('dialog').style.visibility = "hidden";
			document.getElementById('containerErrors').innerHTML = "";
			sessionStorage.removeItem('message');
			// closeDialog();
		</script>
	@endif

    @yield('contenu')

    <footer class="footer">
      <div class="container">
        <div class="row">

        <!-- application -->
        <div class="col-12 col-md-3">
					<h6 class="footer__title">Notre application</h6>
					<ul class="footer__app">
						<li><a href=""><img src="{{ asset('img/Download_on_the_App_Store_Badge.svg') }}" alt=""></a></li>
						<li><a href=""><img src="{{ asset('img/google-play-badge.png') }}" alt=""></a></li>
					</ul>
				</div>

        <!-- ressources -->
        <div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Ressources</h6>
					<ul class="footer__list">
						<li><a href="{{ route('prix.index') }}">Prix</a></li>
						<li><a href="{{ route('aide.index') }}">Aide</a></li>
					</ul>
				</div>

        <!-- termes et conditions -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Droits</h6>
					<ul class="footer__list">
						<li><a href="#">Termes et conditions</a></li>
						<li><a href="#">Confidentialité</a></li>
						<li><a href="#">Sécurité</a></li>
					</ul>
				</div>

        <!-- contact -->
        <div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contacts</h6>
					<ul class="footer__list">
						<li><a href="">1-800-123-5678</a></li>
						<li><a href="">support@flixgo.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>

        <!-- droits d'auteur -->
        <div class="col-12">
					<div class="footer__copyright">			
            <small>Maé Grenier & Mathis Grondin &copy 2023</small>			
					</div>
				</div>

        </div>  
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src=" {{ asset('js/jquery-3.3.1.min.js') }} "></script>
	<script src=" {{ asset('js/bootstrap.bundle.min.js') }} "></script>
	<script src=" {{ asset('js/owl.carousel.min.js') }}"></script>
	<script src=" {{ asset('js/jquery.mousewheel.min.js') }} "></script>
	<script src=" {{ asset('js/jquery.mCustomScrollbar.min.js') }} "></script>
	<script src=" {{ asset('js/wNumb.js') }} "></script>
	<script src=" {{ asset('js/nouislider.min.js') }} "></script>
	<script src=" {{ asset('js/plyr.min.js') }} "></script>
	<script src=" {{ asset('js/jquery.morelines.min.js') }} "></script>
	<script src=" {{ asset('js/photoswipe.min.js') }} "></script>
	<script src=" {{ asset('js/photoswipe-ui-default.min.js') }} "></script>
	<script src=" {{ asset('js/main.js') }} "></script>
	<script src=" {{ asset('js/jsCustom.js') }} "></script>
</body>
</html>