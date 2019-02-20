<?php
session_start();
include 'connectdb.php';

if (isset($_POST['login'])) {
	if (isset($_COOKIE['username'])) {
		$username= mysql_real_escape_string($_COOKIE['username']);
		# code...
	}
	if(isset($_COOKIE['password'])){$pass= mysql_real_escape_string($_COOKIE['password']);}
	
		$username= mysql_real_escape_string($_POST['username']);
	$pass= mysql_real_escape_string ($_POST['password']);
	$type=mysql_real_escape_string($_POST['type']);
	$remember=mysql_real_escape_string ($_POST['remember']);
	if ($_POST['type']=="Patient") {
		$result=mysql_query("select * from patient where username = '$username' and pass= '$pass' ") or die();
		if(mysql_num_rows($result)==1){
			
				$row=mysql_fetch_array($result);
				if ($row) {
					$_SESSION['username']= $db_username= $row['username'];
				$_SESSION['pass']= $db_pass=$row['pass'];
				$_SESSION['name']= $db_name=$row['Name'];
				$_SESSION['gender']= $db_gender=$row['gender'];
				$_SESSION['birth']= $db_Birth=$row['Birth'];
				$_SESSION['email']= $db_email=$row['email'];
				$_SESSION['mobile']=$db_mobile=$row['mobile'];
				$_SESSION['bill']=$db_bill= $row['bill'];
					if (!empty($_POST["remember"])) {
						 $uname=$_POST['username'];
						$pword=$_POST['password'];
						setcookie("username",$uname,time()+30);
						setcookie("type",$type,time()+30);
						setcookie("password",$pword,time()+30);
						
					}
					else{
						$uname=$_POST['username'];
						$pword=$_POST['password'];
						if (isset($_COOKIE["username"])) {
							setcookie("username",$uname,time()-30);
setcookie("type",$type,time()-30);

						}
						if (isset($_COOKIE["password"])) {
							setcookie("password",$pword,time()-30);
							

						}

					}
					
				}
					
				}
				else {
					$_SESSION['msg']="invalid login";
				}
				
				
		
	}

	else if ($_POST['type']=="Doctor") {
		$result=mysql_query("select * from doctors where username = '$username' and pass= '$pass' ") or die();
		if(mysql_num_rows($result)==1){
			$row=mysql_fetch_array($result);
			if($row){
			$_SESSION['username']= $db_username= $row['username'];
			$_SESSION['pass']= $db_pass=$row['pass'];
			$_SESSION['name']= $db_name=$row['Name'];
			$_SESSION['gender']= $db_gender=$row['gender'];
			$_SESSION['birth']= $db_Birth=$row['Birth'];
			$_SESSION['speciality']= $db_speciality=$row['specialiti'];
			$_SESSION['email']= $db_email=$row['email'];
			$_SESSION['mobile']=$db_mobile=$row['mobile'];
			$_SESSION['salary']=$db_salary=$row['salary'];
			$_SESSION['write']= $db_write=$row['write_something'];
			if (!empty($_POST["remember"])) {
						 $uname=$_POST['username'];
						$pword=$_POST['password'];
						setcookie("username",$uname,time()+30);
						setcookie("type",$type,time()+30);
						setcookie("password",$pword,time()+30);
						
					}
					else{
						$uname=$_POST['username'];
						$pword=$_POST['password'];
						if (isset($_COOKIE["username"])) {
							setcookie("username",$uname,time()-30);
setcookie("type",$type,time()-30);

						}
						if (isset($_COOKIE["password"])) {
							setcookie("password",$pword,time()-30);
							

						}

					}
		}}
	}
	else if ($_POST['type']=="Admin") {

		$result=mysql_query("select * from admin where username = '$username' and pass= '$pass' ") or die();
		if(mysql_num_rows($result)==1){

		$row=mysql_fetch_array($result);
		if($row){$_SESSION['username']= $db_username= $row['username'];
		
				$_SESSION['pass']= $db_pass=$row['pass'];
				$_SESSION['name']= $db_name=$row['Name'];
				$_SESSION['gender']= $db_gender=$row['gender'];
				$_SESSION['birth']= $db_Birth=$row['Birth'];
				$_SESSION['email']= $db_email=$row['email'];
				$_SESSION['mobile']=$db_mobile=$row['mobile'];
				$_SESSION['image']=$db_image=$row['image'];
				if (!empty($_POST["remember"])) {
						 $uname=$_POST['username'];
						$pword=$_POST['password'];
						setcookie("username",$uname,time()+30);
						setcookie("type",$type,time()+30);
						setcookie("password",$pword,time()+30);
						
					}
					else{
						$uname=$_POST['username'];
						$pword=$_POST['password'];
						if (isset($_COOKIE["username"])) {
							setcookie("username",$uname,time()-30);
setcookie("type",$type,time()-30);

						}
						if (isset($_COOKIE["password"])) {
							setcookie("password",$pword,time()-30);
							

						}

					}
			}
	}

		
	}
	if ($db_username==$username&& $db_pass==$pass) {
		
		# code...

		if ($_POST['type']=="Patient"){
			$_SESSION['login']="login_pat";
			header("location: Patient_profile.php");
		}
		elseif ($_POST['type']=="Doctor"){
			$_SESSION['login']="login_doc";
			header("location: doctor_profile.php");
		}
		elseif ($_POST['type']=="Admin"){
			$_SESSION['login']="login_ad";
			header("location: Admin_profile.php");
		}
	}
else{ 
	header("location: home.php");
}
	/*if ($email== $myemail and $pass== $mypass) {
		$rem=$_POST['remember'];
		if(isset($_POST['remember'])){
			setcookie('email',$email,time()+60*60*7);
			setcookie('pass',$pass,time()+60*60*7);	
		}
			session_start();
			$_SESSION['email']= $email;
			header("location: welcome.php");
	}
	else{
		echo "email or password invalid click here to <a href='login.php'> try again</a> ";
	}*/
}
?>