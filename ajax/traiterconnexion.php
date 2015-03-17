<?php
    require_once '../util/fonctions.php';
    $mdp = $_REQUEST['mdp'];
    $login = $_REQUEST['login'];
    echo verifuser($login, $mdp);
?>
