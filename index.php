<?php
    session_start();
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
$titre = 'Acceuil';
include('/include/head.php');
?>
    <div id="menudroite">
<?php 
        if(isset($_SESSION['pseudo'])) { ?>
<div class="block"> 
    <div id="espace_membre">
            <span style="float:left; margin-left:7px; ">
        <img src="https://minotar.net/avatar/<?php echo $_SESSION['pseudo']; ?>/64.png" />
    </span>
    <span style="margin: 1px 0px 0px 10px; float: left;">
    Bienvenu ,<br /> <?php echo $_SESSION['pseudo']; ?>
    </span>
    <p style="clear:both;"> </p>
    <a href="membre.php">Mon Profil</a><br />
    <a href="deconnextion.php">Déconnextion</a><br />
<?php if($_SESSION['pseudo'] AND $rang == "Administrateur") { ?>
<a href="admin">Administration</a>
</div>
</div>
    <?php } } else { ?>
<div class="block">
        <h3><a href="/connextion.php">Connexion</a></h3>
        <div id="connexion" style="font-weight:bold;">
            <form action="connextion.php" method="post">
                Pseudo : <input type="text" name="pseudo" value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo'];} ?>" /><br />
                Mot de passe : <input type="password" name="motdepasse" value="<?php if(isset($_POST['motdepasse'])) { echo $_POST['motdepasse'];} ?>" /><br />
                <input type="submit" name="envoyer" value="Se connecter" /><a href="inscription.php">Inscription</a></span>
            </form>
        </div>
    </div>
     <?php
    }
    ?>
