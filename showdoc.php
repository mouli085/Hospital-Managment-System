<style type="text/css">
	.mySlides{
		height: 350px;
		width: 600px;
		float: left;
		border:3px dashed #000880;
		margin-left: 50px;
	}
	.mySlides table{
		height: 300px;
		width: 400px;
		background-color: #66ffcc;
		border-radius: 20px;
		border: 3px solid white;
		margin-left: 100px;
		margin-top: 25px;
		opacity: 1;
		padding-left: 20px;
	}
	.mySlides table tr{
		width: 90%;
		margin-left: 20px;
		height: 30px;
		font-size: 20px;
	}
  .mySlides table td input{
    width: 100%;
    border: none;background-color:#66ffcc; font-size: 20px; 
  }
	.display-left{
		float: left;
		margin-top: 150px;
		width: 40px;
		height: 40px;
		font-size: 20px;
		margin-left: 10px;
		background-color: #000880;
		color: white;
		border: none;
		border-radius: 4px;
	}
	.display-right{
		float: right;
		margin-top: 150px;
		width: 40px;
		font-size: 20px;
		height: 40px;
		background-color: #000880;
		margin-right: 10px;
		border: none;
		border-radius: 4px;
		color: white;
	}
  .mySlides form input[type=submit]{
  height: 40px;
  width: 200px;
  background-color:#08dd9a; 
  border:none;
  border-radius: 4px;
  font-size: 20px;
}
.mySlides form input[type=submit]:hover{
   background-color:#046244; 
   color: white; font-size: 22px;
}
.hudai{
  width: 85%;
  height: 50px;
  background-color: #009966; color: white;
  padding-left: 10px;
  line-height: 50px;
  font-size: 20px; border-radius: 5px;
  border: 1px solid white;

}
.hudai:hover{
  background-color: #006644;
}
</style>

<?php  
   
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: '.mysql_error());
      }
      mysql_select_db("my_db", $con);
      $res= mysql_query("select  * from doctors");
      if (isset($_POST['search_type'])) {
      	$type =$_POST['search_type'];
      	$res= mysql_query("select  * from doctors where specialiti = '$type'");
      } 
      elseif (isset($_POST['by_type'])) {
      	$type =$_POST['specialty'];
      	if ($type=="0") 
      		$res= mysql_query("select  * from doctors");
      	else
      		$res= mysql_query("select  * from doctors where specialiti = '$type'");
        }
      elseif (isset($_POST['by_name'])) {
          	 $part_name= $_POST['search_doctor'];
          	 $sql="SELECT *
FROM `doctors`
WHERE CONCAT( `Name` ) LIKE '%$part_name%'";
				$res = mysql_query($sql);
          }  
      if(mysql_num_rows($res)>0){
      while ($row= mysql_fetch_assoc($res)) {
      	$name=$row['Name'];
      	$speciality=$row['specialiti'];
        $write= $row['write_something'];
      	$gender = $row['gender'];
        $username=$row['username'];
      	echo "<div class='mySlides'>";
		echo "<button class='display-right' onclick='plusDivs(1)'>&#10095;</button>";
      	echo "<button class='display-left' onclick='plusDivs(-1)'>&#10094;</button>";
        echo "<form action='appointment.php' method='POST'>";
      	echo "<table>";
      	if ($gender == "Male") {
      		echo "<tr><td><img src='doctor(2).png'></td></tr>";
      	}
      	else if ($gender == "Female") {
      		# code...
      		echo "<tr><td><img src='doctor(3).png'></td></tr>"; 
      	}
      	echo "<input type='text' name='doc_username' value='$username' style='display: none;'>  ";     	
      	echo "<tr><td>Name</td><td><input type='text' name='doc_name' value='$name' readonly ></td></tr>";

      	echo "<tr><td>Speciality</td><td><input type='text' name='doc_speciality' value='$speciality' readonly >  </td></tr>";
        echo "<tr><td>Comment</td><td><textarea readonly rows='1' cols='30' style='background-color:#66ffcc; border:none; '>$write</textarea></td></tr>";
        if ($_SESSION['login']=="login_pat"||$_SESSION['login']=="login_ad"||$_SESSION['login']=="login_doc") {
        echo "<tr><td></td><td><input  type='submit' name='set_appointment' value='Set Appoiment' ></td></tr>";} 
        else
        {
          echo "<tr><td></td><td><div class='hudai' onclick='popin()'>Login First for appointment</div></td>";
        }
      	echo "</table>";
        echo "</form>";
      	echo "</div>"; 	
      }}
      else{
      	echo "no data found";
        echo "<a href='physician.php'>All doc List </a>";
      }

?>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
