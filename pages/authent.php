<?php session_start(); ?>

<?php include('conf.php'); ?>

<?php

$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';
$ban = read_ipFile("ipBan.txt",$ip);
?>
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

    echo $navigateurCourant;
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

            mailing_validation($email,$ip);
            $sql = "UPDATE soignant SET temp_navigateur='".$navigateurCourant."' WHERE email='".$email."'";
            $stmt = $dbco->prepare($sql);
            $stmt->execute();
            $sql2 = "UPDATE soignant SET ipAdressBan='".$ip."' WHERE email='".$email."'";
            $stm2t = $dbco->prepare($sql2);
            $stm2t->execute();
            // execute the query
            // execute the query
            $stmt->execute();
        }


    }
    else
    {
        echo 'Mauvais identifiant ou mot de passe 2222 !!!';

    }


}



?>






