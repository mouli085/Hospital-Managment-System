<?php  
session_start();
include 'login_form_back.php';
include 'reg_form_back.php';
?>

<!DOCTYPE html>

<html>
<head>
	<title>Sanitas Hospital</title>
	<link rel="icon" href="logo.jpg">
	<header style="width: 1350px;height: 180px;background-color: #C0F99A;margin-top: 20px;border-radius: 10px 10px 0px 0px; opacity: .8">
		<img src="logo.jpg" height="180px" width="180px" style="border-radius: 10px 10px 0px 0px; margin-left: 20px;" >
	
	<script src="jquery-3.3.1.js"></script>
	<script src="coolclock.js"></script>
	<script src="moreskins.js"></script>
	<script src="excanvas.js"></script>
	<canvas id="clk1" class="CoolClock:Tumb " ></canvas>
		<div style="width: 950px; height: 80px; float: right;"></div>
		<?php  
		if ($_SESSION['login']=="login_pat"||$_SESSION['login']=="login_ad"||$_SESSION['login']=="login_doc") {
			$name=$_SESSION['name'];
			if($_SESSION['login']=="login_pat"){
				echo "<a href='Patient_profile.php'>
				<div class='login_btn1'>PROFILE</div></a>";
			}
			else if($_SESSION['login']=="login_doc"){
				echo "<a href='doctor_profile.php'>
				<div class='login_btn1'>PROFILE</div></a>";
			}
			else if($_SESSION['login']=="login_ad"){
				echo "<a href='Admin_profile.php'>
				<div class='login_btn1'>PROFILE</div></a>";
			}
			echo "<a href='logout.php'><div class='login_btn'>LOGOUT</div>";
		}
		else{
			echo "<a name='login_btn'><div id='login_btn' onclick='popin()' class='login_btn' >LOGIN</div></a>
			<a name='reg_btn'><div onclick='popreg()' class='login_btn1'>REGISTER</div></a>";
		}
		?>
		<script type="text/javascript">
			function popin(){
				document.getElementById('login_form_back').style.display='block';
			}
			function popreg(){
				document.getElementById('reg_form_back').style.display='block';
			}
		</script>	<style type="text/css">
		.menu 
			{
				background-color: #462042;
				width: 1350px;
				height: 52px;
				opacity: .9;

			}
			#clk1{
				float: right;
				margin-right: 20px; margin-top: -3px;
			}
			.menu ul
			{
				list-style: none;
				
			}
			.menu ul li
			{
			    border-radius: 10px ;
				background-color:  #9d4895;
				width: 250px;
				border: 1px solid #462042;
				height: 50px;
				line-height: 50px;
				text-align: center;
				float: left;
				font-size: 20px;
				

			}
			.menu ul li:hover
			{   border-radius: 10px;
				background-color:#462042;
				color: blue;
			}
			.menu ul li a
			{
				text-decoration: none;
				color: white;
			}
			.l1{
				height: 52px;
				width: 130px; background-color: gray; float: right;margin-right: 5px;
			}
			.l2{
				height: 52px;
				width: 130px; background-color: gray; float: right;margin-right: 5px;
			}
			.login_btn{
				background-color: #5A8058;
				height: 38px; width: 150px; float: right;  opacity: 1;
				color: white; text-align: center; padding-top: 12px; position: relative; margin-right:  0px;margin-top:-55px;

			}
			.login_btn:hover{
				color: white; font-size: 30px; padding-top: 5px; height: 45px; font-weight: bold; 
			}
			.login_btn1{
				background-color: #5A8058;
				height: 38px; opacity: 1;
				color: white; text-align: center; padding-top: 12px; position: relative; margin-right:  0px;margin-top:-55px;
				float: left; margin-left: 850px; background:  linear-gradient(to right,#C0F99A , #5A8058); width: 350px;

			}
			.login_btn1:hover{
				color: white; font-size: 30px; padding-top: 5px; height: 45px; font-weight: bold; 
			}
			.login_btn input[type=submit]{
				border:none; background-color: transparent;
			}
			#searchicon{
				background-image: url('searching.png'); width:50px; height: 50px; float: left; margin-right: 5px; background-size: 40px 40px;background-position: center; background-repeat: no-repeat; border-radius: 50px; border: 1px solid white; margin-left: -55px;
			}
			
	</style>

	</header>

	
	<div style="background-color: #73356C; height: 20px; width: 1350px; border-radius: 0px 0px 10px 10px ;"></div>

</head>


<body>
	<nav class="menu" style="border-radius: 5px 5px 0px 0px; opacity: .9; position: relative;">
		<ul>
			
			<!-- <input type="text" placeholder="search.." id="searchbox" name="searchbox" style="margin-left: -20px;margin-right: 10px; width: 220px;height: 40px;margin-top: 5px; border-radius: 4px; float: left; position: relative; visibility: hidden ;" onKeyUp="showResult(this.value)"> -->
			<!-- <a href="#"><div id="searchicon"onclick="document.getElementById('searchbox').style.visibility='visible';document.getElementById('searchicon').style.display='none'"></div></a> -->
		<li id="home"><a href="home.php"><div>Home</div></a></li>
		<li id="service"><a href="Service.php ?>"><div>Service and Treatment</div></a></li>
		<li id="physician"><a href="Physician.php"><div>Physician</div></a></li>
		
		<li id="contact"><a href="Contact.php"><div>Contact info</div></a></li>
			</br>
			<!-- <div id="livesearch" style="float: right;margin-right: 1050px; width: 250px; margin-top: 0px; height: 200px; opacity: 1; position: absolute;"></div> -->
		</ul>

	</nav>


</body>
</html>