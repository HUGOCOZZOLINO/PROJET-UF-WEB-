<?php
session_start();
function est_connecte () {            //vérifier si l utilisateur est connecte 
    return !empty($_SESSION['connecte']);
}

function forcer_utilisateur_connecte () {
if(!est_connecte()){
header('Location: /login.php');    //pas co redirection vers login.php
exit();
    }
}