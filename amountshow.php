<?php  session_start();
$bill = $_SESSION['bill'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$mobile= $_SESSION['mobile'];
$gender= $_SESSION['gender'];
if ($gender=="Female") {
	$m="Miss.";
	# code...
}
else
{
	$m= "Mr.";
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php';  ?>
	<style type="text/css">
			.body
		{
			background-image: url(back.jpg);
			width: 1350px;
			height: 500px;
			padding-top: 35px;
			padding-bottom: 45px;
		}
		.main{
			height: 500px;
			width: 550px; background-color: white; margin-left: 400px;
			border: 10px solid gray;
			border-radius:30px; padding-left: 10px; color: red;
			font-size: 20px;
		}
		.main h1{
			color: #008080; font-size: 35px;
		}
		.main label{
			color: darkblue;
			line-height: 40px;
		}
		.master {
			width: 150px;
			height: 100px;
			margin-left: 10px; margin-right: 15px;
			background-image: url('mastercard.png');
			background-size: cover;  float: left;
			margin-bottom: 30px;
		}
		.master:hover{
			width: 160px;height: 110px;
			margin-left:5px; margin-bottom: 20px; margin-right: 10px;
		}
		.visa {
			width: 150px;
			height: 100px;
			margin-left: 10px; margin-right: 15px;
			background-image: url('visacard.png');
			background-size: cover; float: left;
			background-position: center;
			background-repeat: no-repeat; border: 1.5px solid #1F2177;
			margin-bottom: 30px;
		}
		.visa:hover{
			width: 160px;height: 110px;
			margin-left:5px; margin-bottom: 20px; margin-right: 10px;
		}
		.pay {
			width: 150px;
			height: 100px;
			margin-left: 10px; margin-right: 15px;
			background-image: url('paypal.jpg');
			background-position: center;
			background-size: cover;  float: left;
			border: .5px solid lightgray;
			margin-bottom: 30px;

		}
		.pay:hover{
			width: 160px;height: 110px;
			margin-left:5px; margin-bottom: 20px; margin-right: 10px;
		}
		.call{
			height: 80px; width: 243px;
			background-color: #009900;
			border-radius: 10px;
			float: left;
			
			margin-left: 15px; 
		}

		.msg{
			height: 80px; width: 243px;
			background-color: red;
			border-radius: 10px;
			float: left;
			
			margin-left: 15px; 
		}
		.call label, .msg label{
			font-size: 25px; line-height: 80px;color: white;

		}
		
	</style>
</head>
<body>
	<div class="body">
		<div class="main">
			<h1>Hello  <?php echo $m." ".$name; ?> </h1>
			your bill is <?php echo $bill; ?><br>
			<label>Pay Your Bill</label><br><br>
			<a href="#"><div class="master"></div></a>
			<a href="#"><div class="visa"></div></a>
			<a href="#"><div class="pay"></div></a>
			<h1>For more information:</h1>
			<a href=""><div class="call"> <img src="call.png" style="height: 64px; width: 64px; float: left; margin-top: 8px; margin-left: 3px;"><label>+880171608805</label> </div> </a>
			<a href=""><div class="msg"><img src="msg.png" style="height: 64px; width: 64px; float: left; margin-top: 8px; margin-left: 3px;"><label>+880171608805</label>  </div> </a>

		</div>
	</div>
<?php include 'footer.php'; ?>
</body>
</html>