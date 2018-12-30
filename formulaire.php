<?php
$civilitys = array(1 => 'Civilité', 2 => 'Monsieur', 3 => 'Madame');
$familys = array(1 => ' ', 2 => 'Célibataire', 3 => 'Marié(e)', 4 => 'Divorcé(e)', 5 => 'Veuf (Veuve)', 6 => 'pacsé(e)', 7 => 'Séparé(e)', 8 => 'Concubinage');
// Création de mes variables contenant mes regex
//l'ensembre des lettres et caractéres spéciaux
$regexLastName = "#([a-zA-Z_])$#";
$regexFirstName = "#([a-zA-Z_])$#";
$regexNativeCountry = "#([a-zA-Z_])$#";
$regexNationality = "#([a-zA-Z_])$#";
$regexMail = '/^[^\s@]+@[^\s@]+\.[^\s@]{2,3}$/';
//Un mot de passe valide aura,de 8 à 15 caractères,au moins une lettre minuscule,au moins une lettre majuscule,au moins un 
//chiffre,au moins un de ces caractères spéciaux: $ @ % * + - _ !,un autre caractère possible: pas de & ni de { par exemple)
$regexPassword = '^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$';
$regexAddress = '/^[0-9]{0,5}\s[0-9a-zA-Z\'\-\s]*\s[0-9a-zA-Z\'\-\s]*/';
$regexZipCode = '\'([0-9]{5})\'s';
$regexCity = '/^[\w\-]{3,30}$/';
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
//Date de naissance
if (isset($_POST['birthDate'])) {
    $birthDate = htmlspecialchars($_POST['birthDate']);
    if (empty($birthDate)) {
        $formError['birthDate'] = 'Erreur,merci de remplir le champ date de naissance.';
    }
}
//Pays de naissance
if (isset($_POST['nativeCountry'])) {
    $nativeCountry = htmlspecialchars($_POST['nativeCountry']);
    if (!preg_match($regexNativeCountry, $nativeCountry)) {
        $formError['nativeCountry'] = 'Vote Pays de naissance est  invalide.';
    }
    if (empty($nativeCountry)) {
        $formError['nativeCountry'] = 'Erreur,merci de remplir le champ pays de naissance.';
    }
}
//Nationalité
if (isset($_POST['nationality'])) {
    $nationality = htmlspecialchars($_POST['nationality']);
    if (!preg_match($regexNationality, $nationality)) {
        $formError['nationality'] = 'Vote nationalité est  invalide.';
    }
    if (empty($nationality)) {
        $formError['nationality'] = 'Erreur,merci de remplir le champ Nationalité.';
    }
}//adresse mail
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    if (!preg_match($regexMail, $mail)) {
        $formError['mail'] = 'Vote mail est  invalide.';
    }
    if (empty($mail)) {
        $formError['mail'] = 'Erreur,merci de remplir le champ adresse mail.';
    }
}//confirmation adresse mail
if (isset($_POST['confirmMail'])) {
    $confirmMail = htmlspecialchars($_POST['confirmMail']);
    if (!preg_match($regexMail, $confirmMail)) {
        $formError['confirmMail'] = 'Vote confirmation d\'adresse mail est  invalide.';
    }
    if (empty($confirmMail)) {
        $formError['confirmMail'] = 'Erreur,merci de remplir le champ confirmation d\'adresse mail.';
    }
}
//mot de passe
if (isset($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    if (!preg_match($regexPassword, $password)) {
        $formError['password'] = 'Vote mot de passe est  invalide.';
    }
    if (empty($password)) {
        $formError['password'] = 'Erreur,merci de remplir le champ mot de passe.';
    }
}
//confirmation mot de passe
if (isset($_POST['confirmPassword'])) {
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    if (!preg_match($regexPassword, $confirmPassword)) {
        $formError['confirmPassword'] = 'Vote confirmation de mot de passe est  invalide.';
    }
    if (empty($confirmPassword)) {
        $formError['confirmPassword'] = 'Erreur,merci de remplir le champ confirmation de mot de passe.';
    }
}
//adresse
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
    if (!preg_match($regexAddress, $address)) {
        $formError['address'] = 'Vote adresse est  invalide.';
    }
    if (empty($address)) {
        $formError['address'] = 'Erreur,merci de remplir le champ Adresse.';
    }
}
//code postal
if (isset($_POST['zipCode'])) {
    $zipCode = htmlspecialchars($_POST['zipCode']);
    if (!preg_match($regexZipCode, $zipCode)) {
        $formError['zipCode'] = 'Vote code postal est  invalide.';
    }
    if (empty($zipCode)) {
        $formError['zipCode'] = 'Erreur,merci de remplir le champ code postale.';
    }
}
//ville
if (isset($_POST['city'])) {
    $city = htmlspecialchars($_POST['city']);
    if (!preg_match($regexCity, $city)) {
        $formError['city'] = 'Vote ville est  invalide.';
    }
    if (empty($city)) {
        $formError['city'] = 'Erreur,merci de remplir le champ ville.';
    }
}
//Numéro de téléphone
if (isset($_POST['phoneNumber'])) {
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    if (!preg_match($regexPhone, $phoneNumber)) {
        $formError['phoneNumber'] = 'Vote numéro de téléphone est  invalide.';
    }
    if (empty($phoneNumber)) {
        $formError['phoneNumber'] = 'Erreur,merci de remplir le champ numéro de téléphone.';
    }
}
//Numéro de portable
if (isset($_POST['mobilNumber'])) {
    $mobilNumber = htmlspecialchars($_POST['mobilNumber']);
    if (!preg_match($regexPhone, $mobilNumber)) {
        $formError['mobilNumber'] = 'Vote numéro de mobile est  invalide.';
    }
    if (empty($mobilNumber)) {
        $formError['mobilNumber'] = 'Erreur,merci de remplir le champ numéro de portable.';
    }
}
//Situation familiale
if (isset($_POST['family'])) {
    $family = htmlspecialchars($_POST['family']);
//initilatisation d'un tableau vide:
    $resultFamily = [];
    $resultFamyly = $familys[$family];
}
//Nombre d'enfants
if (isset($_POST['numberChildren'])) {
    $numberChildren = htmlspecialchars($_POST['numberChildren']);
    if (empty($numberChildren)) {
        $formError['numberChildren'] = 'Erreur,merci de remplir le champ nombre d\'enfants.';
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
        <title>Formulaire</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="asset/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                    <form method="POST" action="formulaire.php" class="form">
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
                                <select id="gender" name="gender"value="<?= isset($civilitys) ? $civilitys : '' ?>">
                                    <?php foreach ($civilitys as $key => $value) { ?>
                                        <option value = "<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                                <h4>Votre identité :</h4>
                                <p>
                                    <label for="lastName"> Nom : </label><input type="text" placeholder="Nom" id="lastName" name="lastName" value="<?= isset($lastName) ? $lastName : '' ?>"/>
                                    <?= isset($formError['lastName']) ? $formError['lastName'] : '' ?> 
                                    <label for="firstName">Prénom : </label><input type="text" placeholder="Prénomom" id="firstName" name="firstName" value="<?= isset($firstName) ? $firstName : '' ?>"/>
                                    <?= isset($formError['firstName']) ? $formError['firstName'] : '' ?> 
                                </p>
                                <p>
                                    <label for="birthDate">Date de Naissance : </label><input type="date" id="birthDate" name="birthDate" value="<?= isset($birthDate) ? $birthDate : '' ?>"/>                                                                                              
                                    <?= isset($formError['birthDate']) ? $formError['birthDate'] : '' ?> 
                                    <label for="nativeCountry">Pays de Naissance : </label><input type="text" id="nativeCountry" placeholder="Pays" name="nativeCountry" value="<?= isset($nativeCountry) ? $nativeCountry : '' ?>"/>
                                    <?= isset($formError['nativeCountry']) ? $formError['nativeCountry'] : '' ?> 
                                    <label for="nationality">Nationalité : </label><input type="text" id="nationality" placeholder="Nationalité" name="nationality" value="<?= isset($nationality) ? $nationality : '' ?>"/> 
                                    <?= isset($formError['nationality']) ? $formError['nationality'] : '' ?> 
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>Coordonnées</legend>
                                <p>
                                    <label for="mail">Adresse Mail : </label><input type="text" id="mail" placeholder="ex : adresse@hotmail.fr" name="mail" value="<?= isset($mail) ? $mail : '' ?> "/>  
                                    <?= isset($formError['mail']) ? $formError['mail'] : '' ?> 
                                    <label for="confirmMail">Confimez l'Adresse Mail : </label><input type="text" id="confirmMail" placeholder="ex : adresse@hotmail.fr" name="confirmMail" value="<?= isset($confirmMail) ? $confirmMail : '' ?>"/>
                                    <?= isset($formError['confirmMail']) ? $formError['confirmMail'] : '' ?> 
                                </p>
                                <p>
                                    <label for="password">Mot de passe  : </label><input type="password" id="password" name="password" value="<?= isset($password) ? $password : '' ?> "/>
                                    <?= isset($formError['password']) ? $formError['password'] : '' ?> 
                                    <label for="confirmPassword">Confirmation de mot de passe  : </label><input type="password" id="confirmPassword" name="confirmPassword" value="<?= isset($confirmPassword) ? $confirmPassword : '' ?> "/>
                                    <?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?> 
                                </p>
                                <h4>Entrez vos coordonnées postales :</h4>
                                <p>
                                    <label for="address">Adresse Postale : </label><textarea type="text" placeholder="Numéro et nom de la rue" name="address" id="address" value="<?= isset($address) ? $address : '' ?> "/></textarea>
                                    <?= isset($formError['address']) ? $formError['address'] : '' ?> 
                                    <label for="zipCode">Code Postal : </label><input type="text" id="zipCode" placeholder="Code Postal" name="zipCode" value="<?= isset($zipCode) ? $zipCode : '' ?> "/>
                                    <?= isset($formError['zipCode']) ? $formError['zipCode'] : '' ?> 
                                    <label for="city">Ville : </label><input type="text" placeholder="Ville" id="city" name="city" value="<?= isset($city) ? $city : '' ?> "/>
                                    <?= isset($formError['city']) ? $formError['city'] : '' ?> 
                                </p>
                                <h4>Entrez vos coordonnées téléphonique :</h4>
                                <p>
                                    <label for="phoneNumber">Numero De Telephone : </label><input type="tel" data-country="FR" id="phoneNumber" placeholder="00 00 00 00 00" name="phoneNumber" value="<?= isset($phoneNumber) ? $phoneNumber : '' ?> "/>
                                    <?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : '' ?> 
                                    <label for="mobilNumber">Numero De Portable : </label><input type="tel" data-country="FR" id="mobilNumber" placeholder="00 00 00 00 00" name="mobilNumber" value="<?= isset($mobilNumber) ? $mobilNumber : '' ?> "/>
                                    <?= isset($formError['mobilNumber']) ? $formError['mobilNumber'] : '' ?> 
                                </p>
                            </fieldset>
                            <fieldset>
                                <legend>Famille</legend>
                                <h4>Situation familiale : </h4>
                                <p>
                                    <label  for="family">Situation familiale : </label>
                                    <select name="family" id="family" value="<?= isset($familys) ? $familys : '' ?>">
                                        <?php foreach ($familys as $key => $value) { ?>
                                            <option value = "<?= $key ?>"><?= $value ?></option>
                                        <?php } ?>
                                    </select>
                                </p>
                                <div><label for="numberChildren">Nombre d'enfant(s) : </label><input type="number" id="numberChildren" name="numberChildren" value="<?= isset($numberChildren) ? $numberChildren : '' ?> "/></div>
                                <?= isset($formError['numberChildren']) ? $formError['numberChildren'] : '' ?> 
                            </fieldset>
                            <fieldset>
                                <legend>Parlez nous de vous</legend> 
                                <p>Comment avez vous connu notre site ?</p>
                                <textarea name="message1" value="<?= isset($message1) ? $message1 : '' ?> "/></textarea>
                                <?= isset($formError['message1']) ? $formError['message1'] : '' ?> 
                                <p>Quelles sont vos attentes ?</p>
                                <textarea name="message2" value="<?= isset($message2) ? $message2 : '' ?> "/></textarea>
                                <?= isset($formError['message2']) ? $formError['message2'] : '' ?>     
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
        <?php if (isset($_POST['gender'])): ?>
            <div class="container">
                <div class="modal fade" id="modalConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- HEADER MODAL -->
                            <div class="modal-header">
                                <h1 class="modal-title" id="ModalLongTitle">Validation de votre inscription</h1>
                                <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" ><span aria-hidden= "true" > &times;</span></button>
                            </div>
                            <!-- BODY MODAL -->
                            <div class="modal-body">
                                <div id="confirmation">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <link href="style.css" rel="stylesheet" type="text/css" />
                                                <fieldset>
                                                    <legend>Résumé de vos informations</legend>
                                                    <div class="row">
                                                        <div class="col-md-12 ">
                                                            <h1>Voici le resultat de vos données.</h1>
                                                        </div>
                                                    </div>
                                                    <fieldset>
                                                        <legend>Informations personnelles</legend>    
                                                        <p>Civilité : <?= $result ?></p>
                                                        <p>Votre Nom : <?= $lastName ?></p>
                                                        <p>Votre Prénom : <?= $firstName ?></p>
                                                        <p>Votre date de naissance : <?= $birthDate ?></p>
                                                        <p>Votre pays de naissance : <?= $nativeCountry ?></p>
                                                        <p>Votre nationalité : <?= $nationality ?></p>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend>Coordonnées</legend>    
                                                        <p>Votre mail : <?= $mail ?></p>
                                                        <p>Votre adresse : <?= $address ?></p>
                                                        <p>Votre code postal : <?= $zipCode ?></p>
                                                        <p>Votre ville : <?= $city ?></p>
                                                        <p>Votre Numéro de téléphone : <?= $phoneNumber ?></p>
                                                        <p>Votre Numéro de portable : <?= $mobilNumber ?></p>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend>Famille</legend> 
                                                        <p>Votre situation familiale : <?= $resultFamyly ?></p>
                                                        <p>Le nombre d'enfant(s) :</p>
                                                        <p><?= $numberChildren ?><p>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend>Parlez nous de vous</legend> 
                                                        <p>Comment avez vous connu notre site :</p>
                                                        <p><?= $message1 ?></p>
                                                        <p>Vos attentes :</p>
                                                        <p><?= $message2 ?></p>

                                                        <a href="formulaire.php" title="Modifier mes informations"><input type="submit" class="valid" value="Modifier mes informations"/></a>
                                                        <li class="nav-item">
                                                            <a class="nav-link disabled" data-toggle="modal" data-target="#modalConfirmation"><input type="submit" class="valid" value="Confirmer mes informations" name="btn"/></a>
                                                        </li>
                                                    </fieldset>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="modal fade" id="modalConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- HEADER MODAL -->
                            <div class="modal-header">
                                <h1 class="modal-title" id="ModalLongTitle">Validation de votre inscription</h1>
                                <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" ><span aria-hidden= "true" > &times;</span></button>
                            </div>
                            <!-- BODY MODAL -->
                            <div class="modal-body">
                                <div id="confirmation">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p> Votre inscription a bien été prise en compte. Merci!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php endif; ?>
</body>
</html>

