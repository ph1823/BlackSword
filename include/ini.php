<?php
/* Connection à la base de donné */

 function bdd() {/*Utilisateur :  u903804580_ph || Mot de passe : jimskeule);*/
 	try
 	{
 		$bdd = new PDO('mysql:host=localhost;dbname=u297566589_ph', 'root' , '');
 		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 	}
 	catch (Exception $e)
 	{
 		die('Erreur :' . $e->getMessage());
 	}
 	return $bdd;
 }

/* Déclaration de la variable $bdd */

$bdd = bdd();

/* Création des grade ( admin / membre ) */

try
{
        $req_selectMembre = $bdd->prepare('SELECT * FROM membres');
        $req_selectMembre->execute();
        $selectMembre = $req_selectMembre->fetch();

        $rangnumero = $selectMembre['id_admin'];
}
catch (Exception $e)
{
        echo('Erreur : ' . $e->getMessage());
}

if ($rangnumero == "0") {
    $rang = "Membre";
}
if ($rangnumero == "1") {
    $rang = "Administrateur";
}


/* Déclaration de variable diverse */
?>