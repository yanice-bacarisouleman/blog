<?php

include "../Class/dbh.class.php";
include "../Class/login.class.php";
include "../Class/login.contr.php";

if(isset($_POST["submit"])) {

	$uid =$_POST["uid"];
	$pwd=$_POST["pwd"];
	

$login = new LoginContr($uid, $pwd);

$login->loginUser();
header("location: ../index.php");

}