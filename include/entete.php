<div class="container-fluid fondlogo"><a href="http://mazebank"><img class="img-fluid" src="img/logo-mazebank.png" width="438" height="88" alt="Maze Bank"></a></div>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background: linear-gradient(rgb(255, 0, 0), rgb(192, 0, 0));">
  <span class="navbar-brand"><?php if (isset($_SESSION['psn'])){ echo $_SESSION['psn'];} ?></span><span class="navbar-text navbar-center" style="color:white;margin-right:10px;"><?php if (isset($_SESSION['solde'])){ echo "&nbsp;Solde : ".$_SESSION['solde']."&nbsp;\$";} ?></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu1" aria-controls="navbarMenu1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarMenu1">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php cheminpage("virement"); ?>">Virement</a>
          <a class="dropdown-item" href="<?php cheminpage("declaration"); ?>">Déclaration</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php cheminpage("historique"); ?>">Historique</a>
      </li>
    </ul>
  </div>
</nav>
<hr />