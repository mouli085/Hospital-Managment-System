<?php
session_start();
 include ('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script type="text/javascript">
		var image1=new Image()
		image1.src="fop.png"
		var image2=new Image()
		image2.src="cold.png"
		var image3=new Image()
		image3.src="cotard.png"
		var image4=new Image()
		image4.src="elephant.png"
		var image5=new Image()
		image5.src="tree.png"
		var image6=new Image()
		image6.src="vampire.png"
		var image7=new Image()
		image7.src="warewolf.png"
		var image8=new Image()
		image8.src="water.png"
	</script>
</head>
<body>
	<?php include 'notice.php'; ?>
	<div class="image" style="">
		<div style=" height: 400px; width: 1350px;">
			<div style=" font-style: inherit; color: white; float: left; padding-left: 10px;">
				<h1 style="font-size: 40px;">MORE THAN <br> 7,400 TRUSTED PHYSICIANS</h1><br>
			<h2 style="font-size: 30px;" >Backed by <br> Largest Healthcare Network</h2></div>
			<nav  class="floating_nav" >
				<ul >
					<li ><a href="bill.php"><div>	Pay Your Bill</div></a> </li>
					<br>
					<li ><a href="vacancies.php"><div>	Vacancies</div></a></li>
					<br>
					<li ><a href="faq.php"><div>	FAQ</div></a></li>
					<br>
					<li ><a href="Ambulance.php"><div>Ambulance</div></a></li>
					<br>
					<li ><a href="Visiting.php"><div>Visiting hour</div></a></li><br>
					<?php  if($_SESSION['login']=="login_pat")
					{
						echo "<li ><a href='appointment.php'><div>Set Appointment</div></a></li>";
					}
					?>
					


				</ul>
			</nav>

		</div>
		<div class=" floating_box" >
			<div class="box1" >
				<img name="slide" src="fop.png" style="width: 100%; height: 100%">
				<script type="text/javascript">
				var step=1
				function slideit(){
				document.images.slide.src=eval("image"+step+".src")
				if(step<8)
				step++
				else
				step=1

				setTimeout("slideit()",2000)
				}
				slideit()
			
				</script>
			</div>
				
			<div class="box2">
				<h2>About us</h2>
				<p>Sanitas Hospital is one of the country’s largest not-for-profit health care providers with 22 campuses serving communities throughout Florida. Being a not for profit hospital means we are here for something much more important: you. For more than 100 years, we have been profoundly..</p>
				<a href="about.php" style="color: red; float: left;">Read more</a>

			</div>
			<div class="box3">
				<h2>FIRST AID</h2>
				<p>In case of emergencies when first aid is only the beginning of care, people should be prepared to give emergency personnel all of their current and past medical history . Almost everyone will need to use a first aid kit at some time. Take the time to prepare a kit to have available for home and travel.</p>
				<!-- <a style="color: red;" href="#">learn more</a> -->
			</div>
		</div>
	</div>
<div style="background-color: #D1B997; width: 1350px; height: 200px;background:  linear-gradient(to right,#D1B997, white);"></div>
<?php 
include 'footer.php'; ?>
</body>
</html>