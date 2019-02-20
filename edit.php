<?php 
session_start();
    $username=$_POST['username'] ;    
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("my_db", $con);
       if( isset($_POST['edit_value']) ){
	      	$new_name= $_POST['new_name'];
	      	$new_birth= $_POST['new_birth'];
	      	$new_gender= $_POST['new_gender'];
	      	$new_pass= $_POST['new_pass'];
	      	$new_mobile= $_POST['new_mobile'];
	      	$res1=mysql_query("update patient set Name = '$new_name' where username='$username'");
	      	$res2=mysql_query("update patient set gender = '$new_gender' where username='$username'");
	      	$res3=mysql_query("update patient set Birth = '$new_birth' where username='$username'"); 
	      	$res4=mysql_query("update patient set pass = '$new_pass' where username='$username'");
	      	$res5=mysql_query("update patient set mobile = '$new_mobile' where username='$username'");      	

	      	  if ($res1&&$res2 && $res3 && $res4 && $res5)    	
	      	{
				$_SESSION['birth']=$_POST['new_birth'];
				$_SESSION['name']=$_POST['new_name'];
				$_SESSION['gender']=$_POST['new_gender'];
	      		 $_SESSION['pass']=$_POST['new_pass'];
	      		 $_SESSION['mobile']=$_POST['new_mobile'];

				header("location: Patient_profile.php");
	      	} 
	      	else {
	      		echo mysql_error();
	      	}
		}
		
		elseif( isset($_POST['appointment']) ){
			$patient = $_POST['patient'];
			$doctor = $_POST['doctor'];
			$date = $_POST['date'];
			$time = $_POST['time'];

			$res= mysql_query("INSERT INTO appointment VALUES ('$patient','$doctor','$time','$date')") ;
			header("location: Patient_profile.php");

		}
?>