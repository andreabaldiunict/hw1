<?php
include '../auth.php';
if (controllaAuth()) {
    header("Location: ../3-Home/Home.php");
    exit;
}   
 
if (!empty($_POST["username"]) && !empty($_POST["password"]) )
{

    $conn = mysqli_connect($dbconfig['db_host'], $dbconfig['db_user'], $dbconfig['db_password'], $dbconfig['db_name']) or die(mysqli_error($conn));
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT id, username, password FROM users WHERE username = '$username'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));;
    if (mysqli_num_rows($res) > 0) {
        $entry = mysqli_fetch_assoc($res);
        
        if (password_verify($password, $entry['password'])) {
            $_SESSION["u_username"] = $entry['username'];
            $_SESSION["u_user_id"] = $entry['id'];
            header("Location: ../3-Home/Home.php");
            mysqli_free_result($res);
            mysqli_close($conn);
            exit;
        }
    }
    $error = "Username e/o password errati.";
}
else if (isset($_POST["username"]) || isset($_POST["password"])) {
    $error = "Inserisci username e password.";
}

?>

<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href= "../0-Shared/Standard-style.css" />
		<link rel="stylesheet" href= "../6-Login-logout/Log-in-sin.css" />
		<script src="../0-Shared/Standard-js.js" defer> </script>
		<script src="../6-Login-logout/validazione-login.js" defer="true"> </script>
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

        <section>
            <div><img src="../Images/logo.svg" alt="">
            </div>
            <div id = 'credenziali'>
                <div id="formLogin">
                    <form name='login' method='post'>

                        <div class="inputBox">
                            <input type='text' placeholder = 'Username' name='username' class="textBox" autocomplete="on">
                        </div>

                        <div class="inputBox">
                            <input type='password' placeholder = 'Passowrd' name='password' class="textBox" autocomplete="on">
                        </div>

                        <div class="submit">
                            <input type="submit" name='invio' value="Accedi" id="Login" class="view">
                        </div>
                    
                        <?php
                        if(isset($errore))  {
                            echo "<p class='errore'>";
                            echo "Credenziali non valide.";
                            echo "</p>";
                        }
                        ?> 
                        <div id="containerShortcut">
                            <p>Non sei Registrato? <a href="../5-Registrati/Sign_up.php">Registrati </a>
                            </p>
                        </div>
                    </form>
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
