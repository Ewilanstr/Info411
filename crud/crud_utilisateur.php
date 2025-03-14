<?php

function create_user($conn,$mail,$mdp){
    $sql = "INSERT INTO `utilisateur` (`mail`, `mdp`) VALUES ('$mail', '$mdp')";
    global $debug ;
	if($debug) echo $sql ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

