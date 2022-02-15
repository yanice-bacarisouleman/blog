<?php

//db_com = data_commentaire, db_mod = data_module-connexion

class Dbh{

	protected function connect() {
		try {
			
			$username = "root";
			$password = "";
			$db_mod= new PDO('mysql:host=localhost;dbname=blog', $username, $password);
			$db_com = new PDO('mysql:host=localhost;dbname=comments',$username ,$password);
			return $db_mod;
			return $db_com;
		
		} catch (PDOException $e) {
			print "error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}