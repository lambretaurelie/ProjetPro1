<!DOCTYPE html>
<html lang="fr">
    <?php
    require 'template/header.php';
    ?>
    <div class="container-fluid" id="reserves">
        <div class="backgroundContact">
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="container-fluid d-flex">
                    <div class="col-xs-0 col-md-1 col-sm-1 col-lg-1 col-xl-1">
                        <div class="row">
                            <!--sidebar début-->
                            <div id="sidebar" class="active">
                                <!-- Page Content Holder -->
                                <span id="sidebarCollapse" role="button" class="buttonSidebarDL" aria-expanded="false"></span>
                                <div class="sidebar-header">
                                    <h3 class="sidebarTitle">Super Rando</h3>
                                    <strong>Super Rando</strong>
                                </div>
                                <ul class="list-unstyled components">
                                    <li class="fas fa-home" id="pageSubmenu">
                                    <li><a href="accueil.php">Accueil</a></li>
                                    </li>
                                    <li>
                                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                                            <i class="fas fa-copy"></i>
                                            Les Réserves
                                        </a>
                                        <ul class="collapse list-unstyled" id="homeSubmenu">
                                            <li><a href="listeFrance.php">Les Réserves en France</a></li>
                                            <li><a href="listeRegion.php">Liste des Réserve par Région</a></li>
                                            <li><a href="listeReserve.php">Liste des Réserves</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                                            <i class="fas fa-copy"></i>
                                            Connexion
                                        </a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu">
                                            <li><a href="connexion.php">Particulier</a></li>
                                            <li><a href="connexion.php">Professionnel</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                                            <i class="fas fa-copy"></i>
                                            Inscription
                                        </a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu">
                                            <li><a href="inscription.php">Particulier</a></li>
                                            <li><a href="inscription.php">Professionnel</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false">
                                            <i class="fas fa-file-signature"></i>
                                            Contact
                                        </a>
                                        <ul class="collapse list-unstyled" id="homeSubmenu1">
                                            <li>Tel : 0323456789</li>
                                            <li>Mail : contact@super-rando.fr </li>
                                            <li>Adresse : 10 rue du paradis
                                                02123 jycrois</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--fin de la sidebar-->
                    <aside>
                        <div class="textC">
                            <h4 class="titleC">Nous contacter</h4>
                            <p>Vous pouvez nous contacter par mail, par téléphone ou par adresse postale.</p>
                            <p>Vous pourrez retrouver toutes nos coordonnées ci-contre.</p>
                        </div>
                        <div class="textC">
                            <h4 class="titleC">Nous suivre</h4>
                            <p>Vous pouvez nous retrouver sur les réseaux sociaux suivants : </p>
                            <p><a href="https://www.facebook.com/Super-Rando.96"><i class="fab fa-facebook"></i></a></p>
                            <p><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'template/footer.php';
    ?>
</body>
</html>




