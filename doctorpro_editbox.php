<div class="edit_box_back" id="edit_box_back">
	<button class="close" onclick="document.getElementById('edit_box_back').style.display = 'none';">X</button>
	<div class="edit_box">
		<form action="doctorpro_edit.php" method="POST">
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
				<tr><th>Write Something:</th><td><input type="text" name="old_write" value="<?php echo $_SESSION['write']; ?>" readonly></td>
						<td><input type="text" name="new_write" value="<?php echo $_SESSION['write']; ?>" ></td></tr>
				
			</table>
			<input type="submit" name="edit_value" value="Edit" class="edit" style="margin-left: 40px;">
		</form>
	</div>
</div>
<style type="text/css">
	#add_pres{
	display: none;
	height:30%;
	width: 30%;
	position: fixed;
	z-index: 1;
	padding-top: 0px;
	overflow: auto;
	background-color: rgb(0,0,0); 
	background-color: rgba(0,0,0,0.4); 
	left: 0; top: 0;
}
.close{height:50px; width: 50px; border-radius: 20px; margin-right: 100px;
	border:none;float: right; background-color: red; color: white; font-size: 30px;
margin-top:50px;}
</style>
<div id="add_pres" class="add_pres">
	<button class="close" onclick="document.getElementById('add_pres').style.display = 'none';">X</button>
	<div class="edit_box">

	
	</div>
</div>
