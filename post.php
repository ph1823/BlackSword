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

$titre = 'New';

include('include/ini.php');
include('/include/head.php');


if(isset($id_get));
if(!isset($_GET['id']))
{
header('Location: index.php');
}
else
{
$id_get = intval($_GET['id']);
}

$v1 = $bdd->query('SELECT * FROM articles WHERE id = "'.$id_get.'"');
$info_article = $v1->fetch(); 
if(isset($info_article['id'])) {

//Afficher le titre
?>
<h1><?php echo $info_article['titre']; ?></h1>
<?php
//Afficher le titre
?>

<?php
//Afficher l'auteur
?>
<h5>par <?php echo $info_article['auteur']; ?></h5>
<?php
//Afficher l'auteur
?>

<?php
//Faire un espace
?>
<br />
<?php
//Faire un espace
?>

<?php
//Afficher le contenu
?>
<?php echo nl2br($info_article['contenu']); ?>
<?php
//Afficher le contenu
?>
<?php
//Faire un espace
?>
<br />
<?php
//Faire un espace
?>
<hr />
<?php
$v2 = $bdd->query('SELECT * FROM commentaires WHERE id_articles = "'.$info_article['id'].'"  ORDER BY id LIMIT 0,10') or die(mysql_error());
while($info_com = $v2->fetch()) { ?>
Commentaire n°<?php echo $info_com['id']; ?> par <?php echo $info_com['auteur']; ?> 
<?php echo nl2br(htmlspecialchars($info_com['contenu'])); ?><br /><br />



<?php
}
}
else
{
echo "/!\Soit vous avez éssayé de nous piraté soit vous avez cahngé le numéreaux dans ?id= est il est invalide mais vous n'avez pas réusis a nous piraté car la nouvelle n'extipe pas mais vous n'aurez pas nos code dans ton cul!/!\'";
}
?>
<?php
ob_end_flush();

include('include/footer.php');

?>