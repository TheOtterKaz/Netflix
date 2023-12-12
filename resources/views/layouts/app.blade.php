<!DOCTYPE html>
<html lang="fr-ca" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/netflix.css')}}">
    <title>@yield('title')</title>
</head>
<body class="h-100">

        <dialog id="dialog" class="border border-1 border-black">
            <div class="row">
                <div class="offset col-4"></div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <h3 id="hTitre">Erreur(s)</h3>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <button class="btn btn-close "></button>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="containerErrors"></div>
            </div>
        </dialog>

    <script>
        var dialog = document.getElementById('dialog');

        function openDialog() {
            dialog.showModal();

            dialog.querySelector('.btn-close').addEventListener('click', function() {
                dialog.close();
            });
        }
        function closeDialog() {
            dialog.close();
            document.getElementById('containerErrors').innerHTML = "";
            sessionStorage.removeItem('message');
        }

    </script>

        
    @if(isset($errors) && count($errors) > 0)
        
        @foreach($errors->all() as $error)
            <script>
                document.getElementById('hTitre').innerHTML = "Erreur(s)";
                document.getElementById('containerErrors').innerHTML += "<p>{{$error}}</p>";
            </script>
        @endforeach
        <script>
            openDialog();
        </script>
    @elseif(isset($errors) && count($errors) <= 0)

        <script>
            closeDialog();
        </script>
    @endif

    @if(session()->has('message'))
        <script>
            document.getElementById('hTitre').innerHTML = "Succès";
            document.getElementById('containerErrors').innerHTML += "<p class=\"text-wrap\">{{ session()->get('message') }}</p>";
            openDialog();
        </script>
    @endif


  <div class="container-fluid h-100 w-100">

    @yield('contenu')

    <footer class="row d-flex align-items-center">
      <div class="col-12 d-flex align-items-center justify-content-center flex-column">
        <div id="boxLiens">
          <a href="{{ route('films.index')}}">Page Films</a>
          <p> - </p>
          <a href="{{ route('personnes.index')}}">Page Personnes</a>
        </div>
  
        <p>&copy 1987-2023 Netflix, Inc.</p>
        <p>Maé Grenier & Mathis Grondin, 2023</p>
      </div>
    </footer>

  </div>
    <!-- <header>
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
    </header> -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/jsCustom.js"></script>

</body>
</html>