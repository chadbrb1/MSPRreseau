<?php session_start(); ?>
<?php include('conf.php'); ?>
<?php
//R�cup�ration des variables du formulaire
$email=$_POST['email'];
$mdp=$_POST['password'];
$mdp2=$_POST['password2'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$profession = $_POST['profession'];
$statut = $_POST['statut'];
$navigateur = $_POST['navigateur'];


/* new date time */
//try{
// $dbco = new PDO('mysql:host=localhost; dbname=gather', 'root', rootpass());


$req = $dbco->prepare('SELECT id FROM soignant WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();



if ($resultat)
{
    echo 'ce mail est deja pris';
    f_redirection('inscription.php',2);
}

else
{

    if ($mdp != $mdp2)
    {
        echo ('les mdp ne sont pas identiques ');
        f_redirection('inscription.php', 2);
    }
    else
    {
        $pass_hache = password_hash($mdp, PASSWORD_DEFAULT);

        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $dbco->prepare('INSERT INTO soignant(nom,prenom,email,mdp,profession,navigateur)
                                    VALUES(:nom, :prenom, :email, :mdp, :profession, :navigateur)');
        $sql ->execute(array('nom' => $nom, 'prenom' => $prenom, 'email' => $email,'mdp' =>  $pass_hache, 'profession' =>$profession, 'navigateur', $navigateur)) ;

        $toEmail = $email;
        $admin = "msprreseautest1@gmail.com";
        $mailHeaders = "From: Administrateur MSPR " . "<". $admin .">\r\n";
        $url = "http://localhost:8888/php/MSPRreseau/pages/index.php";
        $message = "Vous avez été inscris. Voici vos information de connexion : "."<br>Nom : ".";<br> Email : ".$email.";<br> Mot de passe :".$mdp."<br>Veuillez l'inscrire sur <a href='".$url."'>ce formulaire </a>";
        $subject = $message;
        if(mail($toEmail, $subject, $message, $mailHeaders)) {
            $mail_msg = "Votre confirmation d'inscrition pour ".$toEmail." a bien été envoyée.<br>Merci ";
            $type_mail_msg = "success";
            echo $mail_msg;
        }else{
            $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
            $type_mail_msg = "error";
            echo $mail_msg;

        }
        f_redirection('../index.php',5);
}


}
//}

//catch(PDOException $e){
//echo "Erreur : " . $e->getMessage();
//}





//Controle des mots de passe
/*
 *
 * if ($mdp != $mdp2)
{
    echo "Mot de passe diff�rents !";
}
else
{
    //Ajout de l'utilisateur
    $req = "INSERT INTO utilisateur(email,mdp,nom,prenom,nomUtilisateur,datenaissance) VALUES (".$email."','".$mdp."','".$nom."','".$prenom."','".$nomUtil."','".$datenaissance."')";
    $req ->execute(array('email' => $email,'mdp' => $mdp, 'nom' => $nom, 'prenom' => $prenom, 'nomUtilisateur' => $nomUtil, 'datenaissance' =>$datenaissance)) ;
    if ($req)
    {
        echo "Inscription effectu�e";
    }
    else
        echo "Inscription non effectu�e !";

   }

   */
?>