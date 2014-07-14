<?php
include('/include/ini.php');
session_start();
ob_start();

$titre = 'Connextion';

include('/include/head.php');


if(isset($_POST['envoyer'])) {
	if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['motdepasse']) AND !empty($_POST['motdepasse']))
	{
           
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $password = htmlspecialchars($_POST['motdepasse']);   
      $hash_password = sha1($password);
      //
       $sql = 'SELECT * FROM membres WHERE pseudo = :pseudo AND motdepasse=:pass';
       $query = $bdd->prepare($sql); 
       $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
       $query->bindValue(':pass', $hash_password, PDO::PARAM_STR);
       $query->execute();
       //recupérer les infos du membre
       $info_membre = $query->fetch(PDO::FETCH_ASSOC);

if(isset($info_membre['pseudo'])) {
			if($hash_password == $info_membre['motdepasse'])
		{
			//Mdp bon
			$_SESSION['pseudo'] = $pseudo;
			$succes = 'Connextion réussie!';
		}
		else
		{
			$erreur = 'Le mot de passe est incorrect!';
		}
	}
	else
	{
		$erreur = 'Le pseudo n\'existe pas!';
	}

	}

else
{
	$erreur = 'Tous les champs sont obligatoire !';
}
}


?>
<h1>Connection</h1>
<?php
if (isset($erreur)) {
	echo 'Erreur : '.$erreur;
	# code...
}


if (isset($succes)) {
header("Location: succes.php");
}
?>
<hr />
<form action="connextion.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo'];} ?>" /><br />
Mot de passe : <input type="password" name="motdepasse" value="<?php if(isset($_POST['motdepasse'])) { echo $_POST['motdepasse'];} ?>" /><br />
<input type="submit" name="envoyer" value="Se connecter" />
</form>
</body>
</html>
<?php
ob_end_flush();

include('include/footer.php');
?>