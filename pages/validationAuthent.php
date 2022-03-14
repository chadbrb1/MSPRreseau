<?php session_start(); ?>

<?php	require_once('MenuNonConnecte.php'); ?>

<section class="hero is-info is-small is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">Validation requise : </h1>

        </div>
    </div>
</section>
<br>
<div class="column is-3  is-offset-4">
Une connexion sur un nouveau navigateur a été demandée. <br>Confirmez vous cette connexion ?




    <br></br>
    <br>

    <form method ="post" action ="validationNavigateur.php">


        <div class="form-check">
            <input class="form-check-input" type="radio" name="navigateur" id="navigateur" value="oui">
            <label class="form-check-label" for="oui">
                Oui, je souhaite me connecter sur ce navigateur
            </label>
        </div>

        <div class="field">
            <label class="label"></label>
            <div class="control">
                <input class="input is-info" type="email" name = "mail" placeholder="Confirmer votre adresse mail" required>
            </div>
        </div>
<br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="navigateur" id="navigateur" value = "non" checked>
            <label class="form-check-label" for="non">
                Non, bloquez l'IP souhaitant se connecter
            </label>
        </div>



<br>
        <div class="field">
            <p class="control">
                <button class="button is-info" type ="submit" name ="submit">
                    valider <?php echo getIp() ?>
                </button>
            </p>
        </div>
    </form>

</div>



</html>