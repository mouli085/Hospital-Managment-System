<?php  
session_start();
include ('header.php') ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.body
		{
			width: 1350px;height: 1850px;
			background-image: url(blog.jpg);
			background-position: center;
			background-size: cover;
		}
		#ques_pop_back{
			height: 100%;
			width: 100%;
			position: fixed;
			z-index: 1;
			padding-top: 25px;
			overflow: auto;
			background-color: rgb(0,0,0); 
    		background-color: rgba(0,0,0,0.4); 
    		left: 0; top: 0;
    		display: none;
		}
		#ques_pop
		{
			background-color: white;
			height: 450px;
			width: 600px;
			position: fixed;
			bottom: 30%;
			right: 30%;
			top: 10%;
			left: 30%;
			margin-top: 50px;
			border: 3px solid blue;
			padding: 10px;
			border-radius: 9px;

		}
		#ques_pop select {
		    width: 50%;
		    height: 30px;
		    border: none;
		    border-radius: 4px;
		    background-color: #f1f1f1;
		    font-size: 20px;
		    padding-left: 20px;
		}
		h1{ color: #00346E; font-size: 35px; }
		h2{ color: #00346E; font-size: 25px; }
		#ques_pop input
		{
			width: 500px;
			height: 50px;
			border: none;
			border-bottom: 1px inset #00346E; 
			padding-left: 20px;
			font-size: 20px;
			border-radius: 4px;
			
		}
		.faqs{
			width: 1050px; float: left; height: 1700px; background-color: white; margin-top: 100px; border-radius: 50px 0px 50px 0px;padding: 20px; 
		}
		.q
		{
			background-color: white;
			color: #008080;
			padding: 5px;
font-size: 20px
		}
		.a{
			background-color: #ccffff;
			padding: 5px;
			font-size: 18px;

		}
		.a ul li
		{
			background-color: #ccffff;
		}
		.button{
			color: white; background-color: #009973; font-size: 20px; border: none; border-radius: 4px; float: right; height: 40px; width: 150px;margin-right: 5px; margin-top: 0px;
		}
		.button:hover{
			font-size: 25px; background-color: #00664d; width: 160px; height: 50px; margin-right: 0px;margin-top: -5px;
		}
	</style>
</head>
<body>

	<div style="background-color: #00346E;width: 1350px; height: 10px;"></div>
	<div class="body">
		<div id="ques_pop_back">	
		<div id="ques_pop">
			<button onclick="document.getElementById('ques_pop_back').style.display='none'" style="height: 25px; width: 25px; border-radius: 12.5px; background-color: #00346E; color: white; float: right;">X</button>
			<form action="ques_insert.php" method="POST">
			<h2>Choose Language</h2>
			<select id="language" name="language">
				<option value="English">English</option>
				<option value="Bengali">Bengali</option>
			</select>
			<h2>Name:</h2>
			<input type="text" name="name" placeholder="Name">
			<h2>Your Question:</h2>
			<input type="text" name="ques" placeholder="Question.." required><br><br>
			<input id="submit" type="submit" name="submit" value="submit" style="color: white; background-color: #00cccc; font-size: 20px; border: none; border-radius: 4px;">
			</form>
		</div>
		</div>	
		<div style="width: 150px; float: left; height: 20px;">
			
		</div>
		<div  class=" faqs">
			<h1> Popular FAQ</h1>
			<button class="button" onclick="document.getElementById('ques_pop_back').style.display='block'" style=""> Ask</button>
			<?php 
				$con = mysql_connect("localhost","root","");
				if (!$con)
				  {
				  die('Could not connect: ' . mysql_error());
				  }


				mysql_select_db("my_db", $con);
				$res= mysql_query("select * from faq");
				if (mysql_num_rows($res)<1) {
					echo "no question found";
					# code...
				}
				else
					while ($row= mysql_fetch_assoc($res)){
					echo "<div class='q'>QUES: ".$row['ques']."<br> -".$row['name']."</div><br>";
					echo "<div class='a'>ANS:".$row['ans'] ."</div><br>";
				}
			?>
			
			
		</div>
		
	</div>
<?php include('footer.php')  ?>
</body>
</html>