<?php  
session_start();
$username= $_POST['username'];
$password= $_POST['pass'];
$con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("my_db", $con);
if (isset($_POST['search'])) {
	$res = mysql_query("select * from patient where username = '$username' and pass = '$password' ")  or die();
		if (mysql_num_rows($res)==1) {
			$row= mysql_fetch_array($res);
			$_SESSION['name']=$row['Name'];
			$_SESSION['bill']=$row['bill'];
			$_SESSION['email']=$row['email'];
			$_SESSION['mobile']=$row['mobile'];
			$_SESSION['gender']=$row['gender'];
			header("location: amountshow.php");
			
		}
		
	}
	

?>