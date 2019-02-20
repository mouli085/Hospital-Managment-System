<?php
mysql_connect("localhost","root","");
mysql_select_db("my_db");
echo $type =mysql_real_escape_string($_POST['type']) ;
echo $email= mysql_real_escape_string($_POST['email']);
echo $username =mysql_real_escape_string($_POST['username']) ;
if ($type=="Patient") {
	$check=mysql_query("select username from patient where email='$email' ");
	
}
elseif ($_post['type']=="Doctor") {
	$check=mysql_query("select username from doctors where email='$email' ");/*echo "1";*/
}
else
  $check=mysql_query("select username from admin where email='$email' ");
$check_num_rows = mysql_num_rows($check);
 $check_num_rows;



if($email==null) echo " ";
else{
	if($check_num_rows==0)
		echo "available";
	else if($check_num_rows==1)
		echo " not available";
}

?>