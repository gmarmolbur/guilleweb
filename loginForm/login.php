<?php 

//echo var_dump($_POST);

$mailCorrecto = "email@mail.com";
$passCorrecto = "mipassword";

if($_POST["email"] == $mailCorrecto && $_POST["pass"] == $passCorrecto){
	session_start();
	$_SESSION["userid"]="jefe";
	header("Location: ../content.php");
	die();
}else{
	session_unset();
	session_destroy();
	header("Location: http://www.guille.techtalents.cool/loginForm/index.php?incorrectPass=true");
	die();
}

?>