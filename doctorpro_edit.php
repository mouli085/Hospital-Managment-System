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
  	$new_write= $_POST['new_write'];
  	$res1=mysql_query("update doctors set Name = '$new_name' where username='$username'");
  	$res2=mysql_query("update doctors set gender = '$new_gender' where username='$username'");
  	$res3=mysql_query("update doctors set Birth = '$new_birth' where username='$username'"); 
  	$res4=mysql_query("update doctors set pass = '$new_pass' where username='$username'");
  	$res5=mysql_query("update doctors set mobile = '$new_mobile' where username='$username'");
  	$res6=mysql_query("update doctors set write_something = '$new_write' where username='$username'");      	

  		 
  	  if ($res1&&$res2 && $res3 && $res4 && $res5)    	
  	{
		$_SESSION['birth']=$_POST['new_birth'];
		$_SESSION['name']=$_POST['new_name'];
		$_SESSION['gender']=$_POST['new_gender'];
		$_SESSION['pass']=$_POST['new_pass'];
		$_SESSION['mobile']=$_POST['new_mobile'];
		$_SESSION['write']=$_POST['new_write'];


		header("location: doctor_profile.php");
  	} 
  	else {
  		echo mysql_error();
  	}
}
if (isset($_POST['view_appoinments'])) {
	echo "<form action='validateall.php' method='POST'>";
	echo "<input type='text' name='username' value='$username'  style='display:none;'>
 		<input type='text' name='password' value='$pass' readonly style='display:none;'>
 		<input type='text' name='type' value='Doctor'  style='display:none;'>
 		<input type='submit' name='login' value='' >";
 	echo "</form>";
	$doc_username= $_POST['doc_username'] ;
	$res= mysql_query("SELECT * from appoinment where doc_username= '$doc_username'");
	echo "<table>";
	echo "<th>Patient name</th>";
	echo "<th>date</th>";
	echo "<th>time</th>";
	

	while($row= mysql_fetch_assoc($res)){
		$doc_name= $row['doc_name'] ;
		$p_name= $row['p_name'];
		$p_username= $row['p_username'];
		$atime= $row['atime'];
		$adate= $row['adate'];
		$tdate=date("y-m-d");
		if (date("y-m-d")<$adate) {
			echo "<tr>";
	 		echo "<td>$p_name</td>";
	 		echo "<td>$adate</td>";
	 		echo "<td>$atime</td>";
	 		echo "</tr>";
	 		echo "<br>";
			
			
		}
		else if (date("y-m-d")==$adate) {
			if(time()<strtotime($atime))
			{echo "<tr>";
	 		echo "<td>$p_name</td>";
	 		echo "<td>$adate</td>";
	 		echo "<td>$atime</td>";
	 		echo "</tr>";
	 		echo "<br>";}
		}

		
	}
	echo "</table>";
	

	# code...
}
		

?>
<style type="text/css">
	table{
		width: 1000px;
		height: auto;
		
	}
	table tr{
		height: 40px;
		font-size: 25px;
		margin: 5px;
		background-color: lightyellow;
	}
	table th{
		background-color: #008080; color: white;
		height: 50px;
		text-decoration: none;
		align-items: left;
	}
	table td{
		padding-left: 20px;
	}
	table tr:nth-child(odd) {background-color: #f2f2f2;}
	form{
 			position: fixed; right: 0;
 		}
 		form input[type=submit]{
 			background-image: url('goback1.png');
 			background-size: cover;
 			background-position: center;
 			width: 40px; height: 40px; 
 			border: none; border-radius: 40px; float: right; margin-right: 30px;

 		}
 		form input[type=submit]:hover{
 			background-image: url('goback.png');
 			background-size: cover;
 			background-position: center;
 			width: 250px; height: 40px; 
 			border: none; border-radius: 4px; float: right; margin-right: 30px;
 			font-size:20px;

 		} 
 		h1{
 			line-height: 60px;
 			margin-bottom: 0px;
 		}
</style>