<?php session_start(); ?>
<?php include('pages/conf.php'); ?>

<?php
/*
error_reporting(E_ALL & ~E_NOTICE);

if ($_POST['submit']) {
    $erreur = 'r';
    $email = $_POST['email'];
    $mdp = $_POST['password'];

    $sql = 'SELECT id,nom,prenom,email,mdp,profession FROM soignant WHERE email = :email';
    $query = mysqli_query($dbco, $sql);
     echo$query ;
    if ($query) {
        $row = mysqli_fetch_row($query);
        $userId = $row[0];
        $dbemail = $row[3];
        $dbPassword = $row[4];
    }

    if ($email == $dbemail && $mdp == $dbPassword) {
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $userId;
        header('Location: serveur.php');
    } else {
        $erreur = "Identifiant ou mot de passe incorrect !";
    }
}
*/
/*if ($_POST['submit']) {
$email = $_POST['email'];
$mdp = $_POST['password'];

$req = $dbco->prepare('SELECT id,nom,prenom,email,mdp,profession FROM soignant WHERE email = :email');
$req->execute(array(
'email' => $email));
$resultat = $req->fetch();

if ($mdp == $resultat['mdp']) {
$test = true;
} else {
$test = false;
}


if (!$resultat) {
$erreur = 'Mauvais identifiant ou mot de passe 1111 !';

} else {
if ($test == 1) {
$_SESSION['id'] = $resultat['id'];
$_SESSION['email'] = $email;
$_SESSION['mdp'] = $resultat['mdp'];


f_redirection('serveur.php');

} else {
$erreur = 'Mauvais identifiant ou mot de passe 2222 !!!';

}
}

}
*/
 /*
 *
 * Anti-brut force ici :
 * LIEN : https://phpsources.net/code/php/securite/658_systeme-de-connexion-de-membres-avec-securitecontre-le-vol-de-cookies-et-bruteforce
 *
 *
 *
 * Mettre aussi un bloqueur d'adresse IP
 * LIEN : https://phpsources.net/code/php/securite/630_bloquer-des-adresses-ip-indesirables
 *
 *
 *
 * Rendre invisible les adresses mails :
 * LIEN : https://phpsources.net/code/php/securite/532_php-javascript-protection-des-adresses-email
 *
 */

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSPR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />

</head>

<body>
<!-- START NAV -->
<nav class="navbar">
    <div class="container">

        <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" >
                        Compte
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href ="index.php">
                            Connexion
                        </a>
                        <a class="navbar-item" href="pages/inscriptionDemandeur.php">
                            Inscription
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href = "mentions.php">
                            Mentions Légales
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->

<section class="hero is-info is-small is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">Bienvenue, veuillez vous connecter : </h1>
        </div>
    </div>
</section>


<div class="column is-5 is-offset-3">

    <form method ="post" action ="pages/authent.php">

        <div class="field">
            <label class="Email">Email</label>
            <input class="input is-info" type="email" name ="email" id ="email" placeholder="JeanMacron@gmail.com" >
        </div>

        <div class="field">
            <label class="Password">Mot de Passe</label>
            <input class="input is-info" type="password" name ="password" id ="password" placeholder="Password">
        </div>


        <div class="field">
            <p class="control">
                <button class="button is-info" type ="submit" name ="submit">
                    Login
                </button>
            </p>
        </div>
    </form>

    <a href = "oublieMDP.php"> Mot de passe oublié ?</a>
</div>

</body>

</html>

