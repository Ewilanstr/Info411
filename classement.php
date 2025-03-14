<?php

    include('include/connexion.php');
    include('include/fct_connect.php');
    include('crud/crud_utilisateur.php');

    session_start();
    echo "Salut : ".$_SESSION['mail'];

?>