<?php
if (isset($_SESSION['auth']) && $_SESSION['auth']=='yes'){ // si l'utilisateur est connecté
    // inserer le code quand utilisateur connecté
    echo "connecté à l'accueil";
}
else if (isset($_POST['psn']) && isset($_POST['code1']) && isset($_POST['code2']) && isset($_POST['code3']) && isset($_POST['code4'])){
    $code = $_POST['code1'].$_POST['code2'].$_POST['code3'].$_POST['code4'];
    include('yop.php');
    $cxn = mysqli_connect($host, $user, $password, $database) or die ("Connexion impossible au serveur");
    $sql = "SELECT Psn FROM clients WHERE Psn='$_POST[psn]'";
    $result = mysqli_query($cxn, $sql) or die ("Requête Psn en échec");
    $num = mysqli_num_rows($result);
    if ($num > 0){
        $sql = "SELECT * FROM clients WHERE Psn='$_POST[psn]' AND Pin='$code'";
        $result2 = mysqli_query($cxn,$sql) or die ("Requête Psn AND Pin en échec");
        $num2 = mysqli_num_rows($result2);
        if ($num2 > 0){
            $row2 = mysqli_fetch_assoc($result2);
            extract($row2);
            $_SESSION['auth'] = "yes";
            $logpsn = $Psn;
            $_SESSION['psn'] = $logpsn;
            $_SESSION['nom'] = $Nom;
            $_SESSION['prenom'] = $Prenom;
            $_SESSION['solde'] = $Solde;
            $_SESSION['metier'] = $Metier;
            $today = date("Y-m-d H:i:s");
            $sql = "INSERT INTO login (Psn,DateConnexion) VALUES ('$logpsn','$today')";
            $result = mysqli_query($cxn,$sql) or die ("Requête INSERT dans login en échec");
            header("Location: http://mazebank/index.php?go=historique");
            mysqli_close($cxn);
        } else {
            echo "le login est bon mais pas le code.";
            header("Refresh: 3;url=http://mazebank/index.php?go=connect");
        }
    } elseif ($num == 0) {
        echo "le login n'existe pas.";
        header("Refresh: 3;url=http://mazebank/index.php?go=connect");
    }
}
?>



<?php /* if (isset($_POST['Psn'])){
    $_SESSION['Psn'] = $_POST['Psn']; 
    header("Refresh: 5;"); ?>
    <div class="container w-75 text-center border rounded border-danger">Bienvenue <?php echo $_SESSION['Psn']; ?>. Patientez le temps que notre secrétaire retrouve votre dossier et c'est parti !<br>
    <br>
    <img class="img-fluid rounded-circle" src="../img/5sec.gif" /><br><br></div>
<?php } else if (isset($_SESSION['Psn'])){ ?>
    <div class="media w-75 text-center border rounded border-danger m-1 mx-auto">
        <img class="img-fluid align-self-center rounded-circle m-3 d-none d-sm-block" src="../img/banquiere.jpg" width="64">
        <div class="media-body">
            <h5><br>Bonjour <?php echo $_SESSION['prenom']; ?>, je suis Catherine, votre banquière personnelle !<br></h5>
            <p>Comment puis-je vous servir ?</p>
        </div>
    </div>    
<?php } else {
    header("Refresh: 5;"); ?>
<div class="container w-75 text-center border rounded border-danger">Tu ne devrais pas voir cette page, espèce de non-connecté !</div>
<?php } */ ?>