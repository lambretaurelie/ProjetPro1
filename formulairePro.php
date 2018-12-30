<?php
$civilitys = array(1 => 'Civilité', 2 => 'Monsieur', 3 => 'Madame');
$types = array(1 => ' ', 2 => 'Nationale', 3 => 'Régionale');
// Création de mes variables contenant mes regex
//l'ensembre des lettres et caractéres spéciaux
$regexLastName = "#([a-zA-Z_])$#";
$regexFirstName = "#([a-zA-Z_])$#";
$regexSociety = '/^[\w\-]{3,60}$/';
$regexLocalisation = '/^[\w\-]{3,30}$/';
$regexArea = '\'([0-9]{5})\'s';
$regexMail = '/^[^\s@]+@[^\s@]+\.[^\s@]{2,3}$/';
//Un mot de passe valide aura,de 8 à 15 caractères,au moins une lettre minuscule,au moins une lettre majuscule,au moins un 
//chiffre,au moins un de ces caractères spéciaux: $ @ % * + - _ !,un autre caractère possible: pas de & ni de { par exemple)
$regexPassword = '^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$';
$regexPhone = '/^[0-9][0-9\/]{0,13}[0-9][0-9\/]{3}/';

//je verifie que  mes POST existe .
//si mes POST existe alors j'affiche mes données
//je verifie que  mes POST existe .
//la civilité
if (isset($_POST['gender'])) {
    $civility = htmlspecialchars($_POST['gender']);
//initilatisation d'un tableau vide:
    $result = [];
    $result = $civilitys[$civility];
}
//Le Nom
if (isset($_POST['lastName'])) {
    $lastName = htmlspecialchars($_POST['lastName']);
// Si $lastname ne respecte pas les conditions de ma regex alors je stock un message d'erreur
// dons mon tableau formError
    if (!preg_match($regexLastName, $lastName)) {
        $formError['lastName'] = 'Vote nom est  invalide.';
    }
//Si c'est vide je stock un message d'erreur.
    if (empty($lastname)) {
        $formError['lastname'] = 'Erreur,merci de remplir le champ Nom.';
    }
}
//Le Prénom
if (isset($_POST['firstName'])) {
    $firstName = htmlspecialchars($_POST['firstName']);
    if (!preg_match($regexFirstName, $firstName)) {
        $formError['firstName'] = 'Vote prénom est  invalide.';
    }
    if (empty($firstName)) {
        $formError['firstName'] = 'Erreur,merci de remplir le champ Prénom.';
    }
}
//Nom de la Réserve
if (isset($_POST['society'])) {
    $society = htmlspecialchars($_POST['society']);
    if (!preg_match($regexSociety, $society)) {
        $formError['society'] = 'Vote nom de réserve est  invalide..';
    } if (empty($society)) {
        $formError['society'] = 'Erreur,merci de remplir le champ  nom de la réserve.';
    }
}
//Type de réserve
if (isset($_POST['type'])) {
    $type = htmlspecialchars($_POST['type']);
//initilatisation d'un tableau vide:
    $resultType = [];
    $resultType = $types[$type];
}
//Localisation
if (isset($_POST['localisation'])) {
    $localisation = htmlspecialchars($_POST['localisation']);
    if (!preg_match($regexLocalisation, $localisation)) {
        $formError['localisation'] = 'Vote localisation est  invalide.';
    }
    if (empty($localisation)) {
        $formError['localisation'] = 'Erreur,merci de remplir le champ localisation.';
    }
}
//Date de création
if (isset($_POST['date'])) {
    $date = htmlspecialchars($_POST['date']);
    if (empty($date)) {
        $formError['date'] = 'Erreur,merci de remplir le champ date de création.';
    }
}
//Superficie
if (isset($_POST['area'])) {
    $area = htmlspecialchars($_POST['area']);
    if (!preg_match($regexArea, $area)) {
        $formError['area'] = 'Vote superficie est  invalide.';
    }
    if (empty($area)) {
        $formError['area'] = 'Erreur,merci de remplir le champ superficie.';
    }
}
//adresse mail
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    if (!preg_match($regexfirstName, $mail)) {
        $formError['mail'] = 'Vote mail est  invalide.';
    }
    if (empty($mail)) {
        $formError['mail'] = 'Erreur,merci de remplir le champ adresse mail.';
    }
}//confirmation adresse mail
if (isset($_POST['confirmMail'])) {
    $confirmMail = htmlspecialchars($_POST['confirmMail']);
    if (!preg_match($regexfirstName, $confirmMail)) {
        $formError['confirmMail'] = 'Vote confirmation d\'adresse mail est  invalide.';
    }
    if (empty($confirmMail)) {
        $formError['confirmMail'] = 'Erreur,merci de remplir le champ confirmation de l\'adresse mail.';
    }
}
//mot de passe
if (isset($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    if (!preg_match($regexfirstName, $password)) {
        $formError['password'] = 'Vote mot de passe est  invalide.';
    }
    if (empty($password)) {
        $formError['password'] = 'Erreur,merci de remplir le champ mot de passe.';
    }
}
//confirmation mot de passe
if (isset($_POST['confirmPassword'])) {
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    if (!preg_match($regexfirstName, $confirmPassword)) {
        $formError['confirmPassword'] = 'Vote confirmation de mot de passe est  invalide.';
    }
    if (empty($confirmPassword)) {
        $formError['confirmPassword'] = 'Erreur,merci de remplir le champ confirmation du mot de passe.';
    }
}
//Numéro de téléphone
if (isset($_POST['phoneNumber'])) {
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    if (!preg_match($regexfirstName, $phoneNumber)) {
        $formError['phoneNumber'] = 'Vote numéro de téléphone est  invalide.';
    }
    if (empty($phoneNumber)) {
        $formError['phoneNumber'] = 'Erreur,merci de remplir le champ numéro de téléphone.';
    }
}
//Numéro de portable
if (isset($_POST['mobilNumber'])) {
    $mobilNumber = htmlspecialchars($_POST['mobilNumber']);
    if (!preg_match($regexfirstName, $mobilNumber)) {
        $formError['mobilNumber'] = 'Vote numéro de mobile est  invalide.';
    }
    if (empty($mobilNumber)) {
        $formError['mobilNumber'] = 'Erreur,merci de remplir le champ numéro de portable.';
    }
}
//Message 1
if (isset($_POST['message1'])) {
    $message1 = htmlspecialchars($_POST['message1']);
}
//Message 2
if (isset($_POST['message2'])) {
    $message2 = htmlspecialchars($_POST['message2']);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP2</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="asset/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                    <form method="POST" action="" class="form">
                        <fieldset>
                            <legend>Formulaire</legend>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1>Bonjour, Veuillez remplir le formulaire suivant.</h1>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Informations personnelles</legend>
                                <h4>Civilité :</h4>
                                <label  for="gender">Civilité : </label>
                                <select name="gender"value="<?= isset($civilitys) ? $civilitys : '' ?>">
                                    <?php foreach ($civilitys as $key => $value) { ?>
                                        <option value = "<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                                <h4>Votre identité :</h4>
                                <p>
                                    <label for="lastName"> Nom : </label><input type="text" placeholder="Nom" name="lastName" value="<?= isset($lastName) ? $lastName : '' ?>"/>
                                <div class="text-danger"> <?= isset($formError['lastName']) ? $formError['lastName'] : '' ?> </div>
                                <label for="firstName">Prénom : </label><input type="text" placeholder="Prénomom" name="firstName" value="<?= isset($firstName) ? $firstName : '' ?>"/>
                                <div class="text-danger"> <?= isset($formError['firstName']) ? $formError['firstName'] : '' ?> </div>
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>votre entreprise</legend>
                                <p>
                                    <label for="society">Nom de la réserve : </label><input type="text" placeholder="Nom de votre société" name="society" value="<?= isset($society) ? $society : '' ?> "/>
                                <div class="text-danger"> <?= isset($formError['society']) ? $formError['society'] : '' ?> </div>
                                <label  for="type">Type de réserve : </label>
                                <select id="type" name="type"value="<?= isset($typess) ? $types : '' ?>">
                                    <?php foreach ($types as $key => $value) { ?>
                                        <option value = "<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                                </p>
                                <p>
                                    <label for="localisation">Localisation : </label><input type="text" placeholder="ville" name="localisation" value="<?= isset($localisation) ? $localisation : '' ?> "/>
                                <div class="text-danger"> <?= isset($formError['localisation']) ? $formError['localisation'] : '' ?> </div>
                                <label for="date">Date de création : </label><input type="date" name="type" value="<?= isset($date) ? $date : '' ?> "/>
                                <div class="text-danger"> <?= isset($formError['date']) ? $formError['date'] : '' ?> </div>
                                </p>
                                <p>
                                    <label for="area">Superficie : </label><input type="text" placeholder="superficie" name="area" value="<?= isset($area) ? $area : '' ?> "/> en Ha
                                <div class="text-danger"> <?= isset($formError['area']) ? $formError['area'] : '' ?> </div>
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>Coordonnées</legend>
                                <p>
                                    <label for="mail">Adresse Mail : </label><input type="text" id="mail" placeholder="ex : adresse@hotmail.fr" name="mail" value="<?= isset($mail) ? $mail : '' ?> "/>  
                                <div class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : '' ?> </div>
                                <label for="confirmMail">Confimez l'Adresse Mail : </label><input type="text" id="confirmMail" placeholder="ex : adresse@hotmail.fr" name="confirmMail" value="<?= isset($confirmMail) ? $confirmMail : '' ?>"/>
                                <div class="text-danger"><?= isset($formError['confirmMail']) ? $formError['confirmMail'] : '' ?></div> 
                                </p>
                                <p>
                                    <label for="password">Mot de passe  : </label><input type="password" id="password" name="password" value="<?= isset($password) ? $password : '' ?> "/>
                                <div class="text-danger"><?= isset($formError['password']) ? $formError['password'] : '' ?></div> 
                                <label for="confirmPassword">Confirmation de mot de passe  : </label><input type="password" id="confirmPassword" name="confirmPassword" value="<?= isset($confirmPassword) ? $confirmPassword : '' ?> "/>
                                <div class="text-danger"><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></div> 
                                </p>
                                <h4>Entrez vos coordonnées téléphonique :</h4>
                                <p>
                                    <label for="phoneNumber">Numero De Telephone : </label><input type="tel" data-country="FR" id="phoneNumber" placeholder="00 00 00 00 00" name="phoneNumber" value="<?= isset($phoneNumber) ? $phoneNumber : '' ?> "/>
                                <div class="text-danger"><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : '' ?></div> 
                                <label for="mobilNumber">Numero De Portable : </label><input type="tel" data-country="FR" id="mobilNumber" placeholder="00 00 00 00 00" name="mobilNumber" value="<?= isset($mobilNumber) ? $mobilNumber : '' ?> "/>
                                <div class="text-danger"><?= isset($formError['mobilNumber']) ? $formError['mobilNumber'] : '' ?></div> 
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>Parlez nous de vous</legend> 
                                <p>Description de votre Réserve (type d'habitat, population...)</p>
                                <textarea name="message1" value="<?= isset($message1) ? $message1 : '' ?> "/></textarea>
                                <p>Quelles sont vos attentes ?</p>
                                <textarea name="message2" value="<?= isset($message2) ? $message2 : '' ?> "/></textarea>
                            </fieldset>
                            <div><label for="valid"></label><input class="valid" type="submit" name="valid" value="Valider"/></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <?php if (isset($_POST['gender'])): ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                        <div class="result"></div>
                        <fieldset>
                            <legend>Résumé de vos informations</legend>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1 class="resulth1">Voici le resultat de vos données.</h1>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Informations personnelles</legend>    
                                <p>Civilité : <?= $result ?></p>
                                <p>Votre Nom : <?= $lastName ?></p>
                                <p>Votre Prénom : <?= $firstName ?></p>
                            </fieldset>
                            <fieldset>
                                <legend>votre entreprise</legend> 
                                <p>Nom de la réserve : <?= $society ?></p>
                                <p>Type de Réserve : <?= $resultType ?></p>
                                <p>Localisation : <?= $localisation ?></p>
                                <p>Date de création : <?= $date ?></p>
                                <p>Supperficie : <?= $area ?></p>
                            </fieldset>
                            <fieldset>
                                <legend>Coordonnées</legend>    
                                <p>Votre mail : <?= $mail ?></p>
                                <p>Votre Numéro de téléphone : <?= $phoneNumber ?></p>
                                <p>Votre Numéro de portable : <?= $mobilNumber ?></p>
                            </fieldset>
                            <fieldset>
                                <legend>Parlez nous de vous</legend> 
                                <p>Comment avez vous connu notre site :</p>
                                <p><?= $message1 ?></p>
                                <p>Vos attentes :</p>
                                <p><?= $message2 ?></p>
                                <a href="index.php" title="Modifier mes informations"><input type="button" class="valid" value="Modifier mes informations"/></a>
                            </fieldset>
                        </fieldset>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>

