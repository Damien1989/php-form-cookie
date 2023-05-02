<?php
if(!empty($_POST))
{
// affichage des saisies pour être sur de les obtenir avant de les exploiter.
echo "expediteur : $_POST[expediteur] <br>";
echo "nom : $_POST[nom] <br>";
echo "prenom : $_POST[prenom] <br>";
echo "societe : $_POST[societe] <br>";
echo "sujet : $_POST[sujet] <br>";
echo "message : $_POST[message] <br>";
// entête email
$headers = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
$headers .= 'Reply-To: ' . $_POST['expediteur'] . "\n";
$headers .= 'From: "' . ucfirst(substr($_POST['expediteur'], 0, strpos($_POST['expediteur'], '@'))) . '"<'.$_POST['expediteur'].'>' . "\n";
$headers .= 'Delivered-to: monadresse@gmail.com' . "\n";
$message = "Nom : " . $_POST['nom'] . "\nPrénom : " . $_POST['prenom'] . "\nSociété : " . $_POST['societe'] . "\nMessage : " .
$_POST['message'];
mail("monadresse@gmail.com", $_POST['sujet'], $message, $headers);
}
?>
<form method="post" action="">
<label for="nom">Nom</label><br>
<input name="nom" id="nom" placeholder="nom" type="text"><br><br>
<label for="prenom">Prenom</label><br>
<input name="prenom" id="prenom" placeholder="prenom" type="text"><br><br>
<label for="societe">Société</label><br>
<input name="societe" id="societe" placeholder="societe" type="text"><br><br>
<label for="expediteur">Expediteur</label><br>
<input type="text" name="expediteur" id="expediteur" placeholder="expediteur"><br><br>
<label for="sujet">Sujet</label><br>
<input type="text" name="sujet" id="sujet" placeholder="sujet"><br><br>
<label for="message">Message</label><br>
<textarea name="message" placeholder="message"></textarea><br><br>
<input type="submit" value="envoyer l'email">
</form>