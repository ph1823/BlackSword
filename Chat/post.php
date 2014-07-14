 <?php
 //Insertion du message à l'aide d'une requête préparée
$req = $bdd-prepare('INSERT INTO chat (pseudo, message, date_ajout) VALUES(, , NOW())');
$req-execute(array($_POST['pseudo'], $_POST['message']));

 //Redirection du visiteur vers la page du minichat
header('Location index.php');

?>