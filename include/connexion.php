<?php
    require('../connect.php');

	function db_connect(){

	
	
		$CONNEXION = mysqli_connect (SERVEUR_BD, MARIADB_USER, MARIADB_ROOT_PASSWORD);
		//Connexion au serveur de bases de données
		if (mysqli_connect_errno()) {
			echo 'Désolé, connexion au serveur ' . SERVEUR_BD . ' impossible, '. mysqli_connect_error(), "\n";
			exit();
		}
		// Sélection de la base de données
		mysqli_select_db($CONNEXION, MARIADB_DATABASE);
		if (mysqli_connect_errno()) {
			echo 'Désolé, accès à la base ' . MARIADB_DATABASE . ' impossible, '. mysqli_connect_error(), "\n";
			exit();
		}
		// Spécification de l'encodage UTF-8 pour dialoguer avec la BD
		if (!mysqli_set_charset($CONNEXION, 'UTF8')) {
			echo 'Erreur au chargement de l\'encodage UTF-8 : ', mysqli_connect_error(), "\n";
		}

		return $CONNEXION;

	}

?>