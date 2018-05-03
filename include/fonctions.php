<?php // Fonctions PHP du site

function cheminpage($lien){
  if(isset($lien)){
    $urlsite=$_SERVER['PHP_SELF'];
    $adresse=$urlsite."?go=".$lien;
    echo($adresse);
  } else {
    echo "http://mazebank";
  }  
}

?>