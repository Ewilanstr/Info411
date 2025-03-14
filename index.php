<?php

    include('include/connexion.php');
    include('include/fct_connect.php');
    include('crud/crud_utilisateur.php');

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

        var_dump($_POST);

        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $btn_co = $_POST['connexion']; 
        
        if($btn_co == ""){
            $connexion = db_connect();
            $result = create_user($connexion,$mail,$mdp);
            if($result){
                echo "Connexion reussie";
            }else{
                echo "Connexion echouée";
            }
        }


    }

?>