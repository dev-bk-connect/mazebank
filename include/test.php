<?php
include("yop.php");

$cxn = mysqli_connect($host, $user, $password, $database) or die ("Connexion impossible au serveur");

$sql = "SELECT * FROM clients WHERE Psn='{$_SESSION['Psn']}'";

$result = mysqli_query($cxn, $sql) or die ("Requête nom et prénom en échec");
$row = mysqli_fetch_assoc($result);
extract($row);
$_SESSION['solde'] = $Solde;
$_SESSION['nom'] = $Nom;
$_SESSION['prenom'] = $Prenom;
$_SESSION['metier'] = $Metier;
echo "Tu t'appelle $Prenom $Nom, et tu possède $Solde $, tu es $Metier.<br><br>";

$sql = "SELECT * FROM metiers WHERE Metier='$Metier'";
$result = mysqli_query($cxn, $sql) or die ("Requête metier en échec");
$row = mysqli_fetch_assoc($result);
extract($row);
$_SESSION['salaire'] = $Salaire;
echo "Ton métier de $Metier te rapporte un salaire de $Salaire $/session.";

mysqli_close($cxn);
?>