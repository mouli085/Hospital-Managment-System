<?php
mysql_connect("localhost","root","");
mysql_select_db("my_db");
$type =mysql_real_escape_string($_POST['type']) ;
$username =mysql_real_escape_string($_POST['username']) ;
if ($type=="Patient") {
	$check=mysql_query("select username from patient where username='$username' ");/*echo "1";*/
}
elseif ($_post['type']=="Doctor") {
	$check=mysql_query("select username from doctors where username='$username' ");/*echo "1";*/
}
else
  $check=mysql_query("select username from admin where username='$username' ");
$check_num_rows = mysql_num_rows($check);
// echo $check_num_rows;

if($username==null) echo " ";
else if (strlen($username)<3) {
	echo "Too short";

	# code...
}
else
{
	if($check_num_rows==0)
		echo "available";
	else if($check_num_rows==1)
		echo " not available";
}

?>