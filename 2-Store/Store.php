<?php 
   require_once '../auth.php';
   if (!$userid=controllaAuth()) {
       header("Location: ../6-Login-logout/Login.php");
        exit;
    } 
?>

<html>
  <head>

    <?php 
      // Carico le informazioni dell'utente loggato per visualizzarle nella sidebar
      $conn = mysqli_connect($dbconfig['db_host'], $dbconfig['db_user'], $dbconfig['db_password'], $dbconfig['db_name']);
      $userid = mysqli_real_escape_string($conn, $userid);
      $query = "SELECT * FROM users WHERE id = $userid";
      $res_1 = mysqli_query($conn, $query);
      if(mysqli_num_rows($res_1) > 0 ){
        $userinfo = mysqli_fetch_assoc($res_1);
        $username = mysqli_real_escape_string($conn, $userinfo['username']);
      }
    ?>

    <meta charset="UTF-8">
    <title>Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href= "../0-Shared/Standard-style.css" />
		<link rel="stylesheet" href= "../2-Store/Store.css" />
		<script src="../2-Store/store.js" defer> </script>
    <script src="../0-Shared/Standard-js.js" defer> </script>
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

  <article>

    <section>
      <div>
        <div id="banner">
          <h1>Tuffati nella nostra raccolta!</h1>
        </div>
        <div id="responsive_box">
          <div class="grid-container">
            <div class="item1">
              <div class="container">
                <div class="box">
                  <h1>Visita la nostra HomePage!</h1>
                  <a class="view" href="../3-Home/Home.php">Home</a>
                </div>
                <div class="box"><img src="../Images/logo.svg"></div>
                </div>
              </div>
              <div class="item2">
                <div class="container">
                  <div class="box">
                  <h1>A portata di un click </h1>
                  </div>
                  <div class="box"><img src="../Images/response.svg"></div>
              </div>
            </div>
            <div class="item3">
              <div class="box">
                <img src="../Images/cuore.svg">
              </div>
            </div>  
          </div>
        </div>
      </div>
    </section>

    <section>
      <form id='cerca' method = 'GET'>
        <div class="play_book"><img src="../Images/playbook_logo.png"></div>
          <div class="container_1">
            <div id="input">
              <input type='text' id='name' class="view" placeholder="Cerca">
              <button type='submit' id='Login' class="view" onclick="">Search</button>
            </div>
          </div>
        </div>
      </form>
      <div id="book-list">
      </div>
    </section>

    <section id="box-book">
    </section>

    </article>

    <!--FOOTER-->
    <footer>
      <div class="footer">
        <div class="row">
          <a href="#https://it-it.facebook.com/groups/523172937735959/"><i class="fa fa-facebook"></i></a>
          <a href="#https://www.instagram.com/ilpassaparoladeilibri/"><i class="fa fa-instagram"></i></a>
          <a href="#https://www.youtube.com/channel/UCVIFYM2KzpTu_40p9lIZ_UQ"><i class="fa fa-youtube"></i></a>
          <a href="#https://twitter.com/_un_libro_"><i class="fa fa-twitter"></i></a>
        </div>
      
        <div class="row">
        READBOOK Copyright © 2022 readbook - All rights reserved || Designed By: Andrea Baldi 
        </div>
      </div>
    </footer>
  </body>
</html>