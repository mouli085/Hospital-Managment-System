
<div class="edit_box_back" id="edit_box_back">
	<button class="close" onclick="document.getElementById('edit_box_back').style.display = 'none';">X</button>
	<div class="edit_box">
		<form action="admin_edit.php" method="POST">
			<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
			<table>
				<tr><th></th><td style="background-color: aliceblue;"> Old Value</td><td style="background-color: aliceblue;"> New Value</td></tr>
				<tr><th>NAME</th><td><input type="text" name="old_name" value="<?php echo $_SESSION['name']; ?>" readonly></td>
					<td><input type="text" name="new_name" value="<?php echo $_SESSION['name']; ?>" ></td></tr>
				<tr><th>Gender:</th><td><input type="text" name="old_gender" value="<?php echo $_SESSION['gender']; ?>" readonly></td>
					<?php 
					if ($_SESSION['gender']=="Male") {
					echo "<td>";
					echo "<input id='gender' type='radio' name='new_gender' value='Male' checked='checked' >Male";
					echo "<input id='gender' type='radio' name='new_gender' value='Female' >Female ";
					echo "<input id='gender' type='radio' name='new_gender' value='Other' >Other ";
					echo "</td></tr>";
					}
					elseif ($_SESSION['gender']=="Female") {
					echo "<td>";
					echo "<input id='gender' type='radio' name='new_gender' value='Male' >Male";
					echo "<input id='gender' type='radio' name='new_gender' value='Female' checked='checked' >Female ";
					echo "<input id='gender' type='radio' name='new_gender' value='Other' >Other ";
					echo "</td></tr>";
					}
					else{
					echo "<td>";
					echo "<input id='gender' type='radio' name='new_gender' value='Male' >Male";
					echo "<input id='gender' type='radio' name='new_gender' value='Female' >Female ";
					echo "<input id='gender' type='radio' name='new_gender' value='Other' checked='checked' >Other ";
					echo "</td></tr>";
					}
					?>
					
				<tr><th>Birthdate:</th><td><input type="date" name="old_birth" value="<?php echo $_SESSION['birth']; ?>" readonly></td>
					<td><input type="date" name="new_birth" value="<?php echo $_SESSION['birth']; ?>" ></td></tr>
				<tr><th>Password:</th><td><input type="text" name="old_pass" value="<?php echo $_SESSION['pass']; ?>" readonly></td>
					<td><input type="text" name="new_pass" value="<?php echo $_SESSION['pass']; ?>" ></td></tr>
				<tr><th>Mobile NO:</th><td><input type="text" name="old_mobile" value="<?php echo $_SESSION['mobile']; ?>" readonly></td>
					<td><input type="text" name="new_mobile" value="<?php echo $_SESSION['mobile']; ?>" ></td></tr>
			</table>
			<input type="submit" name="edit_value" value="Edit" class="edit" style="margin-left: 40px;">
		</form>
	</div>
</div>


<div class="edit_box_back" id="addbill">
	<button class="close" onclick="document.getElementById('addbill').style.display = 'none';">X</button>
	<div class="edit_box"  style="height: 300px;">
			<form action="admin_edit.php" method="POST">
				<table  style="height: 230px;">
					<tr><th>Patient's username</th><td><input type="text" name="username" required></td></tr>
					<tr><th>Bill</th><td><input type="int" name="bill"  ></td></tr>
				</table>
				<input type="submit" name="addbill" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<div class="edit_box_back" id="viewAccounts">
		<button class="close" onclick="document.getElementById('viewAccounts').style.display = 'none';">X</button>
		<div class="edit_box" style="height: 300px;">
			<?php $pass=$_SESSION['pass'] ?>
			<form action="admin_edit.php" method="POST">
				<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
				<input type="text" name="pass" value="<?php echo $pass; ?>" style="display: none;" readonly >
				<table style="height: 230px;">
					<tr style="height: 40px; width:100%; ;"><th style="font-size: 20px">Account type</th><td><select style="width: 100%; height: 100%; background-color: aliceblue; border: none;border-bottom: 1px dashed darkgray; font-size: 18px; " name="account_type">
						<option value="Patient">Patient</option>
						<option value="Doctor">Doctor</option>
						<option value="Employee">Employee</option>

					</select></td></tr>
				</table>
				<input type="submit" name="viewAccounts" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<style type="text/css">
	.insert_emp_box{
	height: 500px;
	width: 500px;
	background-color: #00995c;
	margin-top: 50px;
	margin-left: 400px;
	padding: 15px; font-size: 20px;
	border-radius: 10px;
}
	
