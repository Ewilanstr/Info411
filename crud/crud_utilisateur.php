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

function rs_to_tab_user($conn){
	$tab = array() ; 
	while($ligne=mysqli_fetch_assoc($conn)){
		$tab[] = $ligne ; 
	}
	return $tab ; 
}

function list_user($conn){
	$sql="SELECT * FROM `utilisateur`"; 
	global $debug ;
	if($debug) echo $sql ; 
	$res=mysqli_query($conn, $sql) ; 
	return json_encode(rs_to_tab_user($res)) ;
}


