<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <title>Super Rando</title>
    <script src="assets/angularjs/angular.js"></script>

</head>
<body>
    <header>
        <div class="container-fluid">
            <div id=backgroundHeader >
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex">
                            <img class="logo" src="assets/images/logo2.png" alt="logo">
                            <h1 class="logoTitle">Super Rando</h1>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <form class="form-inline my-2 my-lg-0 search displayOK">
                                <input class="form-control mr-sm-2 inputSearch" ng-model="Category" type="search" placeholder="Rechercher">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                            </form>
                        </div>
                        <!--carousel début-->
                        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <div class="row">
                                <div id="demo" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-30 h-20" src="assets/images/image1.jpeg" alt="pandaRoux">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-30 h-20" src="assets/images/image2.jpg" alt="ecureuilRoux">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-30 h-20" src="assets/images/image3.jpeg" alt="triton">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-30 h-20" src="assets/images/image4.jpg" alt="busard">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div><!-- fermeture row -->
                        </div><!-- fermeture col -->
                        <!--carousel fin-->
                    </div><!-- fermeture row barTitleCS-->
                </div>
            </div>
        </div>
        <!--Début de nav bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id= "navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="accueil.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notreSite.php">Notre site</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="reserves.php" id="navbardrop" data-toggle="dropdown">
                        Les réserves
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="listeFrance.php">En France</a>
                        <a class="dropdown-item" href="listeRegion.php">Par Régions</a>
                        <a class="dropdown-item" href="listeReserve.php">Liste des Réseves</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="connexion.php">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inscription.php">Inscription</a>
                </li>
            </ul>
        </nav> 
        <!--Fin de nav bar-->
    </header>