.insert_emp_box form{ margin-top: 20px;background-color:#00995c; }

.insert_emp_box form select{
	width: 200px; height: 40px; font-size: 20px; margin-left: 10px;

}
.insert_emp_box form input[ type='radio']{
	height: 15px; width: 15px;margin-left:  12px;

}
.insert_emp_box form input{
	width: 90%;
	height: 40px;
	/*margin-left: 10px;*/
	padding-left: 10px;
	margin: 10px;
	border: none;
	border-bottom: 1px solid blue; font-size: 20px; color: black;
}
.insert_emp_box form input[ type='submit']{
	width: 110px; height: 40px;
	background-color: #008080; color: white;
}
</style>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#feedback1').load('checkid_emp.php').show();
			$('#id').keyup(function(){
				$.post('checkid_emp.php', { username: form1.id.value}, function(result){
					$('#feedback1').html(result).show();
				});
			});
			
	</script>
<div class="edit_box_back" id="insert_emp">
		<button class="close" onclick="document.getElementById('insert_emp').style.display = 'none';">X</button>
		<div class="insert_emp_box">
			<form action="admin_edit.php" method="POST" name="form1">
				<select name="type" id="type" required>
					<option value="Nurse">Nurse</option>
					<option value="Receiptionist">Receiptionist</option>
					<option value="Wordboy">Word boy</option>
					<option value="Otherstaff">Other staff</option>

				</select>
				<input id="name" type="text" name="name" placeholder="Full Name:" maxlength="30" required><br>
				<input type="number" id="id" name="id" placeholder="ID" maxlength="11" style="width: 75%" required><div style="width: 25%;float: right; padding-left: 5px;" id="feedback1"></div><br>
				Gender: <input id="gender" type="radio" name="gender" value="Male">male  
							<input id="gender" type="radio" name="gender" value="Female">female  
						    <input id="gender" type="radio" name="gender" value="Other">other<br>
				Date of Birth:  <input id=" b_date" type="date" name="birth" style=" height: 30px; width: 50%" required>
				
				<input type="number" name="mobile" placeholder="Mobile No." maxlength="11" required>
				<input type="submit" name="insert_emp" value="INSERT" class="submit" >
			</form>
		</div>
</div>
<div class="edit_box_back" id="delete_emp">
		<button class="close" onclick="document.getElementById('delete_emp').style.display = 'none';">X</button>
		<div class="insert_emp_box" style="height: 250px;">
			<form action="admin_edit.php" method="POST" name="form1" style="height: 100px;">
				<select name="type" id="type" required>
					<option value="Nurse">Nurse</option>
					<option value="Receiptionist">Receiptionist</option>
					<option value="Wordboy">Word boy</option>
					<option value="Otherstaff">Other staff</option>

				</select>
				<input type="number" id="id" name="id" placeholder="ID" maxlength="11" required>
				<input type="submit" name="delete_emp" value="DELETE" style="color: white" class="submit" >
			</form>
		</div>
</div>
<style type="text/css">
	#doctor_reg_form_back{
		display: none;
		height: 100%;
		width: 100%;
		position: fixed;
		z-index: 1;
		padding-top: 0px;
		overflow: auto;
		background-color: rgb(0,0,0); 
		background-color: rgba(0,0,0,0.4); 
		left: 0; top: 0;
	}
	.close_doc_reg{
	width: 30px;height: 30px; 
		float: right; margin: 20px; background-image: url(close.png); background-position: center; background-size: cover;
	}
	.close_doc_reg:hover{
		background-image: url(close2.png);
	}
	.doc_reg_form{
		background-color: #99ffdd;
	 	margin-left: auto; margin-right: auto; 
	    padding: 20px;
	    margin-top: -5px;
	    border: 2px solid #006644;
	    width: 450px;
	    height: 510px;
	    border-radius: 10px;
	    line-height: 25px;
	    font-size: 20px;color: black; 
	}
	.doc_reg_form form{
		height: 100%;width: 100%;
	}
	.doc_reg_form form input{
		width: 400px;
		height: 40px;
		border: none;
		background-color: white;
		border-left:4px solid #006644;
		margin-bottom: 10px;color: black;padding-left: 10px; font-size: 15px;
	}
	.doc_reg_form input[type=radio]
{
	 height: 15px; width: 15px;margin-left:  12px; 
	 line-height: 25px;
}
.doc_reg_form form input[type=submit]{
	width: 200px; height: 45px; border: none; background-color: #008080; color: white;
	font-size: 18px; line-height: 45px; margin-top: -35px;
}
.doc_reg_form form input[type=submit]:hover{
	font-size: 22px;
}
span{
	font-size: 20px; color: red; float: left; margin-left: -10px; line-height: 40px;
}
</style>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function checkname()
{
 var name=document.getElementById( "UserName" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}

function checkemail()
{
 var email=document.getElementById( "UserEmail" ).value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  return false;
 }
}

