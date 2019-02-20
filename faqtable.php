<?php  
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("my_db", $con);
	$sql = "CREATE TABLE faq
	(
		name varchar(32) ,
		ques varchar(400) not null,
		ans varchar(400),
		language varchar(8),
		primary key (ques)

	)";
	if(!mysql_query($sql,$con)){
		echo mysql_error();}
?>