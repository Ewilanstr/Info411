<?php
include("../include/connexion.php");
$json_data = file_get_contents('feed.json'); // Read the JSON file
$data = json_decode($json_data, true);

$arr = json_decode($data);

define ('SERVEUR_BD','localhost');
define ('LOGIN_BD','root');
define ('PASS_BD','');
define ('NOM_BD','test'); 

$conn = db_connect();

foreach($arr as $item) { 
    if($item["categorie"] == 2){
        $nom = $item["title"] ;
        $img = $item["image"] ;
        $sql = "INSERT INTO `jeux` (`id`, `nom`, `Image`) VALUES (NULL, '$nom', '$img');";
        mysqli_query($conn, $sql);
        var_dump($nom);
    }
}