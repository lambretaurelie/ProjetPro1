<!DOCTYPE html>
<html lang="fr">
    <?php
    require 'template/header.php';
    ?>
    <div class="container-fluid" id="connexion">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-5 col-lg-5 col-xl-5">
                    <form method="POST" action="connexion.php" class="form">
                        <fieldset>
                            <legend>Particulier</legend>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1>Super Rando          <img class="logoCenter" src="assets/images/logo1.png" alt="logo"> </h1>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Connexion</legend>
                                <p>
                                    <label for="identifiant"> Identifiant : </label><input type="text" placeholder="Identifiant" id="identifiant" name="identifiant" value="<?= isset($identifiant) ? $identifiant : '' ?>"/>
                                    <?= isset($formError['identifiant']) ? $formError['identifiant'] : '' ?> 
                                </p> 
                                <p>
                                    <label for="passeword">Mot de passe : </label><input type="text" placeholder="Mot de passe" id="passeword" name="passeword" value="<?= isset($passeword) ? $passeword : '' ?>"/>
                                    <?= isset($formError['passeword']) ? $formError['passeword'] : '' ?> 
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>Première connexion</legend>
                                <div>
                                    <a href="inscription.php"><input type="button" class="valid" value="Inscription" name="btn"/></a>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Validation</legend> 
                                <div>
                                    <div class="nav-item">
                                        <a class="nav-link disabled" data-toggle="modal" data-target="#modalValid"><input type="submit" class="valid" value="Valider" name="btn"/></a>
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                    </form>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-5 col-lg-5 col-xl-5">
                    <form method="POST" action="connexion.php" class="form">
                        <fieldset>
                            <legend>Professionnel</legend>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1>Super Rando          <img class="logoCenter" src="assets/images/logo1.png" alt="logo"> </h1>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Connexion</legend>
                                <p>
                                    <label for="identifiant"> Identifiant : </label><input type="text" placeholder="Identifiant" id="identifiant" name="identifiant" value="<?= isset($identifiant) ? $identifiant : '' ?>"/>
                                    <?= isset($formError['identifiant']) ? $formError['identifiant'] : '' ?> 
                                </p> 
                                <p>
                                    <label for="passeword">Mot de passe : </label><input type="text" placeholder="Mot de passe" id="passeword" name="passeword" value="<?= isset($passeword) ? $passeword : '' ?>"/>
                                    <?= isset($formError['passeword']) ? $formError['passeword'] : '' ?> 
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>Première connexion</legend>
                                <div>
                                    <a href="inscription.php"><input type="button" class="valid" value="Inscription" name="btn"/></a>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Validation</legend> 
                                <div>
                                    <div class="nav-item">
                                        <a class="nav-link disabled" data-toggle="modal" data-target="#modalValid"><input type="submit" class="valid" value="Valider" name="btn"/></a>
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'template/footer.php';
    ?>
</body>
</html>
