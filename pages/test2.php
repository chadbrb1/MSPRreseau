<?php
$email = "mat" ;
$name = "test" ;
$prenom = "t" ;
$mdp = "mdp";
$profession = "médecin";
$subject = "inscription" ;

$toEmail = "msprreseautest1@gmail.com";
$url = "http://localhost:8888/php/MSPRreseau/pages/inscription.php";
$message = "Une personne souhaite s'incrire, voici ses informations : "."<br>Nom : ".$name.";<br> Prénom : ".$prenom.";<br> Email : ".$email.";<br> Mot de passe :".$mdp.";<br> Profession : ".$profession."<br>Veuillez l'inscrire sur <a href='".$url."'>ce formulaire </a>";

echo $message;


?>
