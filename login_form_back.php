
<style type="text/css">
	.login_form_back{
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
	.img{
		width: 30px;height: 30px; 
		float: right; margin: 20px; background-image: url(close.png); background-position: center; background-size: cover;
	}
	.img:hover{
		background-image: url(close2.png);
	}
	.login_form{
		background-color: #9d4895;
		width: 400px;
		height: 400px;
		margin-left: auto; margin-right: auto; 
    padding: 20px;
    margin-top: 100px;
    border: 1px solid white;

    border-radius: 30px;
    color: white; opacity: .9;
    font-size: 18px;
	}
	.login_form form
	{
		width: 100%; height: 200;
	}
	.login_form form .login_img{
		width: 85px; height: 95px; border-radius: 85px 95px 85px 95px; background-color: white; margin-top: -65px; margin-left: 150px;
	}
	.login_form form select{
		width: 140px; margin-left: 10px; height: 35px; padding-left: 20px; font-size: 20px; color: #330033;  margin-bottom: 10px;border: 1px solid #330033 ;
	}
	.login_form form input{
		width: 100%;
		height: 40px;
		margin-bottom: 15px;
		border: none; background-color: #9d4895;
		border-bottom: 2px dashed #330033; border-radius: 4px; padding-left: 20px; 
		font-size: 20px; color: white;
	}
	.login_form form input[type=checkbox]{
		margin-right: 10px; border-radius: 0px; padding: 0px; float: left; width: 10px; height: 10px; line-height: 10px;
	}
	.login_form form input[type=submit]
	{
		width: 150px; border:none;
		background-color: #334d4d; margin-top: 10px;

	}
	.login_form form input[type=submit]:hover{
		background-color: #293d3d; font-size: 22px; width: 152px; height: 42px; margin-top: 9px;
	}
	.login_form span {
		color: #33FF00;
		 font-size: 25px;
	}
	.login_form #reg_btn{
		float: right;
		width: 200px;
		border-radius: 4px; border:none;background-color: #334d4d; margin-top: 10px; 
		height: 40px; color: white; font-size: 20px;

	}
	.login_form #reg_btn:hover{
		background-color: #293d3d; font-size: 22px; width: 202px; height: 42px; margin-top: 9px;
	}
</style>
<div class="login_form_back" id="login_form_back">
	<div class="img" onclick="getElementById('login_form_back').style.display='none'"></div> 
	<div class="login_form">
	
			<form action="validateall.php"  method="POST" id="login_box" style="">
					<img src="users.png" class="login_img" style="">
										
					<select name="type" class="typeselect"  >
						<option value="Patient">Patient</option>
						<option value="Doctor">Doctor</option>
						<option value="Admin">Admin</option>
					</select><br><br>
					<input type="text" name="username" placeholder="Username" value="<?php {echo ($_COOKIE['username']);} ?>" maxlength="15" required>
					<input type="password" name="password" placeholder="Password" maxlength="15" value="<?php {echo $_COOKIE['password'];} ?>"  required>
					<div ><input type="checkbox" name="remember" ><label for="remember-me">REMEMBER ME</label></div>
					<input type="submit" name="login" id="login" value="LOGIN" >
				</form>
				
				<br><br> <span style="text-decoration: bold;">Not yet Registerred??</span><br>
				<input type="submit" name="reg_btn" id="reg_btn" value="Registration" onclick="document.getElementById('reg_form_back').style.display='block';document.getElementById('login_form_back').style.display='none' "><br>
	</div>
				

</div>