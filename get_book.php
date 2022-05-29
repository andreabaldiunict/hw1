<?php /*
require_once 'auth.php';
if (!$userid=controllaAuth()) {
    header("Location: login.php");
     exit;
}

header('Content-Type: application/json');

$conn = mysqli_connect($dbconfig['db_host'], $dbconfig['db_user'], $dbconfig['db_password'], $dbconfig['db_name']);
$userid = $_SESSION['u_user_id'];

$book= $_GET['book'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,"https://www.googleapis.com/books/v1/volumes?q=".$book);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
$json1 = json_decode($result, true);
curl_close($curl);


for($i=0;$i < count($json1['totalItems']);$i++) {
    $id = $json1['items'][$i]['id'];

    $query = "SELECT * FROM preferiti where userid = $userid AND id = '$id'";
    $res2 = mysqli_query($conn, $query);

    if(mysqli_num_rows($res2) > 0) {
      $p = true;
    } else {
      $p = false;
    }

    $titolo = $json1['items'][$i]['volumeInfo']['title'];
    $autore = $json1['items'][$i]['volumeInfo']['authors']['0'];
    $book_img = $json1['items'][$i]['volumeInfo']['imageLinks']['smallThumbnail'];
    
    $tracce[] = array("titolo" => $titolo, "autore" => $autore, "img" => $book_img, "id" => $id, "preferito" => $p);
  }
  
  $jsonfinale = array("items" => $tracce, "next" => [$i + 1], "previous" => [$i - 1]);
  echo json_encode($jsonfinale);

  */



$book= $_GET['book'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,
"https://www.googleapis.com/books/v1/volumes?q=".$book
);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);


echo($result);

?>