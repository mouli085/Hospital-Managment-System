<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.footer{
		width: 1350px;
		height: 150px;
		background-color:#e2fbd0;
		border-top: 2px dashed #8e5788;

	}
	.followus{
		height: 150px; width: 200px;float: left;
	}
	.followus a #fb{
		width: 50px;
		background-image: url('facebook.png');
		background-size: cover;
		background-position: center;
		height:50px;
		border-radius: 50px;
		float: left;
		margin: 0px 20px 10px 20px;


	}
	.followus a #g{
		width: 50px;
		background-image: url('google-plus-logo-button.png');
		background-size: cover;
		background-position: center;
		height:50px;
		border-radius: 50px;
		float: left;
		margin: 0px 20px 10px 20px;


	}
	.followus a #fb:hover{
		width: 56px;

		height:56px;
		border-radius: 56px;
		margin-right: 17px;
		margin-left: 17px;
		

	}
	.followus a #g:hover{
		width: 56px;

		height:56px;
		border-radius: 56px;
		margin-left: 17px;


	}
	.followus h2{ font-size: 25px; color: purple; margin-left: 20px; }

	 .location{
	 	height: 144px;
	 	width: 300px;
		float: left;
		margin-left: 20px;
		color: purple;font-size: 20px;
		padding-top: 10px;

	 }
	.location:hover{
		border-radius: 5px;
		border: 3px solid lightgray ;
		background-color: aliceblue;
		font-size: 25px;
		
	}
	.location img{
		height: 64px;
		width: 64px;
		border-radius: 9px;
		border: 2px solid gray;
		float: left;
		margin-left: 10px;
		margin-right: 10px; 
		margin-top: 28px; 
		float: left;

	}
	.keywords{
		width: 800px;
		height: 150px;
		
		float: right;
		color: purple; 

	}
	.keywords a{ text-decoration: none;}
	.keywords a div{ width: 148px; height: 30px; border: 1px solid #e2fbd0; float: left;
		margin: 5px; font-size: 20px; border-radius: 4px; text-align: center;}
	.imp:hover{
		border:  1px solid #007a99;
		background-color: #007a99;color: white;font-size: 25px;
	}
	.low:hover{
		background-color: 	 #8c1aff;
		color: white;
	}
	

</style>	
</head>
<body>

</body>
<footer class="footer">
	<div class="followus">
		<h2>FOLLOW US</h2><br>
		<a href="https://www.facebook.com/raspberrypi/">
			<div id="fb"></div>
		</a>
		<a href="www.google.com">
			<div id="g"></div>
		</a>
	</div>
		<a href="https://www.google.com/maps/dir/''/sanitas+hospital+tanzania/data=!4m5!4m4!1m0!1m2!1m1!1s0x185c4c34a7d89455:0x7048cef8824bb543?sa=X&ved=0ahUKEwiyy-jN85DaAhUMvI8KHfewDxwQ9RcIqgEwCw">
			<div class="location">
				<img src="route.png">
				 Baraka Plaza Mall, Mwai Kibaki-Mikocheni, Dar es Salaam, Tanzania
			</div>
		</a>
	<div class="keywords">
		<h2>Some keywords:</h2>
		<a href="Visiting.php"> <div class="imp">Visiting hours </div> </a>
		<a href="Contact.php"> <div class="low">Contact us </div> </a>
		<a href="bill.php"> <div class="imp">Bill Payment</div> </a>
		<a href="Physician.php"> <div class="low">Physicians </div> </a>
		<a href="faq.php"> <div class="imp">Faq </div> </a>
		<a href="service.php"> <div class="low">Service </div> </a>
		<a href="Ambulance.php"> <div class="imp">Ambulance </div> </a>
		<a href="mission.php"> <div class="low">Our mission </div> </a>
		<a href="about.php"> <div class="imp">About us</div> </a>
		</ul>
	</div>
	
</footer>
</html>