<?php
require_once '../util/fonctions.php';

$lesId =  $_REQUEST['lesIdOffres'];

/* à faire dans une prochaine itération, en base de données*/
// $lesId = supprimerOffres($lesId);
echo json_encode($lesId);
?>
