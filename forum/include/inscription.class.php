<?php
include_once'../include/bdd.php';

class inscription {
	private $pseudo;
	private $email;
	private $mdp;
	private $mdp2;
	private $bdd;

	public function __construct($pseudo,$email,$mdp,$mdp2){

	$pseudo = htmlspecialchars($pseudo);//Protége la variable pseudo des scrip qu'il peut y avoir dans le pseudo
	$email = htmlspecialchars($email);//Protége la variable email des scrip qu'il peut y avoir dans l' e-mail

	$this->pseudo = $pseudo;
	$this->email = $email;
	$this->mdp = $mdp;
	$this->mdp2 = $mdp2;
	$this->bdd = bdd();

	}
	public function verif() {
		if(strlen($this->pseudo) > 5 AND strlen($this->pseudo) <20) {
			/*Si le pseudo est bon */
			$syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
			if(preg_match($syntaxe,$this->email)) {
				/*Email Bon!*/
				if(strlen($this->mdp) > 5 AND strlen($this->mdp) <20) {
					/*Le Mot de passe est bon!*/
					if($this->mdp == $this->mdp2) {
						/*Les mot de passe sont identiques!*/
					}
					else
					{
						$erreur = 'Le mot de passe et le mot de passe de confirmation sont incorect!';
						return $erreur;
					}


				}
				else
				{
				/*Le Mot de passe est mauvai!*/
				$erreur = 'Le mot de passe doit contenir en 5 est 20 carractére!';
				return $erreur;
				}
			}
			else
			{
				/*Email mauvai*/
				$erreur = 'L\'adresse email est invalide!';
			}
		}
		else {
			/*Pseudo mauvai*/
			$erreur = 'Le pseudo doit contenir entre 5 et 20 caractères';
			return $erreur;
		}



	}

	public function enregistrement() {
		$requete = $this->bdd->prepare('INSERT INTO membres(pseudo,email,motdepasse) VALUES(:pseudo,:email,:motdepasse)');
		$requete->execute(array(
				'pseudo'=> $this->pseudo,
				'email'=> $this->email,
				'motdepasse'=> $this->mdp
			));
				return 1;
	}


}
?>