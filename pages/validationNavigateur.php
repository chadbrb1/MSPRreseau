<?php session_start(); ?>

<?php include('conf.php'); ?>
<?php

$email = $_POST['mail'];
$navigateurValide = $_POST['navigateur'];

if ($navigateurValide == "oui")
{
    $ipVide ="";
    $sql = "UPDATE soignant SET temp_navigateur='".$navigateurValide."' WHERE email='".$email."'";
    $stmt = $dbco->prepare($sql);
    $stmt->execute();
    $sql2 = "UPDATE soignant SET ipAdressBan='".$ipVide."' WHERE email='".$email."'";
    $stm2t = $dbco->prepare($sql2);
    $stm2t->execute();
    echo "Vous pouvez désromais vous connecter sur le nouveau navigateur.<br> Vous allez être redirigé vers la page de connexion <br> Merci";
    f_redirection('../index.php',4);
}
else
{

/*
    $ip_blacklist = array('127.0.0.1', 'xxx.xxx.xxx.x', 'xxx.xxx.xxx.x');

    // vous pouvez mettre les ips dans un fichiers texte et les importer
    // $ip_blacklist = file('ip_blacklist.txt');

    // lecture de l'ip en cours
    $ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';

    // test si l'ip est blacklisté
    if (array_search($ip, $ip_blacklist) !== FALSE) {
        echo 'Votre IP ' . $ip . ' est interdite!';
        // stop le script
        exit;
    }

    // ici votre code habituel :)
*/


    // lecture de l'ip en cours
    $req = $dbco->prepare('SELECT id,nom,prenom,email,mdp,profession,navigateur,ipAdressBan FROM soignant WHERE email = :email');
    $req->execute(array(
        'email' => $email));
    $resultat = $req->fetch();

    $ip = $resultat['ipAdressBan'];

    //write_ipFile("ipBan.txt",$ip ); // on

    //echo read_ipFile("ipBan.txt","ZUHIEUHVU");




}

?>