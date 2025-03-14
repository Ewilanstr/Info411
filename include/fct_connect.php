<?php

    session_start();

    $connexion = db_connect();

    function est_connecte($conn,$mail,$mdp){
        $sql = "SELECT `mail`, `mdp` FROM `utilisateur` WHERE `mail`='$mail'";
       
        $res = mysqli_fetch_assoc(mysqli_query($conn, $sql));

        if ($res['mdp'] == $mdp) {
            $res = true;
        }
        else{
            $res = false;
        }
        return $res;
    }

    if (est_connecte($connexion,$_POST['mail'],$_POST['mdp'])){
        $_SESSION['mail'] = $_POST['mail'];
    }
    else{
        echo "Connexion echouée";
    }





?>