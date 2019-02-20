<?php  
	session_start();
    
    $con = mysql_connect("localhost","root","");
    if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);
	if (isset($_POST['reg_doc'])) {
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$birth=$_POST['birth'];
		$speciality=$_POST['speciality'];
		$mobile=$_POST['mobile'];
		$salary=$_POST['salary'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		if($birth<=1998-01-21 and $mobile>=01500000000){
			$res=mysql_query("
			INSERT INTO doctors(Name,gender,Birth,mobile,specialiti,email,username,pass,salary)
        VALUES
        ('$name','$gender','$birth','$mobile','$speciality', '$email', '$username','$pass', '$salary')
			")or die();
		$_SESSION['type']="Doctor";
		header("location:view_list.php");
		}
		else{
			echo "enter valid data";
			echo "<a href='Admin_profile.php#doctor_reg_form_back'>Try again</a>";
		}

		
	}
?>