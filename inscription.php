
//portail d'inscription
//contiendra un formulaire d'inscription, qui activera le fichier inscrip.php lors de l'envoie des données

<?php session_start(); ?>
<?php	require_once('MenuNonConnecte.php'); ?>
<?php include('bdd.php'); ?>

     <section class="hero is-info is-small is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Bienvenue, vous pouvez vous inscire : </h1>

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
  <label class="label">pr&eacutenom</label>
  <div class="control">
    <input class="input is-info" type="text" name ="prenom" placeholder="Jean" required>
  </div>
</div>

<div class="field">
  <label class="label">Nom d'utilisateur</label>
    <input class="input is-info" type="text" name = "nomUtilisateur" placeholder="VoldemortDu79" required>
</div>

                        			<label class="label">Quelle est votre date de naissance ?</label>
                        <div class="columns">
                          <div class="column">
                            <p>
                        	<label class="label">Jour</label>
                        		<select class="input is-info" name="jour">
                        			<option value="01">01</option>
                        			<option value="02">02</option>
                        			<option value="03">03</option>
                        			<option value="04">04</option>
                        			<option value="05">05</option>
                        			<option value="06">06</option>
                        			<option value="07">07</option>
                        			<option value="08">08</option>
                        			<option value="09">09</option>
                        			<option value="10">10</option>
                        			<option value="11">11</option>
                        			<option value="12">12</option>
                        			<option value="13">13</option>
                        			<option value="14">14</option>
                        			<option value="15">15</option>
                        			<option value="16">16</option>
                        			<option value="17">17</option>
                        			<option value="18">18</option>
                        			<option value="19">19</option>
                        			<option value="20">20</option>
                        			<option value="21">21</option>
                        			<option value="22">22</option>
                        			<option value="23">23</option>
                        			<option value="24">24</option>
                        			<option value="25">25</option>
                        			<option value="26">26</option>
                        			<option value="27">27</option>
                        			<option value="28">28</option>
                        			<option value="29">29</option>
                        			<option value="30">30</option>
                        			<option value="31">31</option>
                        		</select>
                        	</p>
                         </div>
                        <div class="column">
                        	<p>
                        		<label class="label">Mois</label>
                        		<select class="input is-info" name="mois">
                        			<option value="01">Janvier</option>
                        			<option value="02">F&eacutevrier</option>
                        			<option value="03">Mars</option>
                        			<option value="04">Avril</option>
                        			<option value="05">Mai</option>
                        			<option value="06">Juin</option>
                        			<option value="07">Juillet</option>
                        			<option value="08">Ao&ucirct</option>
                        			<option value="09">Septembre</option>
                        			<option value="10">Octobre</option>
                        			<option value="11">Novembre</option>
                        			<option value="12">Decembre</option>
                        		</select>
                        	</p>
                         </div>
 <div class="column">
    <p>
		<label class="label">Ann&eacutee</label>
	<select class="input is-info" name="annee">
                        			<option value="2020">2020</option>
                        			<option value="2019">2019</option>
                        			<option value="2018">2018</option>
                        			<option value="2017">2017</option>
                        			<option value="2016">2016</option>
                        			<option value="2015">2015</option>
                        			<option value="2014">2014</option>
                        			<option value="2013">2013</option>
                        			<option value="2012">2012</option>
                        			<option value="2011">2011</option>
                        			<option value="2010">2010</option>
                        			<option value="2009">2009</option>
                        			<option value="2008">2008</option>
                        			<option value="2007">2007</option>
                        			<option value="2006">2006</option>
                        			<option value="2005">2005</option>
                        			<option value="2004">2004</option>
                        			<option value="2003">2003</option>
                        			<option value="2002">2002</option>
                        			<option value="2001">2001</option>
                        			<option value="2000">2000</option>
                        			<option value="1999">1999</option>
                        			<option value="1998">1998</option>
                        			<option value="1997">1997</option>
                        			<option value="1996">1996</option>
                        			<option value="1995">1995</option>
                        			<option value="1994">1994</option>
                        			<option value="1993">1993</option>
                        			<option value="1992">1992</option>
                        			<option value="1991">1991</option>
                        			<option value="1990">1990</option>
                        			<option value="1989">1989</option>
                        			<option value="1988">1988</option>
                        			<option value="1987">1987</option>
                        			<option value="1986">1986</option>
                        			<option value="1985">1985</option>
                        			<option value="1984">1984</option>
                        			<option value="1983">1983</option>
                        			<option value="1982">1982</option>
                        			<option value="1981">1981</option>
                        			<option value="1980">1980</option>
                        			<option value="1979">1979</option>
                        			<option value="1978">1978</option>
                        			<option value="1977">1977</option>
                        			<option value="1976">1976</option>
                        			<option value="1975">1975</option>
                        			<option value="1974">1974</option>
                        			<option value="1973">1973</option>
                        			<option value="1972">1972</option>
                        			<option value="1971">1971</option>
                        			<option value="1970">1970</option>
                        			<option value="1969">1969</option>
                        			<option value="1968">1968</option>
                        			<option value="1967">1967</option>
                        			<option value="1966">1966</option>
                        			<option value="1965">1965</option>
                        			<option value="1964">1964</option>
                        			<option value="a58">1963</option>
                        			<option value="1962">1962</option>
                        			<option value="1961">1961</option>
                        			<option value="1960">1960</option>
                        			<option value="1959">1959</option>
                        			<option value="1958">1958</option>
                        			<option value="1957">1957</option>
                        			<option value="1956">1956</option>
                        			<option value="1955">1955</option>
                        			<option value="1954">1954</option>
                        			<option value="1953">1953</option>
                        			<option value="1952">1952</option>
                        			<option value="1951">1951</option>
                        			<option value="1950">1950</option>
                        			<option value="1949">1949</option>
                        			<option value="1948">1948</option>
                        			<option value="1947">1947</option>
                        			<option value="1946">1946</option>
                        			<option value="1945">1945</option>
                        			<option value="1944">1944</option>
                        			<option value="1943">1943</option>
                        			<option value="1942">1942</option>
                        			<option value="1941">1941</option>
                        			<option value="1940">1940</option>
                        		</select>
</div>
</div>

<form method ="get" action ="inscri.php">
<div class="label">
  <label class="label">Email</label>
    <input class="input is-info" type="email" name ="email" id ="email" placeholder="JeanMacron@gmail.com"  required>
</div>

<div class="field">
    <label class="label">Mot de Passe</label>
    <input class="input is-info" type="password" name ="password" id ="password" placeholder="Password" required>
</div>

<div class="field">
    <label class="label">Confirmation mot de Passe</label>
    <input class="input is-info" type="password" name = "password2" placeholder="Password" required>
</div>


<div class="control">




  <div class="field has-addons">
          <div class="control is-expanded">
            <div class="select is-fullwidth">
              <select id="soflow" class="is-size-6" name="statut">
                  <?php

                  //requ�te pour aller chercher ds la bdd la liste des types de panneau
                  $sql = $dbco ->query('SELECT * FROM statut_utilisateur');

                  while($donnees = $sql->fetch()) {

                  ?>


                  <option value="<?php echo $donnees['Id_Statut']; ?>"><?php echo $donnees['Statut_Type'];  ?></option>

                  <?php

                  }
                  $sql->closeCursor();

                  ?>
              </select>
            </div>
          </div>

        </div>




  </br> </br>
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

