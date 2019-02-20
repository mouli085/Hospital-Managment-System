<link rel="stylesheet" type="text/css" href="home.css">

<div class="reg_form_back" id="insert_emp">

<button onclick="document.getElementById('insert_emp').style.display='none'" class="close">x</button><br><br>
<div class="reg_form"  >
	
	<form action="insert.php" method="post" name="form1">
		<select name="type" id="type" required>
				<option value="Nurse">Nurse</option>
				<option value="Receiptionist">Receiptionist</option>
				<option value="Wordboy">Word boy</option>
				<option value="Otherstaff">Other staff</option>

			</select>
		<input id="name" type="text" name="Name" placeholder="Full Name:" maxlength="30" required><br>
		<input type="number" name="id" placeholder="ID" maxlength="11" required>
		Gender: <input id="gender" type="radio" name="gender" value="Male" >male  
					<input id="gender" type="radio" name="gender" value="Female" >female  
				    <input id="gender" type="radio" name="gender" value="Other">other<br>
		Date of Birth:  <input id=" b_date" type="date" name="Birth" style=" height: 30px; width: 50%" required>
		
		<input type="number" name="mobile" placeholder="Mobile No." maxlength="11" required>
		
		<input type="submit" value="Submit"  id="reg_sub_btn"/>
	</form>
</div>
</div>