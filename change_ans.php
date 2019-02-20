<?php 
session_start();
$type=$_SESSION['type'];    
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
 
mysql_select_db("my_db", $con);
 $ques = $_POST['ques'];
 $name = $_POST['name'];
 $ans = $_POST['ans'];
$res=mysql_query("update faq set ans = '$ans' where ques= '$ques' ");
header("location: view_ques.php");
				
 ?>