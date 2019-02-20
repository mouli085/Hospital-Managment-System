<?php  include ('header.php') ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.body
		{
			background-image: url(back.jpg);
			width: 1350px;
			height: 700px;

		}
		.form_body
		{
			background-image: url(form_back.jpg);
			width: 900px;
			height: 600px;
			background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    margin-left: 175px;
		    padding-top: 75px;

		}
		.form_body form
		{
			margin-top: 50px;
		}
		.form_body form h1
		{
			font-size: 35px;
			color: #0b4132;
		}
		.form_body form input
		{
			width: 400px;
			height: 40px;
			font-size: 20px;
			padding-left: 4px;
			border: none;
			border-bottom: 1px inset #1a9975;
		}
		.form_body form .button
		{
			width: 400px;
			height: 40px;
			font-size: 20px;
			background-color: #1a9975;
			margin-top: 10px;
			color: white;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div style="background-color: #168364; width: 1350px; height: 10px;"></div>
	<div class="body">
		<div class="form_body">
			<div style="height: 600px; width: 200px; float: left"></div>
			<form action="amountsearch.php" method="POST">
				<h1>USERNAME:</h1>
				<input type="text" name="username" placeholder="UserName" required>
				<h1>PASSWORD:</h1>
				<input type="password" name="pass" placeholder="Password" required>
				<br>
				<input class="button" type="submit" name="search" value="VIEW MY BILL" >
			</form>
		</div>
	</div>

</body><?php include('footer.php')  ?>
</html>