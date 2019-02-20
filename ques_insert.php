<?php  
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("my_db", $con);
$language= $_POST['language'];
$name= $_POST['name'];
$ques = $_POST['ques'];

if (isset($_POST['submit'])) {
	if (!mysql_query("insert into faq (language,name,ques) 
		values ('$language','$name','$ques')")) {
		die('Error: ' . mysql_error());

	
	}
/*	$_SESSION['name']=$name;
	$_SESSION['ques']=$ques;*/
	header("location: faq.php");
	# code...
}

?>