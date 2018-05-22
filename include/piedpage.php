<nav class="navbar fixed-bottom navbar-expand-lg navbar-dark" style="background: linear-gradient(rgb(255, 0, 0), rgb(192, 0, 0));">
  <a class="navbar-brand" href="<?php if(isset($_SESSION['psn'])){ cheminpage("accueil");} else { cheminpage(null);}?>">Maze Bank</a><span class="navbar-text navbar-center">BK-Connect &copy; <?php echo date("Y"); ?></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu2" aria-controls="navbarMenu2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarMenu2">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://rlrp.commu.online" target="blank">Forum RLRP</a>
      </li>
    </ul>
  </div>
</nav>