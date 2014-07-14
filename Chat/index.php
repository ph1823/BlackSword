<?php
ob_start();

    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);

include('../include/head.php');
?>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Votre Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Votre Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
    </p>
    </form>
<?php

$new = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_ajout, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM chat ORDER BY ID DESC LIMIT 0,50');

while ($donnees = $new->fetch())
{
    echo '<p><strong>Ajouter le :' . $donnees['date_creation_fr'] . ' Par : '. htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

?>
