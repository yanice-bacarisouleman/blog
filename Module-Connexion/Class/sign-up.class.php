<?php
class Signup extends Dbh {


	protected function setUser($uid, $pwd, $email){
		$stmt = $this->connect()->prepare('INSERT INTO utilisateurs (login, password, email,id_droits) VALUES (?,?,?,1);');

		$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);



if(!$stmt->execute(array($uid, $hashedpwd, $email))){
			$stmt = null;
			header("location: ../index.php?error=stmtinputfailed");
			exit();
		}
		$stmt = null;
}




	protected function checkUser($uid, $email){
		$stmt = $this->connect()->prepare('SELECT login FROM utilisateurs WHERE login = ? OR email = ?;');

		if(!$stmt->execute(array($uid, $email))) {
			$stmt = null;
		header("location: ../index.php?stmtfailed");
		exit();	

		}
		$resultCheck;
		if($stmt->rowCount() > 0){
			$resultCheck = false;
		}else{
			$resultCheck = true;
		}
		return $resultCheck;
	}
}