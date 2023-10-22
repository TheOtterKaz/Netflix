@extends('layouts.app')

@section('title', 'Netflix - Accueil')

@section('contenu')
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Popular on Netflix</h1>
          <div class="box">
            <a href=""><img src="img/p1.png" alt=""></a>
            <a href=""><img src="img/p2.png" alt=""></a>
            <a href=""><img src="img/p3.png" alt=""></a>
            <a href=""><img src="img/p4.png" alt=""></a>
            <a href=""><img src="img/p5.png" alt=""></a>
            <a href=""><img src="img/p6.png" alt=""></a>
    
            <a href=""><img src="img/p7.PNG" alt=""></a>
            <a href=""><img src="img/p8.PNG" alt=""></a>
            <a href=""><img src="img/p9.PNG" alt=""></a>
            <a href=""><img src="img/p10.PNG" alt=""></a>
            <a href=""><img src="img/p11.PNG" alt=""></a>
            <a href=""><img src="img/p12.PNG" alt=""></a>        
          </div>
      </div>
      

      <h1 id="myList">Trending Now</h1>
      <div class="box">
        <a href=""><img src="img/t1.PNG" alt=""></a>
        <a href=""><img src="img/t2.PNG" alt=""></a>
        <a href=""><img src="img/t3.PNG" alt=""></a>
        <a href=""><img src="img/t4.PNG" alt=""></a>
        <a href=""><img src="img/t5.PNG" alt=""></a>
        <a href=""><img src="img/t6.PNG" alt=""></a>                  
      </div>
      
      <h1 id="tvShows">TV Shows</h1>
      <div class="box">
        <a href=""><img src="img/tv1.PNG" alt=""></a>
        <a href=""><img src="img/tv2.PNG" alt=""></a>
        <a href=""><img src="img/tv3.PNG" alt=""></a>
        <a href=""><img src="img/tv4.PNG" alt=""></a>
        <a href=""><img src="img/tv5.PNG" alt=""></a>
        <a href=""><img src="img/tv6.PNG" alt=""></a>

        <a href=""><img src="img/tv7.PNG" alt=""></a>
        <a href=""><img src="img/tv8.PNG" alt=""></a>
        <a href=""><img src="img/tv9.PNG" alt=""></a>
        <a href=""><img src="img/tv10.PNG" alt=""></a>
        <a href=""><img src="img/tv11.PNG" alt=""></a>
        <a href=""><img src="img/tv12.PNG" alt=""></a>              
      </div>
      

      <h1 id="movies">Blockbuster Action & Adventure</h1>
      <div class="box">
        <a href=""><img src="img/m1.PNG" alt=""></a>
        <a href=""><img src="img/m2.PNG" alt=""></a>
        <a href=""><img src="img/m3.PNG" alt=""></a>
        <a href=""><img src="img/m4.PNG" alt=""></a>
        <a href=""><img src="img/m5.PNG" alt=""></a>
        <a href=""><img src="img/m6.PNG" alt=""></a>                
      </div>

      <h1 id="originals">Netflix Originals</h1>
      <div class="box">
        <a href=""><img src="img/o1.PNG" alt=""></a>
        <a href=""><img src="img/o2.PNG" alt=""></a>
        <a href=""><img src="img/o3.PNG" alt=""></a>
        <a href=""><img src="img/o4.PNG" alt=""></a>
        <a href=""><img src="img/o5.PNG" alt=""></a>
        <a href=""><img src="img/o6.PNG" alt=""></a>                
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
