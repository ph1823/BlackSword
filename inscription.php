<?php
$titre = 'Inscription';

include('include/ini.php');
include('/include/head.php');

if(isset($_POST['envoyer'])) {
if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['motdepasse']) AND !empty($_POST['motdepasse']) AND isset($_POST['motdepasse2']) AND !empty($_POST['motdepasse2']) AND isset($_POST['email']) AND !empty($_POST['email']))
	{
//Tout les champs sont remplis
$req2 = $bdd->prepare('SELECT COUNT(*) FROM membres WHERE pseudo = :pseudo;');
$req2->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$req2->execute();
if($req2->fetchColumn() == 0) {
 // Pseudo inutilisé, donc accepté

		        $info_membre = $req2->fetch();
            if(!isset($info_membre['pseudo'])){
                $longeur_pseudo = strlen($_POST['pseudo']);
        if($longeur_pseudo <= 30)
        {
//Le pseudo respecte le format
if($_POST['motdepasse'] == $_POST['motdepasse2']){
 
            $sql = <<<SQL
INSERT INTO membres (pseudo, motdepasse, email) VALUES (:pseudo, :motdepasse, :email)
SQL;
        // paramètres de la requètes issues du POST     
        $stmt = $bdd->prepare($sql);
		$stmt->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $stmt->bindValue(':motdepasse', sha1($_POST['motdepasse']), PDO::PARAM_STR);
        $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
          
        $result = $stmt->execute();
         if (true === $result) {
$succes = 'Le compte a correctement été créé ! Vous pouvez maintenant vous connecter en cliquant <a href="connextion.php">ici</a>';
}
}
else/*Les mdp ne corresponde pas*/
{
	$erreur = 'Le mot de passe et le mot de passe de confirmation ne corresponde pas!';
}
}
else
{
	$erreur = 'Le pseudo est trop long (max : 30 caractére)';
}
}
}
else
{
	$erreur = 'Le pseudo est déjà utilisé !';
}
}
else
{
	$erreur = 'Tous les champs sont obligatoire !';
}
}


?>
<h1>Créer un compte</h1>
<?php
if (isset($erreur)) {
	echo 'Erreur : '.$erreur;
	# code...
}
?>
<?php
if (isset($succes)) {
	echo $succes;
	# code...
}
?>
<hr />
<form action="inscription.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo'];} ?>" /><br />
Mot de passe : <input type="password" name="motdepasse" value="<?php if(isset($_POST['motdepasse'])) { echo $_POST['motdepasse'];} ?>" /><br />
Mot de passe confirmation : <input type="password" name="motdepasse2" value="<?php if(isset($_POST['motdepasse2'])) { echo $_POST['motdepasse2'];} ?>" /><br />
EMail : <input type="text" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];} ?>" /><br />
<input type="submit" name="envoyer" value="S'inscrire" />
</form>

<?php

include('include/footer.php');

?>