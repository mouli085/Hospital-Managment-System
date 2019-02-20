<?php
mysql_connect("localhost","root","");
mysql_select_db("my_db");

echo $id=($_POST['id']);
echo	$check=mysql_query("select * from employee where id='$id' ");/*echo "1";*/


$check_num_rows = mysql_num_rows($check);
echo $check_num_rows;


else
{
	if($check_num_rows==0)
		echo "available";
	else if($check_num_rows==1)
		echo " not available";
}

?>