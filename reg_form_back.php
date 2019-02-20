<style type="text/css">
	#reg_btn{width: 155px; height: 25px; font-size: 15px; border-radius: 4px; background-color: white; border: none; color: #008080; float: right;}
#reg_btn:hover{
	background-color: #008080; color: white;
}
#reg_form_back{
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
.reg_form{
	background-color: #583655;
 	margin-left: auto; margin-right: auto; 
    padding: 20px;
    margin-top: 25px;
    border: 1px solid white;
    width: 600px;
    height: 450px;
    border-radius: 20px;
    color: white; opacity: .9;
    font-size: 20px;
}

.reg_form input[type=radio]
{
	 height: 15px; width: 15px;margin-left:  12px; 
}
.reg_form form
{
	width: 600px;
	float: left;
}
.reg_form form input
{
	background-color: #583655;color: white;
	height: 40px; width: 95%; border-radius: 4px; font-size: 20px; 
	border: none; border-bottom: 2px dashed #330033;
	padding-left: 5px;margin-bottom: 10px; padding-left:  10px;
}
#reg_sub_btn{font-size: 15px; border-radius: 4px; background-color: white; border: none; 
	color: #008080; height: 25px; width: 80px;}
.close{
	width: 30px;height: 30px; 
		float: right; margin: 20px; background-image: url(close.png); background-position: center; background-size: cover;
}
.close:hover{
	background-image: url(close2.png);
}
.login_bottom_button{
	width: 85px;
	height: 80px;
	float: left;
	margin-top: 10px;
	background: white;
	color: #008080;
	border-radius: 10px;
	margin-right: 10px;
	font-size: 20px;
	border: none;
	margin-top: 160px;
}
.login_bottom_button:hover{
	background-color: #0099ff;
	color: white;
	font-size: 22px;
}
.custom-select_speciality{
	height: 30px; width: 95%;border-radius: 4px; font-size: 20px; 
	margin-bottom: 10px; color:#008080;
}
.form1 span{
	margin-left: -10px; font-size: 20px; color: red; 

}
</style>

<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#feedback1').load('checkuser.php').show();
			$('#username1').keyup(function(){
				$.post('checkuser.php', { username: form1.username.value, type: form1.type.value }, function(result){
					$('#feedback1').html(result).show();
				});
			});
			$('#feedback2').load('checkuser.php').show();
			$('#username2').keyup(function(){
				$.post('checkuser.php', { username: form2.username.value, type: form2.type.value }, function(result){
					$('#feedback2').html(result).show();
				});
			});
			$('#feedback3').load('checkuser.php').show();
			$('#username3').keyup(function(){
				$.post('checkuser.php', { username: form3.username.value, type: form3.type.value }, function(result){
					$('#feedback3').html(result).show();
				});
			});
			$('#feedback_e1').load('checkemail.php').show();
			$('#email1').keyup(function(){
				$.post('checkuser.php', { username: form3.username.value, type: form1.type.value, email: form1.email.value  }, function(result_e){
					$('#feedback_e1').html(result_e).show();
				});
			});
			$('#confirm_pass1').keyup(function(){
				$.post('confirm_pass.php',{pass: form1.pass.value, confirmpass: form1.confirmpass.value},function(result1){
					$('#confirm1').html(result1).show();
				})
			});
			$('#confirm_pass2').keyup(function(){
				$.post('confirm_pass.php',{pass: form2.pass.value, confirmpass: form2.confirmpass.value},function(result1){
					$('#confirm2').html(result1).show();
				})
			});
			$('#confirm_pass3').keyup(function(){
				$.post('confirm_pass.php',{pass: form3.pass.value, confirmpass: form3.confirmpass.value},function(result1){
					$('#confirm3').html(result1).show();
				})
			});
		});
	</script>
