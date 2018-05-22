<div class="container-fluid fondlogo"><a href="<?php if(isset($_SESSION['psn'])){ cheminpage("accueil");} else { cheminpage(null);}?>"><img class="img-fluid" src="img/logo-mazebank.png" width="438" height="88" alt="Maze Bank"></a></div>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background: linear-gradient(rgb(255, 0, 0), rgb(192, 0, 0));">
  <?php
  if ($page != "deconnect.php"){
    if (isset($_SESSION['psn'])){ ?>
      <a class="navbar-brand" href="<?php cheminpage("accueil"); ?>"><?php echo $_SESSION['psn']; ?></a>
      <?php } 
    if (isset($_SESSION['solde'])){ echo "<span class=\"navbar-text navbar-center\" style=\"color:white;margin-right:10px;\">&nbsp;Solde : ".$_SESSION['solde']."&nbsp;\$</span>";}
  }
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu1" aria-controls="navbarMenu1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarMenu1">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php cheminpage("historique"); ?>">Historique</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php cheminpage("virement"); ?>">Virement</a>
          <a class="dropdown-item" href="<?php cheminpage("salaire"); ?>">Salaire</a>
        </div>
      </li>
      <?php if ($page != "deconnect.php"){
        if (isset($_SESSION['psn'])){
          echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
          cheminpage("deconnect");
          echo "\">Déconnexion</a></li>";
        }
      } ?>
    </ul>
  </div>
</nav>
<hr />