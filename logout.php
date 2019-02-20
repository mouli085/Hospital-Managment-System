<?php  
session_start();
$_SESSION['login']="";
session_destroy();
if (isset($_SESSION['username'])|| isset($_COOKIE['username'])) {
	setcookie("username",$username,time()-30);
setcookie("type",$type,time()-30);
setcookie("password",$pass,time()-30);
		
		
	}

header("location:home.php");
?>