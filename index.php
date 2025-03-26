<?php

    include('include/connexion.php');
    //include('include/fct_connect.php');
    include('crud/crud_utilisateur.php');

    $connexion = db_connect();

    $co = false;

    function est_connecte($conn,$mail,$mdp){

        global $co;
        $co = true;
        $sql = "SELECT `mail`, `mdp` FROM `utilisateur` WHERE `mail`='$mail'";

       
        $res = mysqli_fetch_assoc(mysqli_query($conn, $sql));

        if ($res['mdp'] == $mdp && $co) {
            $res = true;
        }
        else{
            $res = false;
        }
        return $res;
    }
    $_SESSION["mail"] = $_POST['mail'];
    var_dump($_SESSION);
    if (est_connecte($connexion,$_POST['mail'],$_POST['mdp'])){
        if (!isset($_SESSION)) {
            session_start();
        }
        var_dump($_SESSION);
        header('Location: include/liste.php');
        
    }
    else{
        echo "Connexion echouée";
        session_destroy();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page-connexion">
        <form action="index.php" method="post">
            <input type="text" name="mail" placeholder="Login">
            <input type="password" name="mdp" placeholder="mot de passe">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    </div>
</body>
</html>


<?php

    if(isset($_POST)){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $btn_co = $_POST['connexion']; 
        
        if($btn_co == ""){
            $connexion = db_connect();
            $result = select_user($connexion,$mail,$mdp);
        }


    }

?>