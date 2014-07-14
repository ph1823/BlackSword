<?php
include('ini.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php $nom_site = $bdd->query('SELECT nom_site FROM info_site');

while ($site = $nom_site->fetch()) {
echo $site['nom_site'];
}
?> || <?php echo $titre ?></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style/style.css" media="screen" />
    </head>
    <body>
 <header>
                            <div id="header">
            <div class="header">
                <a href="/index.php" title="Retourner à l'accueil de test"><img style="float: left;" class="logo" src="../test/images/logo.jpg" alt="logo"></a>
                <h1>La Team BlackSword sur minecraft!</h1>
            </div>
            <div class="informations">
                Fondateur: ludo66 <br />
                Fondateur : jtube02<br /> 
                Fondateur : TheBoss2912<br />
            </div>
        </div>
        <div id="navigation">
            <ul class="sf-menu">
<li><a class="nav nm" title="Accueil" href="/">Accueil</a></li>
<li><a class="nav nm" title="Membre" href="membre.php">Membres</a></li>
<li><a class="nav nm" title="Support" href="support.php">Support</a></li>
<li><a class="nav nm" title="Autre" href="/">Autre <img class="arrow" src="/images/arrow_down.png"></a>
    <ul class="niveau2" style="left:0px; top:40px;">
        <li><a class="nav autre" title="Règlement" href="reglement.php">Règlement</a></li>
    </ul>
</li>
            </ul>
            <span class="reseaux">
                <img src="images/facebook.png" alt="facebook" title="Facebook"></a>
                <img src="images/youtube.png" alt="youtube" title="YouTube"></a>
            </span>
        </div>
                </header>