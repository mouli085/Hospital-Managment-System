<?php
session_start();
$_SESSION['msg']="";
 include ('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="appointment.css">
</head>
<body>
<div class="body">
	<div class="gap"></div>
	<div class="main">
		<?php  
		$con = mysql_connect("localhost","root","");
	    if (!$con)
	      {
	      die('Could not connect: ' . mysql_error());
	      }
	      mysql_select_db("my_db", $con);
	      echo $_SESSION['msg'];
	    if (isset($_POST['set_appointment'])) {
	    	$doc_username= $_POST['doc_username'];
	    	$res= mysql_query("SELECT Name from doctors where username= '$doc_username'");
	    	$row= mysql_fetch_assoc($res);
	    	$doc_name= $row['Name'];
	    	echo "<form action='add_appn.php' method='POST' >";
			echo "<table>";
				echo "<tr><th>Patients' Name: </th><td><input type='text' name='p_name' maxlength='100' required ></th></tr>";
				echo "<tr><th>Patients' Username: </th><td><input type='text' name='p_username' maxlength='100' ></td></tr>";
				echo "<tr><th>Doctors' Name: </th><td><input type='text' name='doc_name' value='$doc_name' readonly ></td></tr>";
				
				echo "<tr><th>Doctors' Username: </th><td><input type='text'name='doc_username' value='$doc_username' readonly ></th></tr>";
				
				echo "<tr><th>Date: </th><td><input type='date' name='date'required></td></tr>";
				echo "<tr><th>Time: </th><td><input type='time' name='time' required></td></tr>";
				
			echo "</table>";
			echo "<input class='button' type='submit' name='appointmented' value='set'> ";
			echo "</form>";

	    }
		?>
		
	</div>
</div>

</body>
</html>
<?php include('footer.php')  ?>