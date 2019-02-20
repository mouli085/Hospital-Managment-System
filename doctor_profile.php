<?php session_start(); 
if ($_SESSION['login']!="login_doc") {
	header("location:home.php");
}
$msg="";
$username=$_SESSION['username'];
if(isset($_POST['upload']))
{
	$target = 'images/'.basename($_FILES['image']['name']);
	mysql_connect("localhost","root","");
        
          mysql_select_db("my_db");
	$image=$_FILES['image']['name'];
	$sql="update doctors set image='$image' where username='$username'";
	mysql_query($sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		echo $msg="Image uploaded successfully";
	}
	else{
		echo $msg="there was a problem";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<?php include ('header.php'); ?>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<style type="text/css">

	</style>
</head>
<body>
	<?php include 'doctorpro_editbox.php'; ?>
	
<div class ="pattern" style="background-image:url('doc_pattern.jpg'); ">
	<div style="height: 100px; width: 1350px;"></div>
	<div class="profile" style="border: 3px dashed lightgreen ">
		
		<?php  
		$gender=$_SESSION['gender'];
		$username=$_SESSION['username'];
		$pass=$_SESSION['pass'];
		mysql_connect("localhost","root","");
        
          mysql_select_db("my_db");

		$result=mysql_query("select * from doctors where username = '$username' and pass= '$pass' ") or die();
		if(mysql_num_rows($result)==1){

		$row=mysql_fetch_array($result);
		$image=$row['image'];
		if($image==""){
		if($gender== "Female"){
			echo "<div class='img_div_female' id='img_div_female'></div>";
		}
		else
			echo "<div class='img_div_male' id='img_div_male'></div>";
		}
		else{
			echo "<div class='image_div'>";
			echo "<img src='images/".$row['image']."'>";
			echo"</div>";}
		}

		?>
		<div style="float: left; position: absolute; margin-left: 250px; margin-top: -80px">
	  		<form  method="post" action="doctor_profile.php" enctype="multipart/form-data">
	  			<input type="hidden" name="size"  value="1000000">
	  			<div class="imagefile">
	  				<input type="file" name="image">
	  			</div>
	  			<div class="imagefile">
	  				<input type="submit" name="upload" value="upload">
	  			</div>
	  		</form>
	  	</div>
		<div class="profile_table">
		<table>
			<tr><td >Name:</td><td><div> <?php echo "Dr.". $_SESSION['name'];  ?> </div></td></tr>

			<tr><td >Gender:</td><td><div> <?php echo $_SESSION['gender'];  ?> </div> </td></tr>

			<tr><td >Birth:</td><td><div> <?php echo $_SESSION['birth'];  ?> </div> </td></tr>

			<tr><td >Speciality:</td><td><div> <?php echo $_SESSION['speciality'];  ?> </div> </td></tr>

			<tr><td >Username:</td><td><div> <?php echo $_SESSION['username'];  ?> </div> </td></tr>

			<tr><td >Password:</td><td><div> <?php echo $_SESSION['pass'];  ?> </div> </td></tr>

			<tr><td >Email:</td><td><div> <?php echo $_SESSION['email'];  ?> </div> </td></tr>

			<tr><td >Mobile no:</td><td><div> <?php echo $_SESSION['mobile'];  ?> </div> </td></tr>

			<tr><td >Salary:</td><td><div> <?php echo $_SESSION['salary'];  ?> </div> </td></tr>

			<tr><td  rowspan="3">Write:</td><td rowspan="3"><div> <?php echo $_SESSION['write'];  ?> </div> </td></tr>

		</table>
		<button onclick="document.getElementById('edit_box_back').style.display = 'block';">Edit</button>
		</div>

		<div class="links">
			<form action="doctorpro_edit.php" method="POST">
				<input type="text" name="doc_username" value="<?php echo $_SESSION['username'];?>" style="display: none;" >
				<input type="text" name="pass" value="<?php echo $_SESSION['pass'];?>" style="display: none;" >
				<input type="text" name="pass" value="Doctor" style="display: none;" >
				<div class="a" ><input type="submit" name="view_appoinments" value=" Appointments "><img src="right.png"> </div>
			
		</form>
			<a href="fileupload.php">
				<div >prescriptions <img src="right.png"></div>
			</a>

			<!-- <a href="">
				<div> <img src="right.png"></div>
			</a>
			<a href="">
				<div> <img src="right.png"></div>
			</a>
		 --> 
		</div>
	</div>
</div>
</body>
</html>
<?php include 'footer.php'; ?>
