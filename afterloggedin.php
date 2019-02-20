<?php  
mysql_connect("localhost","root","");
mysql_select_db("my_db");
echo $type = mysql_real_escape_string($_POST['type']) ;
echo $username = mysql_real_escape_string($_POST['username']) ;
if ($type=="Patient") {
	$check=mysql_query("select * from patient where username='$username' ");echo "1";

}
elseif ($_post['type']=="Doctors") {
	$check=mysql_query("select username from doctors where username='$username' ");/*echo "1";*/
}
else
  $check=mysql_query("select username from admin where username='$username' ");
 $check_num_rows = mysql_num_rows($check);

?>