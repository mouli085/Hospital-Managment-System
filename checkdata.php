<?php  
$con = mysql_connect("localhost","root","");
    if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);
	if(isset($_POST['user_name']))
	{
	 $name=$_POST['user_name'];

	 $checkdata=" SELECT name FROM doctors WHERE username='$name' ";

	 $query=mysql_query($checkdata);

	 if(mysql_num_rows($query)>0)
	 {
	  echo "User Name Already Exist";
	 }
	 else
	 {
	  echo "OK";
	 }
	 exit();
	}
if(isset($_POST['user_email']))
{
 $emailId=$_POST['user_email'];

 $checkdata=" SELECT name FROM doctors WHERE email='$emailId' ";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>