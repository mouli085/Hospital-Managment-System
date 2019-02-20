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
	      	$res1=mysql_query("update admin set Name = '$new_name' where username='$username'");
	      	$res2=mysql_query("update admin set gender = '$new_gender' where username='$username'");
	      	$res3=mysql_query("update admin set Birth = '$new_birth' where username='$username'"); 
	      	$res4=mysql_query("update admin set pass = '$new_pass' where username='$username'");
	      	$res5=mysql_query("update admin set mobile = '$new_mobile' where username='$username'");      	

	      	  if ($res1&&$res2 && $res3 && $res4 && $res5)    	
	      	{
				$_SESSION['birth']=$_POST['new_birth'];
				$_SESSION['name']=$_POST['new_name'];
				$_SESSION['gender']=$_POST['new_gender'];
	      		 $_SESSION['pass']=$_POST['new_pass'];
	      		 $_SESSION['mobile']=$_POST['new_mobile'];

				header("location: Admin_profile.php");
	      	} 
	      	else {
	      		echo mysql_error();
	      	}
		}
		
		elseif (isset($_POST['addbill'])) {
			$bill= mysql_real_escape_string ($_POST['bill']);
			$result=mysql_query("select * from patient where username='$username'");
			
       		  $row=mysql_fetch_array($result);
       		  $due=$row['bill'];
       		  $bill1=$due+$bill;
			
			$res=mysql_query("update patient set bill= '$bill1' where username= '$username' ");
			$_SESSION['type']="Patient";
			header("location: view_list.php");
			# code...
		}
		elseif (isset($_POST['viewAccounts'])) {
			$pass=$_POST['pass'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['pass']=$pass;
			$type= $_POST['account_type'];
			$_SESSION['type'] = $type;
			header("location: view_list.php");
			
		}
		elseif (isset($_POST['insert_emp'])){
			$name = $_POST['name'];
			$id = $_POST['id'];
			$type = $_POST['type'];
			$gender = $_POST['gender'];
			$birth = $_POST['birth'];
			
			$mobile = $_POST['mobile'];
			if ($type=="Nurse") {
				$salary=12000;
			}
			elseif ($type=="Receiptionist") {
				$salary=18000;
			}
			elseif ($type=="Wordboy") {
				$salary=10000;
			}
			elseif ($type=="Otherstaff") {
				$salary=13000;
			}
			$sql="INSERT INTO employee 
			VALUES('$id','$type','$name','$gender','$birth','$salary','$mobile')";
			if (!mysql_query($sql)) {
				die('Error: ' . mysql_error());
			}
			$_SESSION['msg']=" successfully inserted";
			$_SESSION['type']="Employee";
			header("location: view_list.php");
		}
		elseif (isset($_POST['delete_emp'])) {
			$type= $_POST['type'];
			$id = $_POST['id'];
			if ($type=="Nurse") {
				$res=mysql_query("delete from employee where id= '$id' and type = '$type'");
				# code...
			}
			elseif ($type=="Receiptionist") {
				$res=mysql_query("delete from employee where id= '$id' and type = '$type'");

				# code...
			}
			elseif ($type=="Wordboy") {
				$res=mysql_query("delete from employee where id= '$id' and type = '$type'");

				# code...
			}
			elseif ($type=="Otherstaff") {
				$res=mysql_query("delete from employee where id= '$id' and type = '$type'");

				# code...
			}
			header("location: Admin_profile.php");
			
		}
?>