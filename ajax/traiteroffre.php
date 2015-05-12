<?php

session_start();
define("DEPART", 1);
define("ARRIVE", 2);
require_once dirname(dirname(__FILE__)) . '/util/fonctions.php';

$return = array();
if( isset($_REQUEST['offre']) ){
    $offre = array();

    if( $_SESSION['type'] == DEPART ){
        $lesOffres = getLesOffresDepartEntreprise();
    } else {
        $lesOffres = getLesOffresArriveeEntreprise();
    }

    foreach ( $lesOffres as $o ) {
        if( $o['id'] == $_REQUEST['offre'] ){
            $offre = $o;
            break;
        }
    }

    if( empty($offre) ){
        $return = array(
            "e" => "L'offre demandée n'existe pas"
        );
    } else {
        $return = $o;
    }
} else {
    $return = array(
        "e" => "Aucune offre n'a été demandée"
    );
}

echo json_encode( $return );