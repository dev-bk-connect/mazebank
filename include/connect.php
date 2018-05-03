<?php
if (isset($_POST['psn'])){
    $_SESSION['psn'] = $_POST['psn']; ?>
connecté
<?php } else { ?>
<div class="container w-75 text-center border rounded border-danger">
<form method="post" action="<?php cheminpage("connect"); ?>" name="connexion">
<p><div class="form-row justify-content-center">
    <div class="col-auto">
        <label for="Identifiant">Identifiant</label>
        <input type="text" name="psn" class="form-control input-lg text-center border border-danger" placeholder="ID PSN" id="psn" required>
    </div>
</div></p>
<p><div class="form-row justify-content-center">
    <div class="col-auto">
        <input type="password" name="code1" class="form-control input-lg text-center border border-danger" maxlength="1" size="1" placeholder="c" id="code1" onKeyUp="suivant(this,'#code2', 1)" required>
    </div>
    <div class="col-auto">
        <input type="password" name="code2" class="form-control input-lg text-center border border-danger" maxlength="1" size="1" placeholder="o" id="code2" onKeyUp="suivant(this,'#code3', 1)" required>
    </div>
    <div class="col-auto">
        <input type="password" name="code3" class="form-control input-lg text-center border border-danger" maxlength="1" size="1" placeholder="d" id="code3" onKeyUp="suivant(this,'#code4', 1)" required>
    </div>
    <div class="col-auto">
        <input type="password" name="code4" class="form-control input-lg text-center border border-danger" maxlength="1" size="1" placeholder="e" id="code4" required>
    </div>
</div></p>
<p>Veuillez entrer votre identifiant ainsi que votre code pour vous connecter.</p>
<p><button type="submit" class="btn btn-danger">connexion</button></p>
</form></div>
<?php } ?>