<?php 
session_start();
$type=$_SESSION['type'];    
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("my_db", $con);
$username = $_SESSION['username'];
$pass=$_SESSION['pass'];

 ?>

 <!DOCTYPE html>
 <html>
 
 <head>
 	<style type="text/css">
 		table{
 			width: 1350px;
 		}
 		table td, table th{
 			padding: 15px;
 			font-size: 18px;
 		}
 		table tr th {background-color: gray; color: white}
 		table tr {background-color: #f2f2f2;}
 		.form{
 			position: fixed; right: 0;
 		}
 		.form input[type=submit]{
 			background-image: url('goback1.png');
 			background-size: cover;
 			background-position: center;
 			width: 40px; height: 40px; 
 			border: none; border-radius: 40px; float: right; margin-right: 30px;

 		}
 		.form input[type=submit]:hover{
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
 </head>
 
 <body>
 	
 	<h1><?php echo $type; ?> list</h1>
 	<?php echo "<form class='form' action='validateall.php' method='POST'>";
	echo "<input type='text' name='username' value='$username'  style='display:none;'>
 		<input type='text' name='password' value='$pass' readonly style='display:none;'>
 		<input type='text' name='type' value='Admin'  style='display:none;'>
 		<input type='submit' name='login' value='' >";
 	echo "</form>"; ?>

 	<?php
	echo "<form action='delete_user.php' method='POST' id='delete_form'>";
 	if ($type == "Doctor") {
	$res= mysql_query("select  * from doctors");
	echo "<table>";
	echo "<th></th>";
 		echo "<th>NAME</th>";
 		echo "<th>GENDER</th>";
 		echo "<th>BIRTH DATE</th>";
 		echo "<th>SPECIALITY</th>";
 		echo "<th>EMAIL</th>";
 		echo "<th>USERNAME</th>";
 		echo "<th>SALARY</th>";
 		echo "<th>MOBILE</th>";
 	
 	   
 	while ($row= mysql_fetch_assoc($res)) {
 		$username=$row['username'];

 		 
	echo "<input type='text' name='username' value='$username'  style='display:none;'>
 		
 		<input type='text' name='a_type' value='Doctor'  style='display:none;'>";
 		
 		echo "<tr>";
 		echo "<td><input type='checkbox' name='num[]' class='other' value='".$row['username']."'</td>";
 		echo "<td>".$row['Name']."</td>";
 		echo "<td>".$row['gender']."</td>";
 		echo "<td>".$row['Birth']."</td>";
 		echo "<td>".$row['specialiti']."</td>";
 		echo "<td>".$row['email']."</td>";
 		echo "<td>".$row['username']."</td>";
 		echo "<td>".$row['salary']."</td>";
 		echo "<td>".$row['mobile']."</td>";
 		echo "</tr>";echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		
 		echo "<td style='background-color:white'><input class='button' type='submit' name='edit' value='Edit' ></td>";
 		echo "<br>";
 	}
 	echo "</table>";
	}
	elseif ($type == "Patient") {
	$res= mysql_query("select * from patient");
	echo "<table>";
	echo "<th></th>";
 		echo "<th>NAME</th>";
 		echo "<th>GENDER</th>";
 		echo "<th>BIRTH DATE</th>";
 		echo "<th>EMAIL</th>";
 		echo "<th>USERNAME</th>";
 		echo "<th>BILL</th>";
 		echo "<th>MOBILE</th>";
 	
 	   
 	while ($row= mysql_fetch_assoc($res)) {
 		$username=$row['username'];


 		 
	echo "<input type='text' name='username' value='$username'  style='display:none;'>
 		
 		<input type='text' name='a_type' value='Patient'  style='display:none;'>";
 		
 		echo "<tr>";
 		echo "<td><input type='checkbox' name='num[]' class='other' value='".$row['username']."'</td>";
 		echo "<td>".$row['Name']."</td>";
 		echo "<td>".$row['gender']."</td>";
 		echo "<td>".$row['Birth']."</td>";
 		echo "<td>".$row['email']."</td>";
 		echo "<td>".$row['username']."</td>";
 		echo "<td>".$row['bill']."</td>";
 		echo "<td>".$row['mobile']."</td>";
 		echo "</tr>";;echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		echo "<td style='background-color:white' ></td>";
 		// echo "<form action='edit_user.php' method='POST' name='edit_form'>";		
 		// echo "<td style='background-color:white'><input class='button' type='submit' name='edit' value='Edit' ></td>";
 		// echo "</form>";
 		echo "<br>";
 	}
 	echo "</table>";
	}
	elseif ($type == "Employee") {
	$res= mysql_query("select * from employee");
	echo "<table>";
		echo "<th></th>";
 		echo "<th>ID</th>";
 		echo "<th>TYPE</th>";
		echo "<th>NAME</th>";
 		echo "<th>GENDER</th>";
 		echo "<th>BIRTH DATE</th>"; 		
 		echo "<th>SALARY</th>";
 		echo "<th>MOBILE</th>";
 	
 	   
 	while ($row= mysql_fetch_assoc($res)) {
 		$id=$row['id'];
 		$e_type=$row['type'];
 		
		echo "<input type='text' name='id' value='$id'  style='display:none;'>
 		<input type='text' name='type' value='$e_type' readonly style='display:none;'>
 		<input type='text' name='a_type' value='Employee'  style='display:none;'>";
 		
 		echo "<tr>";
 		echo "<td><input type='checkbox' name='num[]' class='other' value='".$row['id']."'</td>";
 		echo "<td>".$row['id']."</td>";
 		echo "<td>".$row['type']."</td>";
 		echo "<td style='width:250px;' >".$row['Name']."</td>";
 		echo "<td style='width:100px;' >".$row['gender']."</td>";
 		echo "<td style='width:100px;' >".$row['Birth']."</td>";
 		echo "<td style='width:100px;' >".$row['salary']."</td>";
 		echo "<td>".$row['mobile']."</td>";
 		// echo "<td style='background-color:white'><input class='button' type='submit' name='edit' value='Edit' ></td>";
 		

 		echo "</tr>";;echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		echo "<td style='background-color:white' ></td>";echo "<td style='background-color:white' ></td>";
 		
 		
 		
 		echo "<br>";
 	}
 	echo "</table>";
	}
	else echo "error"; 
echo "<input class='button'  type='submit' name='delete' value='DELETE' style='width:80px; background-color:white; color:black;' >";
 		
 		echo "</form>"; 
 	?>

 </body>
 </html>