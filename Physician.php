<?php include ('header.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="physician.css">
</head>
<body>
	<div class="body">
		<div class="search">
			<div class="search_tmp" id="form">
				<h1 style="color: black;">Physician Directory</h1>
				<form class="search_tmp_form" action="" method="POST">
					<label>SEARCH BY PHYSICIAN TYPE</label>
					<select name="specialty" class="custom-select specialty" required>
              				<option value="0">- Select an option -</option>
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
                    </select>
                    <input type="submit" name="by_type" value="GO" class="button"><br>
                   <label>SEARCH BY NAME</label>
                   <input type="text" name="search_doctor" placeholder="Enter the name of doctor">
                    <input type="submit" name="by_name" value="GO" class="button"><br>

				</form>
				<form class="search_box" action="" method="POST">
				<h1 style="color: black;">Popular Searches</h1>
				<input type="submit" name="search_type" value="cardiologists" class="Popular_search">
				<input type="submit" name="search_type" value="gynecologists" class="Popular_search">

				<input type="submit" name="search_type" value="surgeons" class="Popular_search">
				<input type="submit" name="search_type" value="pediatricians" class="Popular_search">
				</form>
				<h1 style="color: black;">Popular Doctors</h1>
				<?php include 'showdoc.php';  ?>
			</div>
		</div>
	</div>
<!-- <div style="width: 1350px; height: 10px; background-color: darkgray;"></div> -->
<?php include('footer.php') ?>
</body>
</html>