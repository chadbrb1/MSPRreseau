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
?>


