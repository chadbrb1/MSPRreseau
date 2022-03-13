<?php
try{
    $dbco = new PDO('mysql:host=localhost; dbname=mspr', 'root', 'root') ;
    $dbco -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo "Erreur lors de la connexion à la base de données ";
}


function f_redirection($lien, $duree=0)
{
    header ("Refresh: ".$duree.";URL=".strval($lien));
    exit;
}

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

    return 'Other';
}
function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


function get_ip_é() {
    $add = $_SERVER['REMOTE_ADDR'];
    return $add;
}

function mailing_validation($toEmail)
{

    $adresse = "http://localhost:8888/php/MSPRreseau/pages/validationAuthent.php";
    $subject = "Connexion sur un navigateur inconnu ! ";
    $admin = "msprreseautest1@gmail.com";
    $message = "Une tentative de connexion a eu lieu sur un navigateur inconnu. <br> Veuillez effectuer une vérification à l'adresse suivante : <br> ".$adresse;
    $mailHeaders = "From: Administrateur MSPR " . "<". $admin .">\r\n";
    mail($toEmail, $subject, $message, $mailHeaders);

}

function read_ipFile($ip_file,$ip)
{

    // Nom du fichier à ouvrir
    $fichier = file($ip_file);
    // Nombre total de ligne du fichier
    $total = count($fichier);
    $present = 0;

    for ($i = 0; $i < $total; $i++) {
        // On cherche ligne par ligne dans le fichier si notre adresse ip y est
        // avec la fonction nl2br pour ajouter les sauts de lignes
        if ($fichier[$i] == $ip) {
            return 1;
        } else {
            return 0;
        }
    }
}
function write_ipFile($ip_file,$ip)
{
    $f = $ip_file;

    $text = "\n".$ip;
    $handle = fopen($f, "a+");

//on vérifie si le fichier est accessible en écriture

// Ecriture
        fputs($handle,$text);
        echo 'Ecriture terminé';

        fclose($handle);


}
?>





}



?>