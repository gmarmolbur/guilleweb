<?php 
session_start();
session_unset();
session_destroy();
header("Location: http://www.guille.techtalents.cool/index.php");
	die();
?>