<?php
/* On désactive les erreurs tant que les 
 * fonctions de vérification ne sont pas faites
 */
error_reporting(0);

require dirname(dirname(__FILE__)) . '/util/fonctions.php';

$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$mail = $_REQUEST['mail'];
$type = $_REQUEST['type'];
$tel = $_REQUEST['tel'];
// enregistrerEnBase(...); pas dans cette itération
// générer le nom de user : à faire
// générer le mdp travail à faire


$login = substr($prenom, 0, 1).$nom;
$mdp = keygen(4);



echo "login : ".$login."<br>Mot de passe : ".$mdp."<br>Merci de votre visite et à bientôt";
?>
