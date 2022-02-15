<?php 

class Login extends Dbh {

	protected function getUser($uid,$pwd ){
		$stmt = $this->connect()->prepare('SELECT password FROM utilisateurs WHERE login = ? OR email = ?;');

		if(!$stmt->execute(array($uid, $pwd))){
			$stmt = null;
			header("location ../index.php?error=stmtloginfailed");
			exit();
			}
	
		if($stmt->rowCount() == 0){
			$stmt = null;
			header("location: ../index.php?userdoesntexist");
			exit();
			}

		$pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$checkpwd = password_verify($pwd, $pwdhashed[0]["password"]);

		if($checkpwd == false){
			header("location: ../index?falsepwd");
			exit();
		

		}elseif($checkpwd == true){
			$stmt = $this->connect()->prepare('SELECT * FROM utilisateurs WHERE login = ? OR email = ? AND password = ?;');

			if(!$stmt->execute(array($uid, $uid, $pwd))){
				$stmt = null; 
				header("location: ../index.php?nothingvalid");
				exit();
			}
	
			if($stmt->rowCount() == 0){
				$stmt = null ;
				header("location: ../index.php?usernotfound");
				exit();
			}

			$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
			session_start();
			$_SESSION['userid'] = $user[0]["id"];
			$_SESSION['useruid'] = $user[0]["login"];

		}

		$stmt = null;
	}

}