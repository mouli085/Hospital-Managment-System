<?php 
session_start();
$type=$_SESSION['type'];    
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
 
mysql_select_db("my_db", $con);
				
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="profile.css">
 	<style type="text/css">
 		table{
 			width: 1350px;
 			height: auto;
 		}
 		table th{
 			width: 100px;
 			height: 50px;
 			
 		}
 		table tr{
 			height: 50px;
 			width: 1350px;
 		}
 		table td input{
 			width: 1030px;
 			height: 50px;
 			border: none;
 			padding-left: 20px;
 		}

 		.submit{
 			width: 200px; height: 50px; background-color: #008080; 
 			border-radius: 10px;
 		}
		 table tr:nth-child(odd) {background-color: aliceblue;}
		 table tr:nth-child(odd):hover {background-color: #0fcc99};
 	</style>
 </head>
 <body>
 	<div class="edit_box_back" id="edit_ans">
		<button class="close" onclick="document.getElementById('edit_ans').style.display = 'none';">X</button>
		<div class="edit_box">
			
		</div>
</div>
 	<?php  
 	$res= mysql_query("select * from faq");
	if (mysql_num_rows($res)<1) {
		echo "no question found";
		# code...
	}
	else
		
 		
		
		while ($row= mysql_fetch_assoc($res)){
			$ques=$row['ques'];
			$ans = $row['ans'];
			$name=$row['name'];
			if($name=="")
				$name="user";
			echo "<table>";
			echo "<form action='change_ans.php' method='POST'>";
	 		echo "<tr><th>QUESTION</th><td><input type='text' name='ques' value='$ques' readonly  ></td></tr>";
	 		echo "<tr><th>BY</th><td><input type='text' name='name' value='$name' readonly  ></td></tr>";
	 		echo "<tr><th>ANSWER</th><td><input type='text' name='ans' value='$ans' ></td><td ><input type='submit' name='edit_birth' value='Edit'  class='submit'></td></tr>";
	 		
	 		echo "<br>";
			echo "</form>";
	 		echo "</table>";
	}
				
				
 	?>
 	

 </body>
 </html>