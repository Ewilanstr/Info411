<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include("../include/connexion.php");
$json_data = file_get_contents('feed.json'); // Read the JSON file
$data = json_decode($json_data, true);
$conn = db_connect();
var_dump(intval(mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `jeux` where `nom` = 'Crawl'"))[0]));

foreach ($data as $item) {
    if ($item["categorie"] == 2) {
        $nom = $item["title"];
        $img = $item["image"];
        $compte = intval(mysqli_fetch_array(mysqli_query($conn, 'SELECT COUNT(*) FROM `jeux` where `nom` = "'.$nom.'"'))[0]);
        var_dump($compte);
        if ($compte == 0) {
            $sql = 'INSERT INTO `jeux` (`id`, `nom`, `Image`) VALUES (NULL, "'.$nom.'" , "'.$img.'");';
            mysqli_query($conn, $sql);
            var_dump($nom);
        }
    }
}
