
// portail d'auhtentification

//contiendra un formulaire de connexion, qui activera le fichier authent.php lors de l'envoie des données

<?php session_start(); ?>

<?php	require_once('bdd.php'); ?>




     <section class="hero is-info is-small is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Bienvenue, veuillez vous connecter : </h1>
            </div>
        </div>
    </section>


 <div class="column is-5 is-offset-3">

<form method ="post" action ="connec.php">

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




   <script async type="text/javascript" src="../js/bulma.js"></script>
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

