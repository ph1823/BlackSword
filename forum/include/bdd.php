<?php
 function bdd() {/*Utilisateur :  u903804580_ph || Mot de passe : jimskeule);*/
 	try
 	{
 		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 		$bdd = new PDO('mysql:host=localhost;dbname=blacksword', 'root' , '', $pdo_options);
 	}
 	catch (Exception $e)
 	{
 		die('Erreur :' . $e->getMessage());
 	}
 	return $bdd;
 }
 ?>