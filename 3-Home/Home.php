<?php 
   require_once '../auth.php';
   if (!$userid=controllaAuth()) {
    header("Location: ../6-Login-logout/Login.php");
        exit;
    } 
?>

<html>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href= "../3-Home/Home.css" />
		<script src="../0-Shared/Standard-js.js" defer> </script>
    <script src="../3-Home/Home.js" defer> </script>
</head>
	
<body>
    <!--MENÙ READBOOK-->
    <header>
      <nav>
				<div id="menu">
					<a href="../1-Consigliati/Consigliati.php">Consigliati</a>
					<a href="../2-Store/Store.php">Store</a>
					<a class="menu_logo" href="../3-Home/Home.php" ><img src="../Images/logo_min.svg"></a>
					<a class="pref" href="../4-Preferiti/preferiti.php">Preferiti<img src="../Images/cuore.svg"></a>
					<a class="view" href="../6-Login-logout/Logout.php">Logout</a>
				</div>
			</nav>
    </header>

  <!--SECTION N. 1° FORMATA DA UNO SLIDESHOW (3 PAGINE SCORREVOLI)-->
  <section>
    <!--PAGINA N. 1°-->
    <div class="slide" id="s1">
      <div class="container">
        <div class="box">
          <h1>Scopri la collezione di libri piu diffusa al mondo.</h1>
          <a class="view" href="../2-Store/Store.php">Store</a>
        </div>
        <div class="box"><img src="../Images/logo.svg"></div>
      </div>
    </div>
    <!--PAGINA N. 2°-->
    <div class="slide" id="s2">
      <div class="container">
        <div class="box">
          <h1>20%</h1>
        </div>
        <div class="box"><h2>Iscriviti e ottieni uno sconto del 20% sul tuo primo ordine!</h1>
          <a class="view" href="../2-Store/Store.php">Store</a>
        </div>
      </div>
    </div>
    <!--PAGINA N. 3°-->
    <div class="slide" id="s3">
      <div class="container">
        <div class="box"><img src="../Images/slide_3.svg"></div>
        <div class="box">
          <h1>Lasciati trasportare dalla lettura e scopri nuovi mondi.</h1>
          <a class="view" href="../2-Store/Store.php">Store</a>
        </div>
      </div>
    </div>
    <!--FRECCE AVANTI E INDIETRO-->
    <a id="prev">&#10094;</a>
    <a id="next">&#10095;</a>
  <!--INDICATORE DELLA SLIDE CORRENTE-->
    <div class="cube-container">
      <span data-index="0" class="cube"></span>
      <span data-index="1" class="cube"></span>
      <span data-index="2" class="cube"></span>
      <div class="progress_bar"></div>
    </div>  
  </section>

  <!--SECTION N. 2° DESIGN AUTO-RESPONSIVE (PAROLE IN SCORRIMENTO)-->
  <section>
    <div class="img_libri"></div>
    <div class="left_scroll">
      <span class="pantone_1">Historical</span>  Autors   <span class="pantone_1">Inspiration</span>  Horror  <span class="pantone_1">Words</span>  Historical   <span class="pantone_1">Autors</span>  Inspiration  Horror  Words
    </div>
    <div class="right_scroll">
      Reading  <span class="pantone_2">Fantasy</span>  Writer  <span class="pantone_1">Paper</span>  Poet  <span class="pantone_2">Storyteller</span>  Reading  Fantasy  <span class="pantone_2">Writer</span>  Paper  Poet  Storyteller
    </div>
    <div class="img_libri"></div>
  </section>

  <!--SECTION N. 3° DESIGN CITAZIONE ISPIRAZIONE-->
  <section>
    <div class="container">
      <div class="box_left">
        <div id="box_11"></div>
        <div id="box_12"></div>
        <div id="box_21"></div>
        <div id="box_22"></div>
      </div>
      <div class="box_right">
        <h1>Lasciati ispirare da una citazione.</h1>
        <button class="view" id="search_1">Vai</button>
        <form class="apy_quotable">
          <div class="quotable_container">
            <img src="../Images/virgolette_sin.png" class="img_apy_quotable">
            <div id="container_1"></div>
            <img src="../Images/virgolette_des.png" class="img_apy_quotable">
          </div>
        </form>
      </div>
    </div>
  </section>

  <!--COOKIES-->
  <div class="cookie">
    <p>Utilizziamo i Cookies per migliorare la tua esperienza sul nostro sito web. musa.com</p>
    <button class="view" id="cookie-btn">I agree</button>
  </div>
  
  <!--FOOTER-->
  <footer>
    <div class="footer">
      <div class="row">
        <a><i class="fa fa-facebook"></i></a>
        <a><i class="fa fa-instagram"></i></a>
        <a><i class="fa fa-youtube"></i></a>
        <a><i class="fa fa-twitter"></i></a>
      </div>
    
      <div class="row">
      READBOOK Copyright © 2022 readbook - All rights reserved || Designed By: Andrea Baldi 
      </div>
    </div>
  </footer>

</body>
</html>

