<?php

    session_start();

    var_dump($_SESSION);

    echo "Bonjour ". $_SESSION["mail"]; 

?>