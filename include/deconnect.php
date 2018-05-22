<?php
if (isset($_SESSION['psn'])){
    $psn = $_SESSION['psn'];
    session_destroy();
    header("Refresh: 5;URL=http://mazebank");
    echo "<div class=\"container w-75 text-center border rounded border-danger\"><br>Au revoir ".$psn.", et à bientôt.<br><br>";
} else {
    header("Refresh: 5;URL=http://mazebank");
    echo "<div class=\"container w-75 text-center border rounded border-danger\"><br>Vous ne devriez pas avoir accès à cette page<br><br>";
}
?>
<a class="btn btn-danger" href="<?php cheminpage(null); ?>" role="button">Retour à l'accueil</a><br>
<br>
</div>