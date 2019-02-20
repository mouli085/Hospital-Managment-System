<?php 
mysql_connect("localhost","root","");
mysql_select_db("my_db");
$pass=mysql_real_escape_string($_POST['pass']);
$conpass=mysql_real_escape_string($_POST['confirmpass']);
if($pass==$conpass)
echo " <img src='check-mark-button.png'  class='icon'> ";
else echo "<img src='error.png' class='icon' >";
 ?>
 <style type="text/css">
 	.icon{
 		height: 35px; width: 35px; background-color: white; 
 		border: none;
 		border-radius: 35px;
 	}
 </style>