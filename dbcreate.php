<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_query("drop database my_db",$con);

	if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";

  


  }
else
  {
  echo "Error creating database: " . mysql_error();
  }


mysql_select_db("my_db", $con);
	$sql = "CREATE TABLE Patient
	(
		Name varchar(30) not null,
		gender varchar(7) not null, 
		Birth varchar(15) not null,
		email varchar(40) not null ,
		username varchar(15) not null unique,
		pass varchar(32) not null,
		bill int(5),
		mobile int(11),
		primary key (username)

	)";
	if(!mysql_query($sql,$con)){
		echo mysql_error();}
	$sql = "CREATE TABLE admin
	(
		
		Name varchar(30) not null,
		gender varchar(7) not null, 
		Birth varchar(15) not null,
		email varchar(40) not null ,
		username varchar(15) not null unique,
		pass varchar(32) not null,
		mobile int(11),
		primary key (username)


	)";
	if(!mysql_query($sql,$con)){
		echo  mysql_error();}
	$sql = "CREATE TABLE Doctors
	(
	
		Name varchar(30) not null,
		gender varchar(7) not null, 
		Birth varchar(15) not null,
		specialiti varchar(20) not null,
		email varchar(40) not null ,
		username varchar(15) not null unique,
		pass varchar(32) not null,
		salary int(6),
		mobile int(11),
		write_something varchar(100) not null,
		primary key (username)

	)";
	if(!mysql_query($sql,$con)){
		echo mysql_error();}
	$sql = "CREATE TABLE employee
	(
		id int(11) not null AUTO_INCREMENT,
		type varchar(7),
		Name varchar(30) not null,
		gender varchar(7) not null, 
		Birth varchar(15) not null,
		salary int(5),
		mobile int(11),
		
		primary key (id)


	)";
	if(!mysql_query($sql,$con)){
		echo  mysql_error();}

	// Execute query
/*	if(!mysql_query($sql,$con)){
		echo "could not";*/
//}
	

	
mysql_close();

?>