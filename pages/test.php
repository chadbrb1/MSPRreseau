<?php include('conf.php'); ?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$erreur = '';
session_start();

if ($_POST['submit']) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $sql = 'SELECT id,nom,prenom,email,mdp,profession FROM soignant WHERE email = :email';
    $query = mysqli_query($dbco, $sql);

    if ($query) {
        $row = mysqli_fetch_row($query);
        $userId = $row[0];
        $dbUsername = $row[3];
        $dbPassword = $row[4];
    }

    if ($username == $dbUsername && $password == $dbPassword) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userId;
        header('Location: serveur.php');
    } else {
        $erreur = "Identifiant ou mot de passe incorrect !";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content=="text/html; charset=utf-8">
    <link rel="stylesheet" href="style.css"/>
    <title>Connexion</title>
</head>
<body>



<form method="post" action="test.php">

    <div class="titre">Connexion</div>
    <?php echo $erreur; ?>
    <input type="text" placeholder="Nom d'utilisateur" name="username"/><br />
    <input type="password" placeholder="Mot de passe" name="password"/><br />
    <fieldset>
        <input type="submit" name="submit" value="Se connecter" />
    </fieldset>


</form>


</body>
</html>


<?php session_start(); ?>

<?php include('conf.php'); ?>
<?php

$email = $_POST['mail'];
$navigateurValide = $_POST['navigateur'];

if ($navigateurValide == "oui")
{
    $req2 = $dbco->prepare('Update soignant SET temp_navigateur = :navigateurValide WHERE email = :email');
    $req2->execute(array(
        'temp_navigateur' => $navigateurValide,
        'email' => $email));
    $resultat2 = $req2->fetch();
    echo "Vous pouvez désoromais vous connecter sur le nouveau navigateur.<br> Vous allez être redirigé vers la page de connexion <br> Merci";
    f_redirection('../index.php',7);
}
else
{

    $ip_blacklist = file('ipBan.txt');

    // lecture de l'ip en cours
    $req = $dbco->prepare('SELECT id,nom,prenom,email,mdp,profession,navigateur,ipAdressBan FROM soignant WHERE email = :email');
    $req->execute(array(
        'email' => $email));
    $resultat = $req->fetch();

    $ip = resultat['ipAdressBan'];
    echo $ip;
    // test si l'ip est blacklisté
    if (array_search($ip, $ip_blacklist) !== FALSE) {
        echo 'Votre IP ' . $ip . ' est interdite!';
        // stop le script
        exit;
    }

    // ici votre code habituel :)

    $test = "blablabla";
    $test2 = "revnzerlvn" ;
    //write_ipFile("ipBan.txt",$test2 ); // on

    echo read_ipFile("ipBan.txt","ZUHIEUHVU");

}

?>