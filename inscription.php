<!DOCTYPE html>
<html lang="fr">
    <?php
    require 'template/header.php';
    ?>
    <div class="container-fluid" id="Inscription">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-5 col-lg-5 col-xl-5">
                    <form method="POST" action="inscription.php" class="form">
                        <fieldset>
                            <legend>Particulier</legend>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1>Super Rando          <img class="logoCenter" src="assets/images/logo1.png" alt="logo"> </h1>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Créer un compte</legend>
                                 <div>
                                     <a href="formulaire.php"><input type="button" class="valid" value="Inscription" name="btn"/></a>
                                </div>
                            </fieldset>
                        </fieldset>
                    </form>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-5 col-lg-5 col-xl-5">
                    <form method="POST" action="inscription.php" class="form">
                        <fieldset>
                            <legend>Professionnel</legend>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1>Super Rando          <img class="logoCenter" src="assets/images/logo1.png" alt="logo"> </h1>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Créer un compte</legend>
                                <div>
                                    <a href="formulairePro.php"><input type="button" class="valid" value="Inscription" name="btn"/></a>
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




