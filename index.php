<?php
require_once 'util/fonctions.php';
if(!isset($_REQUEST['action']))
    $action = 'accueil';
else 
    $action = $_REQUEST['action'];
 include "vues/entete.html";
switch($action)
{
    case 'accueil':
        include "vues/pageconnexion.php";
        include "vues/pagemenuaccueil.php";
        break;
    case 'inscription':
       include "vues/pageinscription.php";
        break;
    case 'gereroffresdepartentreprise':
        $lesOffres = getLesOffresDepartEntreprise();
        include "vues/pageoffresdepartentreprise.php";
        include "vues/pageoffre.php";
        break;
    
}













?>
</body>
</html>
