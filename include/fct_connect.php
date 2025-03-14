<?php

    include('db_connect.php');
    include('db_disconnect.php');
    session_start();

    $connexion = db_connect();

    var_dump($_POST);
    var_dump($_SESSION);

    





?>