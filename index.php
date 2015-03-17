<?php
require_once 'util/fonctions.php';
include "vues/entete.html";
if(!isset($_REQUEST['action']))
    $action = 'accueil';
else 
    $action = $_REQUEST['action'];
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
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffre.php";
        break;
 }













?>
</body>
</html>