</div>
</div>
</div>
<?php
    //Les base de donné Mysql   ancienne version

    //Les base de donné Mysql

    //Connextion a la base de donné
    //mysql_connect('mysql.hostinger.fr', 'u903804580_ph', 'jimskeule');
    //mysql_select_db('u903804580_ph')
    //Connextion a la base de donné

    //Ajouter des entrées/donnée
    //$ajouter_donnee =  mysql_query("INSER INTO NOMDELATABLE VAALUES('', Jean')"); //La requet va inséré dans le nom de la table que vous avez entrée Jean
    //Ajouter des entrées/donnée

    //Modifier une donnée
    //$modifier_donnee = mysql_query('UPDATE NOMDELATABLE SET NOMDELACOLONE = "Jeanne" WHERE id = N°del\'id''); // Modifie dans la colone prenom l'id n° de l'id qui est dans la table NOMDELATABLE dans notre cas sa changera Jean par Jeane
    //Modifier une donnée

    //Supprimé  une donnée
    //$supprimer_donne = mysql_query('DELETE FROM NOMDELATABLE WHERE id = N°del\'id''); // Supprime la ligne qui a l'id du n°
    //Supprimé  une donnée

    //Afficher une donné

    //Affiché tous se qu'il y a dans une colone selection
    //$lire_donnee = mysql_query('SELECT * FROM NOMDELACOLONE'); // Mysql lit toutes la colone
    //while($resultat = mysql_fetch_array($lire_donne)) {
    //echo $resultat['NOMDELACOLONE'].<br />;// Affiche tous se qu'il y a écrie dans la colone NOMDELACOLONE
    //}
    //Affiché tous se qu'il y a dans une colone selectionné

    //Afiiché tous se qu'il y a dans un id selectionné
    //$lire_donnee = mysql_query('SELECT * FROM NOMDELACOLONE WHERE id = N°del\'id'); // Mysql lit l'id que vous avez choisi qui est dans la colone NOMDELACOLONE
    //while($resultat = mysql_fetch_array($lire_donne)) {
    //echo $resultat['NOMDELACOLONE'].<br />;// Affiche tous se qu'il y a écrie dans la colone NOMDELACOLONE
    //}
    //Affiché tous se qu'il y a dans un id selectionné

    //Affiché tous se qu'il y a dans les id selectionné de bas en haut
    //$lire_donnee = mysql_query('SELECT * FROM NOMDELACOLONE ORDER BY id DESC LIMIT n°id,n°id'); // Mysql lit de l'id n° a l'id n°
    //while($resultat = mysql_fetch_array($lire_donne)) {
    //echo $resultat['NOMDELACOLONE'].<br />;// Affiche tous se qu'il y a écrie dans la colone NOMDELACOLONE
    //}

    //Affiché tous se qu'il y a dans un id selectionné

    //Affiché un erreur plus simplement

    //$lire_donnee = mysql_query('SELECT * FROM NOMDELACOLONEs ORDER BY id DESC LIMIT n°id,n°id') or die(mysql_error()); //Mysql dit que vous avais mis un erreur au nom de la table 
    //while($resultat = mysql_fetch_array($lire_donne)) {
    //echo $resultat['NOMDELACOLONE'].<br />;
    //}

    //Affiché un erreur plus simplement

    //Les base de donné Mysql ancienne version











    //Les base de donné Mysql nouvelle version

    //Connextion a la base de donné
    //$bdd = new PDO('mysql:host=localhost;dbname=u903804580_ph', 'u903804580_ph', 'jimskeule')
    //Connextion a la base de donné

    //Ajouter des entrées/donnée
    //$ajouter_donnee =  $bdd->query("INSER INTO NOMDELATABLE VAALUES('', Jean')"); //La requet va inséré dans le nom de la table que vous avez entrée Jean
    //Ajouter des entrées/donnée

    //Modifier une donnée
    //$modifier_donnee = $bdd->query('UPDATE NOMDELATABLE SET NOMDELACOLONE = "Jeanne" WHERE id = N°del\'id''); // Modifie dans la colone prenom l'id n° de l'id qui est dans la table NOMDELATABLE dans notre cas sa changera Jean par Jeane
    //Modifier une donnée

    //Supprimé  une donnée
    //$supprimer_donne = $bdd->query('DELETE FROM NOMDELATABLE WHERE id = N°del\'id''); // Supprime la ligne qui a l'id du n°
    //Supprimé  une donnée

    //Afficher une donné

    //Affiché tous se qu'il y a dans une colone selection
    //$lire_donnee = $bdd->query('SELECT * FROM NOMDELACOLONE'); // Mysql lit toutes la colone
    //while(($resultat = $lire_donnee->fetch()) {
    //echo $resultat['NOMDELACOLONE'].<br />;// Affiche tous se qu'il y a écrie dans la colone NOMDELACOLONE
    //}
    //Affiché tous se qu'il y a dans une colone selectionné

    //Afiiché tous se qu'il y a dans un id selectionné
    //$lire_donnee = $bdd->query('SELECT * FROM NOMDELACOLONE WHERE id = N°del\'id'); // Mysql lit l'id que vous avez choisi qui est dans la colone NOMDELACOLONE
    //while($resultat = $resultat = $lire_donnee->fetch()) {
    //echo $resultat['NOMDELACOLONE'].<br />;// Affiche tous se qu'il y a écrie dans la colone NOMDELACOLONE
    //}
    //Affiché tous se qu'il y a dans un id selectionné

    //Affiché tous se qu'il y a dans les id selectionné de bas en haut
    //$lire_donnee = $bdd->query('SELECT * FROM NOMDELACOLONE ORDER BY id DESC LIMIT n°id,n°id'); // Mysql lit de l'id n° a l'id n°
    //while($resultat = $lire_donnee->fetch()) {
    //echo $resultat['NOMDELACOLONE'].<br />;// Affiche tous se qu'il y a écrie dans la colone NOMDELACOLONE
    //}

    //Affiché tous se qu'il y a dans un id selectionné

    //Affiché un erreur plus simplement

    //$lire_donnee = mysql_query('SELECT * FROM NOMDELACOLONEs ORDER BY id DESC LIMIT n°id,n°id') or die(mysql_error()); //Mysql dit que vous avais mis un erreur au nom de la table 
    //while($resultat = $lire_donnee->fetch()) {
    //echo $resultat['NOMDELACOLONE'].<br />;
    //}

    //Affiché un erreur plus simplement

    //Les base de donné Mysql nouvelle version











    //Ecriture d'un fichier

    //$fichier = fopen('NOMDUFICHER.txt', 'r+');//Ouverture de NOMDUFICHER.txt
    //r = lecture seule
    //r+ = lecture et écriture
    //a = écriture seule (création automatique)
    //a+ = lecteur et écriture (création automatique)
    //$ligne = fgets($fichier);//Lit la premiére ligne du fichier
    //echo $ligne;//Affiche la varriable ligne
    //fseek($fichier, 0);//Ecrie a partir du début du fichier ou remet a zéro
    //$ecrire = fputs($fichier, 'Salut se texte a était écrire par un scrip!et a était écrie devant le premié');//Ecrie un texte
    //$pages_vues = fgets($fichier);//Lecture premiére ligne
    //$pages_vues++;//Ajout +1 chiffre pages vue
    //fseek($fichier, 0);//Remet le curseur au début
    //fputs($fichier,$pages_vues);//On écrit le nombre



    //fclose($fichier);//Fermeture du fichier

    //echo 'Cette page a était visiter '.$pages_vues.' fois ';

        $v1 = $bdd->query('SELECT id, contenu, auteur, titre, DATE_FORMAT(date_ajout, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles ORDER BY id DESC LIMIT 0,10');
        while($info_articles = $v1->fetch()) {



    ?>
    <div id="new"> 
    <p style="text-align: center;"><i><a href="post.php?id=<?php echo $info_articles['id'];?>"> <?php echo htmlspecialchars($info_articles['titre']); ?></a></i></p>
    <hr />
    <?php echo nl2br(htmlspecialchars($info_articles['contenu'])); ?><br />
    <p style="text-align: center;">Ajouté le <?php echo $info_articles['date_creation_fr']; ?> Par <?php echo $info_articles['auteur']; ?></p>
    </div>
    <?php
    }

include('include/footer.php');

?>

