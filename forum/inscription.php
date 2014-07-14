<?php session_start();
include_once'../forum/include/inscription.class.php';
include_once'../include/config.php';

if(isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['mdp2'])) {

	$inscription = new inscription($_POST['pseudo'],$_POST['email'],$_POST['mdp'],$_POST['mdp2']);
	$verif = $inscription->verif();
	if($verif == "ok") {
		/*Tout est bon */
		if($inscription->enregistrement()) {
			echo "Tous est bon";
		}
		else
		{
			/*Erreur lors de l'enregistrement*/
			echo "Un erreur est survenue";
		}

	}
	else
	{
		$erreur = $verif;
	}
}
?>
<!DOCTYPE html>
	<html>
		<head>
    		<meta charset='uft-8' />
    			<title>BlackSwrd || Forum || Inscription</title>
        		<meta name="author" content="BlackSword New" />
    			<link rel="stylesheet" type="text/css" href="include/stylez.css"> <?php //Mettre le style ?>
    			<link rel="shortcut" href="images/favicon.ico"> <?php //Mettre le petit logo a coté du titre ?>
              	<link href="http://fonts.googleapis.com/css?family=Karla" rel="stylesheet" type="text/css">
    	</head>
		<body>
			<h1>Inscription</h1>
			<div id="Cforum"></div>
					<form method="post" action="inscription.php">
					<p>
						<input name="pseudo" type="text" placeholder="Pseudo..." required /><br />
						<input name="email" type="email" placeholder="Adresse email..." required /><br />
						<input name="mdp" type="password" placeholder="Mot De Passe..." required /><br />
    					<input name="mdp2" type="password" placeholder="Confirmation du Mot De passe..." required /><br />
    					<input type="submit" value="S'inscrire!" /><br />
    <?php
if(isset($erreur)) {
	echo $erreur;
}
    ?>

					</p>
	
					</form>
		</body>
	</html>