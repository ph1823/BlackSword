<?php
$titre = case;

switch($_GET['erreur'])
{
   case '400':
   echo '
<?php include('include/head.php'); ?>
   <p>Échec de l\'analyse HTTP</p>
<?php include('include/footer.php');
?>';
   break;
   case '401':
   echo '
<?php include('include/head.php'); ?>
   Le pseudo ou le mot de passe n\'est pas correct !
include('include/footer.php');
?>';
   break;
   case '402':
   echo '
<?php include('include/head.php'); ?>
   Le client doit reformuler sa demande avec les bonnes données de paiement.
<?php include('include/footer.php');
?>';
   break;
   case '403':
   echo '
<?php include('include/head.php'); ?>
   Requête interdite !
<?php include('include/footer.php');
?>';
   break;
   case '404':
   echo "<?php include('include/head.php'); ?>
   La page demandé n exite plus!
<?php include('include/footer.php');
?>";
   break;
   case '405':
   echo '
<?php include('include/head.php'); ?>
   Méthode non autorisée.
include('include/footer.php');
?>';
   break;
   case '500':
   echo '
<?php include('include/head.php'); ?>
   Erreur interne au serveur ou serveur saturé.
<?php include('include/footer.php');
    ?>';
   break;
   case '501':
   echo '<?php include('include/head.php'); ?>
   Le serveur ne supporte pas le service demandé.
<?php include('include/footer.php');
    ?>';
   break;
   case '502':
   echo '
<?php include('include/head.php'); ?>
   Mauvaise passerelle.
<?php include('include/footer.php');
    ?>';
   break;
   case '503':
   echo '
<?php include('include/head.php'); ?>
   Service indisponible.
<?php include('include/footer.php');
    ?>';
   break;
   case '504':
   echo '
<?php include('include/head.php'); ?>
   Trop de temps à la réponse.
<?php include('include/footer.php');
    ?>';
   break;
   case '505':
   echo '
<?php include('include/head.php'); ?>
   Version HTTP non supportée.
      <?php include('include/footer.php');
    ?>';
   break;
   default:
   echo 'Erreur !';
}
?>