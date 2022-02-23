<?php session_start(); ?>

<?php	require_once('MenuNonConnecte.php'); ?>

<?php include('conf.php'); ?>

<section class="hero is-info is-small is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">Bienvenue, veuillez vous inscrire : </h1>

        </div>
    </div>
</section>

<div class="column is-5 is-offset-3">

    <form method ="post" action ="inscri.php">
        <div class="field">
            <label class="label">Nom</label>
            <div class="control">
                <input class="input is-info" type="text" name = "nom" placeholder="Macron" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Pr&eacutenom</label>
            <div class="control">
                <input class="input is-info" type="text" name ="prenom" placeholder="Jean" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Nom d'utilisateur</label>
            <input class="input is-info" type="text" name = "nomUtilisateur" placeholder="VoldemortDu79" required>
        </div>

            <div class="label">
                <label class="label">Email</label>
                <input class="input is-info" type="email" name ="email" id ="email" placeholder="JeanMacron@gmail.com"  required>
            </div>

        <div class="label">
            <label class="label">Profession</label>
            <input class="input is-info" type="text" name ="profession" id ="profession" placeholder="médecin généraliste"  required>
        </div>

            <div class="field">
                <label class="label">Mot de Passe</label>
                <input class="input is-info" type="password" name ="password" id ="password" placeholder="Password" required>
            </div>

            <div class="field">
                <label class="label">Confirmation mot de Passe</label>
                <input class="input is-info" type="password" name = "password2" placeholder="Password" required>
            </div>



            <div class="field">
                <p class="control">
                    <button class="button is-info" type ="submit" name ="submit">
                        Continuer
                    </button>
                </p>
            </div>
        </form>
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

    