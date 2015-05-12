<?php
session_start();
define("DEPART", 1);
define("ARRIVE", 2);
require_once 'util/fonctions.php';
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} 
else {
    $action = $_REQUEST['action'];
}

include "vues/entete.html";
switch ($action) {
    case 'accueil':
        include "vues/pageconnexion.php";
        include "vues/pagemenuaccueil.php";
        break;

    case 'inscription':
        include "vues/pageinscription.php";
        break;

    case 'gereroffresdepartentreprise':
        $_SESSION['type'] = DEPART;
        $lesOffres = getLesOffresDepartEntreprise();
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffresdepartentreprise.php";
        include "vues/pageoffre.php";
        break;

    case 'gereroffresarriveeentreprise':
        $_SESSION['type'] = ARRIVE;
        $lesOffres = getLesOffresArriveeEntreprise();
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffresdepartentreprise.php";
        include "vues/pageoffre.php";
        break;

    case 'gerermesoffres':
        if( !isset( $_SESSION['user']) ){
            header('Location: index.php');
        }else{
            $user = $_SESSION['user'];
        }
        $departs = getLesOffresDepartEntreprise();
        $arrivee = getLesOffresArriveeEntreprise();
        include "vues/pagemesoffres.php";
        break;

    case 'contacter':
        $users = getUserLesOffresDepartEntreprise();
        include "vues/pagecontact.php";
} ?>
</body>
</html>
