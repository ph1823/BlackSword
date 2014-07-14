    <?php
session_start();

    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    //Ob_start
ob_start();
//Les include
include('/home/u297566589/public_html/test/include/ini.php');

//Page Génrale

if($_SESSION['pseudo'] AND $rang == "Administrateur") {

   // alors on lance le contenu spécial admin   // alors on lance le contenu spécial admin
                ?>
<h1>Page d'administration centrale en constrution</h1>
<p>La page centrale d'administration de la BlackSxord est en constrcution mais vous pouvez allé sur d'autre page qui ne sont pas en construction</p>
<br />
<br />
<br />
<br />
<p = center><a href="new.php">Gestion des new</a></p>
<p = center><a href="membre.php">Gestion des membre(En constrction)</a></p>
<p = center><a href="/">En constrction</a></p>
<p = center><a href="/">En constrction</a></p>
<p = center><a href="/">En constrction</a></p>
<?php
}
else
{ ?>
    <div id="erreur_admin">Vous devez être connecté en tant que Administrateur!</div>
<?php
}

ob_end_flush();
?>
