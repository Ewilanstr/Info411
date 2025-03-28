<?php


    include("../include/connexion.php");
    include("crud_utilisateur.php");

    $bdd = db_connect();

    $users = list_user($bdd);

    // Deja en json, pas besoin d'encoder

    header('Content-Type: application/json; charset=UTF-8'); 
    echo $users;

?>