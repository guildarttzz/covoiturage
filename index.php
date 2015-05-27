<?php
session_start();
require_once 'util/fonctions.php';
if(!isset($_REQUEST['action'])||(!estConnecte() && $_REQUEST['action']!='inscription')  )
    $action = 'accueil';
else 
    $action = $_REQUEST['action'];
  include "vues/entete.html";
switch($action)
{
    case 'accueil':
        include "vues/pageconnexion.php";
        break;
    case 'inscription':
          include "vues/pageinscription.php";
        break;
    case 'gereroffresdepartentreprise':
        $_SESSION['choix'] = "departentreprise";
        $lesOffres = getLesOffresDepartEntreprise();
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffre.php";
        break;
    case 'gereroffresarriveeentreprise':
         $_SESSION['choix'] = "arriveeentreprise";
        $lesOffres = getLesOffresArriveeEntreprise();
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffre.php";
         break;
     case 'gerermesoffres':
         $id = $_SESSION['id'];
         $lesOffresArriveeEntreprise = getMesOffresArriveeEntreprise($id);
         $lesOffresDepartEntreprise = getMesOffresDEpartEntreprise($id);
          include "vues/pagegerermesoffres.php";
          break;
     default :
         include "vues/pageconnexion.php";
   }













?>
</body>
</html>
