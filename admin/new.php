<?php
session_start();

    //Ob_start
ob_start();
//Les include
include('/home/u297566589/public_html/test/include/ini.php');

//Page Génrale

if($_SESSION['pseudo'] AND $rang == "Administrateur") {
//Suppression

if(isset($_GET['delete']) AND isset($_GET['id'])) {
	$idP = intval($_GET['id']);
	$del = $bdd->prepare('DELETE FROM articles WHERE id = "'.$idP.'"');
    $result1 = $del->execute();

    if(true === $result1) {
        echo "Nouvelle supprimé!";
    }
}

if (isset($_POST['envoi'])) {
 
    if(isset($_POST['auteur']) AND !empty($_POST['auteur']) AND isset($_POST['titre']) AND !empty($_POST['titre']) AND isset($_POST['contenu']) AND !empty($_POST['contenu'])) {      
 // requète sql
        $sql = <<<SQL
INSERT INTO articles (titre, auteur, contenu) VALUES (:titre, :auteur, :contenu)
SQL;
        // paramètres de la requètes issues du POST     
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':auteur', $_POST['auteur'], PDO::PARAM_STR);
        $stmt->bindParam(':titre', $_POST['titre'], PDO::PARAM_STR);
        $stmt->bindParam(':contenu', $_POST['contenu'], PDO::PARAM_STR);
         
        $result = $stmt->execute();
                 
        if (true === $result) {
            echo "La nouvelle a bien été publiée!";
        } else {
            echo "Une erreur est survenue, impossible d'enregistrer cet article!";
        }
         
    } else {
         echo 'Tous les champs sont obligatoires';        
       }      
}
?>
<form action="" method="post">
Auteur : <input type="text" name="auteur" value="<?php echo $_SESSION['pseudo'] ?>" /><br />
Titre : <input type="text" name="titre" value="<?php if(isset($_POST['titre'])) { echo $_POST['titre']; } ?>" /><br /><br />
Contenu : <textarea name="contenu"><?php if(isset($_POST['contenu'])) { echo $_POST['contenu']; } ?></textarea><br />
<input type="submit" name="envoi" value="Envoyé la nouvelle" />
</form>


<h3>Liste de nouvelle : </h3>
<?php
$v1 = $bdd->query('SELECT id, titre FROM articles');
while ($info_art = $v1->fetch()) {
?>
<?php echo htmlspecialchars($info_art['titre']); ?><a href="?delete&id=<?php echo $info_art['id']; ?>"><img src="/home/u297566589/public_html/test/images/delete.png" /></a><br />
<?php
}
}
?>