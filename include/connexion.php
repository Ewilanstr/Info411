<?php
    require('../connect.php');

	function db_connect() {
		$CONNEXION = mysqli_connect(SERVEUR_BD, MARIADB_USER, "Password2025!", MARIADB_DATABASE);
	
		if (!$CONNEXION) {
			echo 'Désolé, connexion au serveur ' . SERVEUR_BD . ' ou à la base ' . MARIADB_DATABASE . ' impossible : ' . mysqli_connect_error();
			exit();
		}
	
		if (!mysqli_set_charset($CONNEXION, 'UTF8')) {
			echo 'Erreur au chargement de l\'encodage UTF-8 : ', mysqli_connect_error(), "\n";
		}
	
		return $CONNEXION;
	}

?>