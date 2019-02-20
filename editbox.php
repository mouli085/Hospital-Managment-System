<div class="edit_box_back" id="edit_box_back">
	<button class="close" onclick="document.getElementById('edit_box_back').style.display = 'none';">X</button>
	<div class="edit_box">
		<form action="edit.php" method="POST">
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
<div class="edit_box_back" id="edit_box_back1">
		<button class="close" onclick="document.getElementById('edit_box_back1').style.display = 'none';">X</button>
		<div class="edit_box">
			<form action="edit.php" method="POST">
				<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
				<table>
					<tr><td> Old Name</td><td> New Name</td></tr>
					<tr><td><input type="text" name="old_name" value="<?php echo $_SESSION['name']; ?>" readonly></td>
						<td><input type="text" name="new_name" value="<?php echo $_SESSION['name']; ?>" ></td></tr>
				</table>
				<input type="submit" name="edit_name" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<div class="edit_box_back" id="edit_box_back2">
		<button class="close" onclick="document.getElementById('edit_box_back2').style.display = 'none';">X</button>
		<div class="edit_box">
			<form action="edit.php" method="POST">
				<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
				<table>
					<tr><td> Old Value</td><td> New Value</td></tr>
					<tr><td><input type="text" name="old_gender" value="<?php echo $_SESSION['gender']; ?>" readonly></td>
						<td><input id="gender" type="radio" name="new_gender" value="Male"  >Male  
							<input id="gender" type="radio" name="new_gender" value="Female" >Female  
						    <input id="gender" type="radio" name="new_gender" value="Other">Other</td></tr>
				</table>
				<input type="submit" name="edit_gender" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<div class="edit_box_back" id="edit_box_back3">
		<button class="close" onclick="document.getElementById('edit_box_back3').style.display = 'none';">X</button>
		<div class="edit_box">
			<form action="edit.php" method="POST">
				<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
				<table>
					<tr><td> Old Birthdate</td><td> New Birthdate</td></tr>
					<tr><td><input type="date" name="old_birth" value="<?php echo $_SESSION['birth']; ?>" readonly></td>
						<td><input type="date" name="new_birth" placeholder="<?php echo $_SESSION['birth']; ?>" required></td></tr>
				</table>
				<input type="submit" name="edit_birth" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<div class="edit_box_back" id="edit_box_back4">
		<button class="close" onclick="document.getElementById('edit_box_back4').style.display = 'none';">X</button>
		<div class="edit_box">
			<form action="edit.php" method="POST">
				<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
				<table>
					<tr><td> Old Password</td><td> New Password</td></tr>
					<tr><td><input type="text" name="old_pass" value="<?php echo $_SESSION['pass']; ?>" readonly></td>
						<td><input type="text" name="new_pass" value="<?php echo $_SESSION['pass']; ?>" ></td></tr>
				</table>
				<input type="submit" name="edit_pass" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<div class="edit_box_back" id="edit_box_back5">
		<button class="close" onclick="document.getElementById('edit_box_back5').style.display = 'none';">X</button>
		<div class="edit_box">
			<form action="edit.php" method="POST">
				<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" style="display: none;" readonly >
				<table>
					<tr><td> Old mobile</td><td> New mobile</td></tr>
					<tr><td><input type="text" name="old_mobile" value="<?php echo $_SESSION['mobile']; ?>" readonly></td>
						<td><input type="text" name="new_mobile" value="<?php echo $_SESSION['mobile']; ?>" ></td></tr>
				</table>
				<input type="submit" name="edit_mobile" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>
<div class="edit_box_back" id="appointment">
		<button class="close" onclick="document.getElementById('appointment').style.display = 'none';">X</button>
		<div class="edit_box" style=" height: 350px">
			<form action="edit.php" method="POST" style=" height: 350px">
				<table style=" height: 250px">
					<tr><th>Patient's name</th><td><input type="text" name="patient" value="<?php echo $_SESSION['name']; ?>" required></td></tr>
					<tr><th>Doctor's name</th><td><input type="text" name="doctor"  required></td></tr>
					<tr><th>Date</th><td><input type="date" name="date" required ></td></tr>
					<tr><th>Time</th><td><input type="time" name="time" required ></td></tr>

				</table>
				<input type="submit" name="appointment" value="Edit" class="edit" style="margin-left: 40px;">
			</form>
		</div>
</div>