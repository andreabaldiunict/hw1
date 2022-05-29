<?php
  session_start();

  if(isset($_SESSION['username'])) {
    header("Location: ../3-Home/Home.php");
  }
  
  if(!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['username'])
     && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['conferma_password']))
    {
      $errori = array();
      $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));

      if(!preg_match('/^[a-zA-Z0-9_]{1,8}$/', $_POST['username'])) {
        $errori[] = "Username inserito non valido!";
      } else {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $query = "SELECT username FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res) > 0) {
          $errori[] = "Username già usato, inserisci un altro username!";
        }
      }

      if(strlen($_POST['password']) < 8) {
        $errori[] = "Password troppo corta! (min 8 caratteri)";
      }

      if(strcmp($_POST['password'], $_POST['conferma_password']) != 0) {
        $errori[] = "Le password non sono uguali, riprova!";
      }

      if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errori[] = "Email non corretta!";
      } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $query = "SELECT email FROM users WHERE email = '$email'";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res) > 0) {
          $errori[] = "Email già usata";
        }
      }
      
      if(count($errori) == 0) {
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users(nome, cognome, username, email, password) VALUES('$nome', '$cognome', '$username', '$email', '$password')";
        if(mysqli_query($conn, $query)) {
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['user_id'] = mysqli_insert_id($conn);
          mysqli_close($conn);
          header("Location: ../3-Home/Home.php");
          exit;
        } else {
          $errori[] = "Errore nella connessione al database!";
        }
      } 
      mysqli_close($conn);
    }
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrati</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href= "../0-Shared/Standard-style.css" />
    <link rel='stylesheet' href='Sign_up.css'>
		<script src="../0-Shared/Standard-js.js" defer> </script>
    <script src='validationSignup.js' defer="true"></script>
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
					<a class="view" href="../6-Login-logout/Login.php">Login</a>
				</div>
			</nav>
    </header>

    <section class="signup_form">
      <div><img src="../Images/logo.svg" alt="">
      </div>
      <div id = 'credenziali'>
        <div id="formLogin">
          <form name="signup" method="post">
            <div class="nome" id="inputBox">
              <!--<div><label for='nome'>Nome</label></div>-->
              <div><input type='text' name='nome' placeholder = 'nome' class="textBox"  autocomplete="on"></div>
              <span></span>
            </div>

            <div class="cognome" id="inputBox">
              <!--<div><label for='cognome'>Cognome</label></div>-->
              <div><input type='text' name='cognome' placeholder = 'cognome' class="textBox"  autocomplete="on"></div>
              <span></span>
            </div>

            <div class="username" id="inputBox">
              <!--<div><label for='username'>Username</label></div>-->
              <div><input type='text' name='username' placeholder = 'username' class="textBox"  autocomplete="on"></div>
              <span></span>
            </div>

            <div class="email" id="inputBox">
              <!--<div><label for='email'>Email</label></div>-->
              <div><input type='text' name='email' placeholder = 'email' class="textBox"  autocomplete="on"></div>
              <span></span>
            </div>

            <div class="password" id="inputBox">
              <!--<div><label for='password'>Password</label></div>-->
              <div><input type='password' name='password' placeholder = 'password' class="textBox"  autocomplete="on"></div>
              <span></span>
            </div>

            <div class="conferma_password" id="inputBox">
              <!--<div><label for='conferma_password'>Conferma Password</label></div>-->
              <div><input type='password' name='conferma_password' placeholder = 'conferma password' class="textBox"  autocomplete="on"></div>
              <span></span>
            </div>

            <div class="register" id="inputBox">
              <input type='submit' id="submit" value="Registrati" class="view">
            </div>
          </form>
          <div id="containerShortcut">
            <p>Sei già registrato? Effetua la <a href="../6-Login-logout/Login.php">Login</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--FOOTER-->
    <footer>
      <div class="footer">
        <div class="row">
          <a href="#https://it-it.facebook.com/groups/523172937735959/"><i class="fa fa-facebook"></i></a>
          <a href="#https://www.instagram.com/ilpassaparoladeilibri/"><i class="fa fa-instagram"></i></a>
          <a href="#https://www.youtube.com/channel/UCVIFYM2KzpTu_40p9lIZ_UQ"><i class="fa fa-youtube"></i></a>
          <a href="#https://twitter.com/_un_libro_"><i class="fa fa-twitter"></i></a>
        </div>
    
        <div class="row">READBOOK Copyright © 2022 readbook - All rights reserved || Designed By: Andrea Baldi 
        </div>
      </div>
    </footer>
  </body>
</html>