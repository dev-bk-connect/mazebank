<?php
date_default_timezone_set("Europe/Paris"); // Définition du fuseau horaire.

session_start(); // Démarrage d'une session

include("include/fonctions.php");

if (isset($_GET['go'])){
    $page=$_GET['go'].".php"; // récupération de l'url modifiée
}
else {
  $page="connect.php";  // page par défault du site
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Maze Bank</title>
  </head>
  <body>
  <?php include("include/entete.php"); ?>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-8 fondblanc">
      <br>
        <?php include("include/".$page); ?>
      </div>
    </div>
  </div>
  <?php include("include/piedpage.php"); ?>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/fonctions.js"></script>
  </body>
</html>