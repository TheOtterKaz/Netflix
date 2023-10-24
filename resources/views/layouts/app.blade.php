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
        <a href="#home">Home</a>
        <a href="#tvShows">TV Shows</a>
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
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Maé Grenier & Mathis Grondin, 2023</p>
    </footer>
</body>
</html>