function checkall()
{
 var namehtml=document.getElementById("name_status").innerHTML;
 var emailhtml=document.getElementById("email_status").innerHTML;

 if((namehtml && emailhtml)=="OK")
 {
  return true;
 }
 else
 {
  return false;
 }
}

</script>

<a  name="doctor_reg_form_back" ><div id="doctor_reg_form_back" >
	<div onclick="document.getElementById('doctor_reg_form_back').style.display='none'" class="close_doc_reg"></div><br><br>
	<div class="doc_reg_form">
		<form action="insertdoc.php" method="POST" name="doc_form">
			<span>REQUIRED *</span><br>
			<input id="name" type="text" name="name" placeholder="Doctor's Full Name:" maxlength="30" required><span>*</span><br>
				 <span> </span>Gender: <input id="gender" type="radio" name="gender" value="Male" >male  
							<input id="gender" type="radio" name="gender" value="Female" >female  
						    <input id="gender" type="radio" name="gender" value="Other">other<br>
				<span>*</span>Date of Birth:  <input id=" b_date" type="date" name="birth" style=" height: 30px; width: 50%" required>
			
				 <select name="speciality" class="custom-select_speciality" required>
              				<option value="0">- Select Speciality -</option>
							<option value="cardiologists">Cardiologists</option>
							<option value="dermatololgists">Dermatologists</option>
							<option value="ear-nose-and-throat-doctors">Ear, Nose, &amp; Throat Doctors</option>
							<option value="family-doctors">Family Doctors</option>
							<option value="gynecologists">Gynecologists</option>
							<option value="neurologists">Neurologists</option>
							<option value="orthopedists">Orthopedists</option>
							<option value="pathologists">Pathologists</option>
							<option value="pediatricians">Pediatricians</option>
							<option value="plastic-surgeons">Plastic Surgeons</option>
							<option value="psychiatrists">Psychiatrists</option>
							<option value="radiologists">Radiologists</option>
							<option value="surgeons">Surgeons</option><span>*</span>
				<span> </span> <input  id=" mobile" type="number" name="mobile" placeholder="Phone number:" maxlength="11"><br> 
				<span>*</span><input id="salary" type="number" name="salary" placeholder="Salary:" maxlength="6" required><br>
				<span>*</span>
				<input style="width: 60%" type="email" name="email" id="UserEmail" onkeyup="checkemail();" placeholder="Email:" maxlength="40" required>
 <span id="email_status" style="float: right;"></span><br>
				 <span>*</span><input type="text" name="username" id="UserName" onkeyup="checkname();" placeholder="UserName:" maxlength="15" style="width: 50%">
 <span id="name_status" style="float: right; "></span>
				<br>
				<span>*</span><input id=" pass" type="password" name="pass" placeholder="Password:" maxlength="32" required><br><br>
				<input type="submit" value="Submit" name="reg_doc" />
		</form>
	</div></a>
</div>
