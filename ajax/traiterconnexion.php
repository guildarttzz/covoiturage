<?php
session_start();
require_once '../util/fonctions.php';

$mdp = $_REQUEST['mdp'];
$login = $_REQUEST['login'];

if( verifuser($login, $mdp) ){
    $_SESSION['user'] = verifuser($login, $mdp);
    echo 'connected';
}