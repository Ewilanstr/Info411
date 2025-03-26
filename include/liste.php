<?php

    session_start();

    if (!isset($_SESSION["mail"])) {
        header('Location: ../index.php');
    }
    include('../crud/crud_utilisateur.php');

    echo "Bonjour ". $_SESSION["mail"]; 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php    

?>
