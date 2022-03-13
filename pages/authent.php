<?php session_start(); ?>

<?php include('conf.php'); ?>


<?php


$dbco = new PDO('mysql:host=localhost; dbname=mspr', 'root', 'root');
$email=$_POST['email'];
$mdp=$_POST['password'];

$req = $dbco->prepare('SELECT id,nom,prenom,email,mdp,profession,navigateur FROM soignant WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();
$navigateurCourant = get_browser_name($_SERVER['HTTP_USER_AGENT']);
$isPasswordCorrect = password_verify($mdp, $resultat['mdp']);
if ($isPasswordCorrect)
{
    $test = true ;
}

else
{
    $test = false ;
}

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe 1111 !';

}
else
{
    if ($test == 1) {


        if ($resultat['navigateur'] == $navigateurCourant)
        {
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $resultat['mdp'];

            if ( $email == "msprreseautest1@gmail.com")
            {
                f_redirection('inscription.php');
            }
            f_redirection('serveur.php');
        }
        else
        {
            mailing_validation($email);
            $req2 = $dbco->prepare('Update soignant SET temp_navigateur = :navigateurCourant WHERE email = :email');
            $req2->execute(array(
                'temp_navigateur' => $navigateurCourant,
                'email' => $email));
            $resultat2 = $req2->fetch();
        }


    }
    else
    {
        echo 'Mauvais identifiant ou mot de passe 2222 !!!';

    }


}




if ($_SESSION['id'] == "") {
    f_redirection('../index.php');
}


?>






