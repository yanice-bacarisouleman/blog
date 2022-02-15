<?php
include "../Class/dbh.class.php";
include "../Class/sign-up.class.php";
include "../Class/sign-up.contr.php";

if(isset($_POST["submit"])) {

	$uid =$_POST["uid"];
	$pwd=$_POST["pwd"];
	$pwdrepeat=$_POST["pwdrepeat"];
	$email=$_POST["email"];

$signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

$signup->signupUser();
header("location: ../index.php");



}