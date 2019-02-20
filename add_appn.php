<?php
session_start();
$con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_select_db("my_db", $con);
   	if (isset($_POST['appointmented'])) {

   		$doc_name= $_POST['doc_name'];
   		$doc_username= $_POST['doc_username'];
   		$p_name = $_POST['p_name'];
   		$p_username = $_POST['p_username'];
   		$time= $_POST['time'];
   		$date =$_POST['date'];
   		$res= mysql_query("SELECT * from appoinment where doc_username ='$doc_username' and adate= '$date' and atime= '$time' ");
   		if (mysql_num_rows($res)>0) {
   			echo "not available";

   			echo "<form action='appointment.php' method='POST' >";
   			echo "<input type='text' name='doc_username' value='$doc_username' style='display: none;'>  ";     	
      		echo "<input type='text' name='doc_name' value='$doc_name' style='display: none;' >";
      		echo "<input type='submit' name='set_appointment' value='Set Another Time' >"; 
   			echo "</form>";
   		}
   		else{
   			if(!mysql_query("INSERT into appoinment values('$doc_name','$doc_username','$p_name','$p_username','$time','$date')")){
   			echo mysql_error();}
   			
   		}
   	}

?>
