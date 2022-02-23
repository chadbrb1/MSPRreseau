<?php session_start(); ?>
<?php include('conf.php'); ?>
<?php
//R�cup�ration des variables du formulaire
$email=$_POST['email'];
$mdp=$_POST['password'];
$mdp2=$_POST['password2'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nomUtilisateur = $_POST['nomUtilisateur'];
$profession = $_POST['profession'];
$statut = $_POST['statut'];

/* new date time */
//try{
// $dbco = new PDO('mysql:host=localhost; dbname=gather', 'root', rootpass());


$req = $dbco->prepare('SELECT id FROM soignant WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();


$req2 = $dbco->prepare('SELECT id FROM utilisateur WHERE nomUtilisateur = :nomUtilisateur');
$req2->execute(array(
    'nomUtilisateur' => $nomUtilisateur));
$resultat2 = $req2->fetch();

if ($resultat)
{
    echo 'ce mail est deja pris';
    f_redirection('inscription.php',2);
}

else
{
    if ($resultat2)
    {
        echo 'ce pseudo est deja pris';
        f_redirection('inscription.php',2);
    }



    if ($mdp != $mdp2)
    {
        echo ('les mdp ne sont pas identiques ');
        f_redirection('inscription.php', 2);
    }
    else
    {

        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $dbco->prepare('INSERT INTO utilisateur(email,mdp,nom,prenom,nomUtilisateur,datenaissance,statut, dateInscription)
                                    VALUES(:email, :mdp, :nom, :prenom, :nomUtilisateur, :datenaissance, :statut, :dateInscription)');
        $sql ->execute(array('email' => $email,'mdp' =>  $pass_hache, 'nom' => $nom, 'prenom' => $prenom, 'nomUtilisateur' => $nomUtilisateur, 'datenaissance' =>$datenaissance, 'statut' => $statut, 'dateInscription' => $dateInscription)) ;



        f_redirection('connexion.php');
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