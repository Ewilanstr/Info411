<?php
    require_once('include/connexion.php');
    include('crud/crud_utilisateur.php');

    $conn = db_connect();

    // 1. Test si la connexion est bien là
    if (!$conn) {
        die("❌ Connexion échouée");
    }

    // 2. Test la requête
    $result = mysqli_query($conn, "SELECT * FROM utilisateur");
    if (!$result) {
        die("❌ Erreur SQL : " . mysqli_error($conn));
    }

    // 3. Vérifie si des lignes sont retournées
    if (mysqli_num_rows($result) === 0) {
        die("⚠️ Aucune donnée trouvée dans la table utilisateur.");
    }

    // 4. Sinon, on affiche pour debug
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<pre>";
        print_r($row); // Voir tout le contenu de la ligne
        echo "</pre>";
    }
?>


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="data">
        <h1>Utilisateurs :</h1>
    </div>
</body>
</html>


<script src="js/monscriptquitue.js"></script>