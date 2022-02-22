
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gather</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />

</head>

<body>
<!-- START NAV -->
<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                <span></span>
                <span></span>
                </span>
        </div>
        <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">



                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" >
                        Compte
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href ="authentification.php">
                            Connexion
                        </a>
                        <a class="navbar-item" href="inscription.php">
                            Inscription
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href = "mentions.php">
                            Mentions Légales
                        </a>



                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->

<section class="hero is-info is-small is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">Bienvenue, veuillez vous connecter : </h1>
        </div>
    </div>
</section>


<div class="column is-5 is-offset-3">

    <form method ="post" action ="authent.php">

        <div class="field">
            <label class="Email">Email</label>
            <input class="input is-info" type="email" name ="email" id ="email" placeholder="JeanMacron@gmail.com" >
        </div>

        <div class="field">
            <label class="Password">Mot de Passe</label>
            <input class="input is-info" type="password" name ="password" id ="password" placeholder="Password">
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-info" type ="submit" name ="submit">
                    Login
                </button>
            </p>
        </div>
    </form>

    <a href = "oublieMDP.php"> Mot de passe oublié ?</a>
</div>




<script src='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js'></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        //The first argument are the elements to which the plugin shall be initialized
        //The second argument has to be at least a empty object or a object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
    });
</script>
</body>

</html>

