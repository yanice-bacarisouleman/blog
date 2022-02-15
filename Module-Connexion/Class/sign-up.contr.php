<?php
class SignupContr extends Signup{

	protected $uid; 
	protected $pwd; 
	protected $pwdrepeat; 
	protected $email; 

//=========
	public function __construct($uid, $pwd, $pwdrepeat, $email) {
		$this->uid =$uid;
		$this->pwd =$pwd;
		$this->pwdrepeat =$pwdrepeat;
		$this->email =$email;

	}


//=========
	public function signupUser(){
 
		if($this->invalidUid() == false){ 
		
			header("location: ../index.php?invalidUid");
			exit();
		}

		if($this->uidTaken() == false){ 
		
			header("location: ../index.php?uidTaken");
			exit();

		}

		if($this->invalidEmail() == false){ 
		
			header("location: ../index.php?invalidEmail");
			exit();
		}
	
		if($this->pwdMatch() == false){ 
		
			header("location: ../index.php?confirmPwd");
			exit();
		}

		$this->setUser($this->uid, $this->pwd, $this->email);
}


//==========
	private function invalidUid(){
		$result; 
		if(!preg_match("/^[a-zA-Z0-9]*$/" ,$this->uid)){

			$result = false;
		
		}else{
		
			$result = true; 
		
		}
		return $result; 

	}
//===========
	private function uidTaken(){
		$result;
		if(!$this->checkUser($this->uid, $this->email)){
		
			$result = false;
		
		}else{
		
			$result = true;
		
		}
		return $result; 
	}

//==========

	private function invalidEmail(){
		$result;
		if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
		
			$result = false;

		}else{
		
			$result = true; 
		}
		
		return $result;
	}

//=========

	private function pwdMatch(){
		$result;
		if($this->pwd !== $this->pwdrepeat){
		
			$result = false;
		
		}else{
		
			$result = true;
		}
		return $result; 
	}

}