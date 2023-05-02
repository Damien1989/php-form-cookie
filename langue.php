<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Site Web</title>
    <meta name="viewport" content="=device-, initial-scale=1">
    <meta name="description" lang="fr" content="DESCRIPTION DU SITE">
    <meta name="author" content="AUTEUR">
    <meta name="robots" content="index, follow">
    <!-- Icones -->
    <link rel="favicon-icon" href="img/favicon.png">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="src/style.css">
    <!-- JS -->
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>
<?php
if (isset($_GET['pays'])) {
    $pays = $_GET['pays'];
} elseif (isset($_COOKIE['pays'])) {
    $pays = $_COOKIE['pays'];
} else {
    $pays = 'fr';
}
$expiration = 365 * 24 * 3600;
setCookie("pays", $pays, time() + $expiration);
?>

<body>
    <nav>
        <div class="container">
            <h3>Choisir une langue:</h3>
            <ul>
                <li><a href="langue.php?pays=fr">French</a></li>
                <li><a href="langue.php?pays=en">English</a></li>
                <li><a href="langue.php?pays=it">Italy</a></li>
                <li><a href="langue.php?pays=es">Spain</a></li>
                <li><a href="langue.php">Retour</a></li>
            </ul>
        </div>
    </nav>
    <?php
    if (isset($_GET['pays'])) { // vérifie si l'argument "pays" est présent dans l'URL
        $pays = $_GET['pays']; // si c'est le cas, stock sa valeur dans la variable $pays
        echo '<h3>Vous avez sélectionné ' . $pays . '</h3>'; // affiche message personnalisé pour indiquer le pays sélectionné
    } else {
        echo '<h3>Aucun pays sélectionné</h3>'; // sinon affiche un message générique indiquant qu'aucun pays n'a été sélectionné
    }
    ?>

    <?php
    switch ($pays) {
        case 'fr':
            echo '<p>Bonjour, <br> Vous visiter actuellement le site en français <br>Effectivement, la sauvegarde du cookie permet de retenir la
langue avec laquelle vous naviguer sur le site pour vos prochaines visites. <br>A bientôt.</p>';
            break;
        case 'es':
            echo '<p>¡Hola <br>En este momento está visitando el sitio en español <br>De hecho, la cookie permite la copia de seguridad de
conservar el idioma que utilice el sitio para futuras visitas. <br>Pronto.</p>';
            break;
        case 'en':
            echo '<p>Hello <br>You are currently visiting the site in English <br>Indeed, the cookie allows the backup to retain the language that you
use the site for future visits. <br>Soon.</p>';
            break;
        case 'it':

            echo '<p>Ciao <br>Si sta attualmente visitando il sito in Italiano <br>Infatti, il cookie consente il backup di mantenere la lingua che si
usa il sito per visite future. <br>Presto.</p>';
            break;
    }


    switch ($pays) {
        case 'fr':
            echo '<p>Bonjour, <br> Vous visiter actuellement le site en français <br>Effectivement, la sauvegarde du cookie permet de retenir la langue
avec laquelle vous naviguer sur le site pour vos prochaines visites. <br>A bientôt.</p>';
            break;
        case 'es':
            echo '<p>¡Hola <br>En este momento está visitando el sitio en español <br>De hecho, la cookie permite la copia de seguridad de conservar
el idioma que utilice el sitio para futuras visitas. <br>Pronto.</p>';
            break;
        case 'en':
            echo '<p>Hello <br>You are currently visiting the site in English <br>Indeed, the cookie allows the backup to retain the language that you use
the site for future visits. <br>Soon.</p>';
            break;
        case 'it':
            echo '<p>Ciao <br>Si sta attualmente visitando il sito in Italiano <br>Infatti, il cookie consente il backup di mantenere la lingua che si usa il
sito per visite future. <br>Presto.</p>';
            break;
    }
    ;

    ?>

</body>

</html>


