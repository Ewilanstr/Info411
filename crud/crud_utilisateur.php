<?php

function create_user($conn,$mail,$mdp){
    $sql = "INSERT INTO `utilisateur` (`mail`, `mdp`) VALUES ('$mail', '$mdp')";
    global $debug ;
	if($debug) echo $sql ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

function select_user($conn,$mail,$mdp){
    $sql = "SELECT `mail`, `mdp` FROM  `utilisateur` WHERE 'mail'='$mail' AND 'mdp'= '$mdp'";
    global $debug ;
	if($debug) echo $sql ; 
	$res=mysqli_query($conn, $sql) ; 
	return $res ; 
}

