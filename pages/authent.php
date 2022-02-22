<?php session_start(); ?>

<?php include('conf.php'); ?>

<?php
$dbco = new PDO('mysql:host=localhost; dbname=mspr', 'root', 'root');
$email=$_POST['email'];
$mdp=$_POST['password'];

$req = $dbco->prepare('SELECT id,nom,prenom,email,mdp,profession FROM soignant WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

if ($mdp == $resultat['mdp'])
{
    $test = true ;
}

else
{
    $test = false ;
}

echo $test;
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe 1111 !';

}
else
{
    if ($test == 1) {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $email;
        $_SESSION['mdp'] = $resultat['mdp'];




        f_redirection('serveur.php');

    }
    else
    {
        echo 'Mauvais identifiant ou mot de passe 2222 !!!';

    }
}
?>






