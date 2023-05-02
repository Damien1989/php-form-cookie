<?php require_once('inc/haut.inc.php'); ?>
<?php require_once('inc/menu.inc.php'); ?>


<section>
<div class="container">
<main>
<h1>Accueil</h1>
<hr>
<!-- Titre et niveaux -->
<h2>Titre niveau 2</h2>
<p>Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de
notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le
texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil
Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page d'accueil Voici le texte de notre page
d'accueil </p>
<hr>
<!-- Image Responsive -->
<h2>Titre 3</h2>
<p><img class="img-responsive" src="http://placehold.it/750x250" alt="explication PHP"></p>
<hr>
</main>
<aside>
<h2>Colonne</h2>
<p>Voici la colonne de droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de droite pour
la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de droite
pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de
droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la
colonne de droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil Voici la colonne de droite pour la page d'accueil
Voici la colonne de droite pour la page d'accueil </p>
</aside>
<div class="clear"></div>
</div>
</section>

<?php
if(!empty($_POST))
{
echo 'Recuperation des données saisies : <br>';
echo 'ville : ' . $_POST['ville'] . '<br>';
echo 'cp : ' . $_POST['cp'] . '<br>';
echo 'adresse : ' . $_POST['adresse'] . '<br>';
}
?>

<?php require_once('inc/bas.inc.php'); ?>

<form method="post" action="">
<label for="ville">ville</label><br>
<input type="text" name="ville" id="ville" placeholder="saisir 1 ville"><br><br>
<label for="cp">code postal</label><br>
<input type="text" name="cp" id="cp" placeholder="saisir 1 code postal"><br><br>
<label for="adresse">adresse</label><br>
<textarea name="adresse" id="adresse" placeholder="saisir 1 adresse"></textarea><br><br>
<input type="submit">
</form>

<?php
mail("contact.damiendiaz@gmail.com", "Le sujet", "Le message", "contact.damiendiaz@gmail.com"); ?>


<?php
if(!empty($_POST))
{
// affichage des saisies pour être sur de les obtenir avant de les exploiter.
echo "destinataire : $_POST[destinataire] <br>";
echo "sujet : $_POST[sujet] <br>";
echo "message : $_POST[message] <br>";
echo "expediteur : $_POST[expediteur] <br>";
// entête email
$headers = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
$headers .= 'Reply-To: ' . $_POST['expediteur'] . "\n";
$headers .= 'From: "' . ucfirst(substr($_POST['expediteur'], 0, strpos($_POST['expediteur'], '@'))) . '"<'.$_POST['expediteur'].'>' . "\n";
$headers .= 'Delivered-to: ' . $_POST['destinataire'] . "\n";
mail($_POST['destinataire'], $_POST['sujet'], $_POST['message'], $headers);
}
?>






<form method="post" action="">
<label for="destinataire">Destinataire</label><br>
<input type="text" name="destinataire" id="destinataire" placeholder="destinataire"><br><br>
<label for="expediteur">Expediteur</label><br>
<input type="text" name="expediteur" id="expediteur" placeholder="expediteur"><br><br>
<label for="sujet">Sujet</label><br>
<input type="text" name="sujet" id="sujet" placeholder="sujet"><br><br>
<label for="message">Message</label><br>
<textarea name="message" placeholder="message"></textarea><br><br>
<input type="submit" value="envoyer l'email">
</form>