<link rel="stylesheet" type="text/css" href="home.css">
<div id="reg_form_back">

		<div onclick="document.getElementById('reg_form_back').style.display='none'" class="close"></div><br><br>
		<div class="reg_form" id="Patient_reg" >
			<!-- <button class="login_bottom_button" onclick="document.getElementById('Doctor_reg').style.display='block'; document.getElementById('Patient_reg').style.display='none' " class="left" style="float: left;">For Doctors</button> -->
			<form action="insert.php" method="post" name="form1" class="form1">
				<span>REQUIRED FIELDs *</span>
				<input type="text" name="type" value="Patient"  readonly><br>
				<span>*</span><input id="name" type="text" name="Name" placeholder="Full Name:" maxlength="30" required><br>
				Gender: <input id="gender" type="radio" name="gender" value="Male" >male  
							<input id="gender" type="radio" name="gender" value="Female" >female  
						    <input id="gender" type="radio" name="gender" value="Other">other<br>
				<span>*</span>Date of Birth:  <input id=" b_date" type="date" name="Birth" style=" height: 30px; width: 50%" required><br>
				<span>*</span><input id="email1" type="Email" name="email" placeholder="Email:" maxlength="40" required style="width: 70%"> <div style="width: 27%;float: right; padding-left: 5px;" id="feedback_e1"></div> <br>
				<span>*</span><input id="username1" type="text" name="username" placeholder="UserName:" maxlength="15" style="width: 50%" required> <div style="width: 47%;float: right; padding-left: 5px;" id="feedback1"></div> <br>
				<span>*</span><input id=" pass" type="password" name="pass" placeholder="Password:" maxlength="32" required><br>
				<span>*</span><input id="confirm_pass1" type="password" name="confirmpass" placeholder="Confirm your Password:" maxlength="32" style=" width: 80%" required> <div id="confirm1" style="float: right; width: 18%, padding-left: 5px;"></div><br>
				<input type="submit" value="Submit"  id="reg_sub_btn"/>
			</form>
			
			<!-- <button class="login_bottom_button"  onclick="document.getElementById('Admin_reg').style.display='block'; document.getElementById('Patient_reg').style.display='none' " style="float: right;">For Admins</button> -->


  		</div>
			<div class="reg_form" id="Doctor_reg" style="display: none; height: 550px; margin-top: 0px;">
  			<!-- <button class="login_bottom_button"  onclick="document.getElementById('Patient_reg').style.display='block'; document.getElementById('Doctor_reg').style.display='none' " class="left" style="float: left; margin-top: 235px;">For Patients</button>  -->
  			 <form action="insert.php" method="post" name="form2" >
  				<input id="name" type="text" name="Name" placeholder="Full Name:" maxlength="30" required><br> 
				 Gender: <input id="gender" type="radio" name="gender" value="Male" >male  
							<input id="gender" type="radio" name="gender" value="Female" >female  
						    <input id="gender" type="radio" name="gender" value="Other">other<br>
				Date of Birth:  <input id=" b_date" type="date" name="Birth" style=" height: 30px; width: 50%" required>
			 <input id=" mobile" type="number" name="mobile" placeholder="Phone number:" maxlength="11"><br>  
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
							<option value="surgeons">Surgeons</option> 
				 <input id="email" type="Email" name="email" placeholder="Email:" maxlength="40" required><br>
				<input id="username2" type="text" name="username" placeholder="UserName:" maxlength="15" style="width: 50%"> <div style="width: 47%;float: right; padding-left: 5px;" id="feedback2"></div> <br>
				<input id=" pass" type="password" name="pass" placeholder="Password:" maxlength="32" required><br>
				<input id="confirm_pass2" type="password" name="confirmpass" placeholder="Confirm your Password:" maxlength="32" style=" width: 80%" required> <div id="confirm2" style="float: right; width: 18%, padding-left: 5px;"></div><br>
				<textarea name="write_something" cols="40" rows="3" placeholder="Write something.. " style="font-size: 15px;" maxlength="200"></textarea><br>
				<input type="submit" value="Submit"  id="reg_sub_btn"/>
  			</form>
			 
			<!-- <button class="login_bottom_button"  onclick="document.getElementById('Admin_reg').style.display='block'; document.getElementById('Doctor_reg').style.display='none' " style="float: right;  margin-top: 235px;">For Admins</button>-->
  		</div> 


  		<div class="reg_form" id="Admin_reg" style="display: none;"> 
  		<!-- 	<button class="login_bottom_button"  onclick="document.getElementById('Patient_reg').style.display='block'; document.getElementById('Admin_reg').style.display='none'">For Patients</button> --> -->
  			 <form action="insert.php" method="post" name="form3" >
  				<input type="text" name="type" value="Admin" readonly>
  				<input id="name" type="text" name="Name" placeholder="Full Name:" maxlength="30" required><br>
				Gender: <input id="gender" type="radio" name="gender" value="Male" >male  
							<input id="gender" type="radio" name="gender" value="Female" >female  
						    <input id="gender" type="radio" name="gender" value="Other">other<br>
				Date of Birth:  <input id=" b_date" type="date" name="Birth" style=" height: 30px; width: 50%" required>
				<input id="email" type="Email" name="email" placeholder="Email:" maxlength="40" required><br> 
				 <input id="username3" type="text" name="username" placeholder="UserName:" maxlength="15" style="width: 50%"> <div style="width: 47%;float: right; padding-left: 5px;" id="feedback3"></div> <br>
				<input id=" pass" type="password" name="pass" placeholder="Password:" maxlength="32" required><br>
				<input id="confirm_pass3" type="password" name="confirmpass" placeholder="Confirm your Password:" maxlength="32" style=" width: 80%" required> <div id="confirm3" style="float: right; width: 18%, padding-left: 5px;"></div><br>
				<input type="submit" value="Submit"  id="reg_sub_btn"/>
  			</form>
  			
			<!-- <button class="login_bottom_button"  onclick="document.getElementById('Doctor_reg').style.display='block'; document.getElementById('Admin_reg').style.display='none' " style="float: right;">For Doctors</button>-->
			  
  		</div> 
	</div>
