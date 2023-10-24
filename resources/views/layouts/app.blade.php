<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/netflix.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="/img/logo.PNG" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="http://127.0.0.1:8000/films">Films</a>
        <a href="http://127.0.0.1:8000/personnes">Personnes</a>
        <a href="#movies">Movies</a>
        <a href="#originals">Originals</a>
        <a href="#recentlyAdded">Recently Added</a>
        <a href="#myList">My List</a>        
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>        
      </nav>      
    </header>

    @yield('contenu')

    <footer>
      <div id="boxLiens">
        <a href="http://127.0.0.1:8000/films">Page Films</a>
        <p> - </p>
        <a href="http://127.0.0.1:8000/personnes">Page Personnes</a>
      </div>

      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Maé Grenier & Mathis Grondin, 2023</p>
    </footer>
</body>
</html>