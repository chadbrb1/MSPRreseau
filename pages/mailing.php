<?php session_start(); ?>

<?php include('conf.php'); ?>
<?php

      $email=$_POST['email'];

      $mdp=$_POST['password'];

      $mdp2=$_POST['password2'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $profession = $_POST['profession'];
      $toEmail = "msprreseautest1@gmail.com";
      $mailHeaders = "From: " . "<". $email .">\r\n";
      $navigateur = get_browser_name($_SERVER['HTTP_USER_AGENT']);
      $url = "http://localhost:8888/php/MSPRreseau/pages/inscription.php";
      $message = "Une personne souhaite s'incrire, voici ses informations : "."<br>Nom : ".$nom.";<br> Prénom : ".$prenom.";<br> Email : ".$email.";<br> Mot de passe :".$mdp.";<br> Profession : ".$profession.";<br> Navigateur : ".$navigateur."<br>Veuillez l'inscrire sur <a href='".$url."'>ce formulaire </a>";
      $subject = "Inscription";
      if(mail($toEmail, $subject, $message, $mailHeaders)) {
          $mail_msg = "Votre demande d'inscrition a bien été envoyée.<br> Vous recevrez une confirmation de votre inscription ainsi que vos identifiant prochainement.<br> Merci ";
          $type_mail_msg = "success";
          echo $mail_msg;
          f_redirection('pages/index.php',5);
      }else{
          $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
          $type_mail_msg = "error";
          echo $mail_msg;
          f_redirection($url);

  }
?>