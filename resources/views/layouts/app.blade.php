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

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

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
								<img src="/img/logo.svg" alt="FlixGo">
							</a>
  <!-- fin header - logo -->

  <!-- header nav -->
							<ul class="header__nav">

  <!-- Onglet films -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{ route('films.index') }}" role="button" id="dropdownMenuFilms">Films</a>

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

  <!-- Onglet Aide -->
								<li class="header__nav-item">
									<a href="" class="header__nav-link">Admin</a>
								</li>

							</ul>
  <!-- Fin header nav -->

  <!-- header Connexion -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Connexion</span>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

<!-- ¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤ A RENDRE UTILISABLE ¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤ -->
	<!-- header Recherche -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Recherche pour un film">

							<button type="button">Rechercher</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	<!-- Fin header Recherche -->

	</header>
	<!-- Fin du header -->

    @yield('contenu')

    <footer class="footer">
      <div class="container">
        <div class="row">

        <!-- application -->
        <div class="col-12 col-md-3">
					<h6 class="footer__title">Notre application</h6>
					<ul class="footer__app">
						<li><a href=""><img src="/img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
						<li><a href=""><img src="/img/google-play-badge.png" alt=""></a></li>
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
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>