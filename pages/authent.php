
<?php include('conf.php') ?>
<?php session_start(); ?>

<?php
if (isset($_SESSION['id']))
{
    f_redirection('serveur.php');
}
else  f_redirection('serveur.php');



if (isset($_POST['submit']))
{
    if(!empty($_POST['email'] && !empty($_POST['password'])))
    {
        $_POST['email'] = htmlentities($_POST['email'], ENT_QUOTES);
        $_POST['password'] = htmlentities($_POST['password'], ENT_QUOTES);
        $sql = "SELECT * FROM soignant WHERE email = '".$_POST['email']."'" ;
        $req = $dbco-> query(sql) or die ("Erreur SQL") ;
        $data = $req -> fetch() ;
        if (!empty($data['email']))
        {
            $_POST['password'] = md5( $_POST['password']);
            if($data['password'] ==  $_POST['password'])
            {
                S_SESSION['email'] =  $_POST['login'];
                S_SESSION['password'] =  $_POST['password'];

                header("Location : serveur.php" );
            }
            else echo 'mot de passe incorrect';
        }else echo 'mot de passe incorrect';
    }else echo 'Login ou mot de passe incorrect';
}

?>