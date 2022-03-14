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

function mailing_validation($toEmail,$ip)
{

    $adresse = "http://localhost:8888/php/MSPRreseau/pages/validationAuthent.php";
    $subject = "Connexion sur un navigateur inconnu ! ";
    $admin = "msprreseautest1@gmail.com";
    $message = "Une tentative de connexion a eu lieu sur un navigateur inconnu, avec cette adresse ip : ".$ip." <br> Veuillez effectuer une vérification à l'adresse suivante : <br> ".$adresse;
    $mailHeaders = "From: Administrateur MSPR " . "<". $admin .">\r\n";
    mail($toEmail, $subject, $message, $mailHeaders);

}

function read_ipFile($ip_file,$ip)
{

    if (array_search($ip, $ip_file) !== FALSE) {
        echo "Votre adresse ip est bannie de notre site, vous ne pouvez plus y acceder";
        f_redirection('../index.php',5);
    }
    else
    {
        return 0;
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

function Recherche($szFichier , $arszChercherChaine){
    $iNbCharChercher = count($arszChercherChaine);

    $szOutPut = implode("", file($szFichier));

    $iNbCharFichier = strlen($szOutPut);

    $arszTempChaine = array();

    $iCalcule = 0;

    $arszBidon = array();

    for ( $i = 0; $i < $iNbCharFichier; $i++)
    {
        if ($szOutPut[$i] == $arszChercherChaine[0])
        {
            for ($j = 0; $j < $iNbCharChercher; $j++)
            {
                $arszTempChaine[$j] = $szOutPut[$i];
                $i++;

                if ($arszChercherChaine == $arszTempChaine)
                {
                    $iCalcule++;
                }
            }

            $arszTempChaine = $arszBidon;

        }
    }

    return $iCalcule;
}
?>








