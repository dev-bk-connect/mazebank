<?php // Fonctions PHP du site

function cheminpage($lien){
  $urlsite=$_SERVER['PHP_SELF'];
  $adresse=$urlsite."?go=".$lien;
  echo($adresse);
}

?>