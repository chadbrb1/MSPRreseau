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