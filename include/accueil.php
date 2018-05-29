<?php
if (isset($_POST['psn'])){
    $_SESSION['psn'] = $_POST['psn']; 
    header("Refresh: 5;"); ?>
    <div class="container w-75 text-center border rounded border-danger">Bienvenue <?php echo $_SESSION['psn']; ?>. Patientez le temps que notre secrétaire retrouve votre dossier et c'est parti !<br>
    <br>
    <img class="img-fluid rounded-circle" src="../img/5sec.gif" /><br><br></div>
<?php } else if (isset($_SESSION['psn'])){ ?>
    <div class="media w-75 text-center border rounded border-danger m-1 mx-auto">
        <img class="img-fluid align-self-center rounded-circle m-3 d-none d-sm-block" src="../img/banquiere.jpg" width="64">
        <div class="media-body">
            <h5><br>Bonjour <?php echo $_SESSION['psn']; ?>, je suis Catherine, votre banquière personnelle !<br></h5>
            <p>Comment puis-je vous servir ?</p>
        </div>
    </div>    
    <p>Nous sommes le <?php echo date("Y-m-d H:i:s"); ?></p>
<?php } else {
    header("Refresh: 5;"); ?>
<div class="container w-75 text-center border rounded border-danger">Tu ne devrais pas voir cette page, espèce de non-connecté !</div>
<?php } ?>