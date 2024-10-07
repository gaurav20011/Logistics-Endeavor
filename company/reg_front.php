<?php

include '../config.php';

$admin = new Admin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
	<meta name="author" content="Colorlib">
	<meta name="keywords" content="Colorlib Templates">

	<!-- Title Page-->
	<title>Company Registration</title>

	<!-- Icons font CSS-->
	<link href="assets/regpage_assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="assets/regpage_assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Vendor CSS-->
	<link href="assets/regpage_assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="assets/regpage_assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="assets/regpage_assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
	<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
		<div class="wrapper wrapper--w790">
			<div class="card card-5">
				<div class="card-heading">
					<h2 class="title">Company Registration</h2>
				</div>
				<div class="card-body">
					<form autocomplete="off" action="controller\reg&login_controller.php" method="POST" enctype="multipart/form-data">

						<!-- company name -->
						<div class="form-row">
							<div class="name">Company Name</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="company_name" placeholder="company name" required pattern="[a-zA-Z'-'\s]*" title="No numbers or special characters are allowed">
								</div>
							</div>
						</div>

						<!-- user name -->
						<div class="form-row">
							<div class="name">User name</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="username" placeholder="username" required pattern="[a-z]+" title="only lower case letters are allowed without space">
								</div>
							</div>
						</div>

						<!-- password-->
						<div class="form-row">
							<div class="name">Password</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="password" name="password" placeholder="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="At least 1 Uppercase, 1 Lowercase, 1 Number,1 Symbol(!@#$%^&*_=+-) Min 8 chars and Max 12 chars">
								</div>
							</div>
						</div>

						<!-- phone -->
						<div class="form-row">
							<div class="name">Phone</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="phone" placeholder="phone number" required pattern="[7-9]{1}[0-9]{9}" title="Phone number should start with 7,8,9 and contain 10 digits">
								</div>
							</div>
						</div>

						<!-- email -->
						<div class="form-row">
							<div class="name">Email</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="email" name="email" placeholder="Email" required>
								</div>
							</div>
						</div>

						<!-- location -->
						<div class="form-row">
							<div class="name">Select Location</div>
							<div class="value">
								<div class="input-group">
									<div class="rs-select2 js-select-simple select--no-search">
										<select name='location_id' required>
											<option selected disabled value="">select location</option>
											<!-- 🟥 while loop -->
											<?php $query = $admin->ret("SELECT * FROM `location` ");
											while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
												<option value="<?php echo $row['location_id']; ?>"><?php echo $row['location_name']; ?></option>

											<?php } ?>
										</select>
										<div class="select-dropdown"></div>
									</div>
								</div>
							</div>
						</div>

						<!-- upload file -->
						<div class="form-row">
							<div class="name">upload photo</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="file" name="image" required>
								</div>
							</div>
						</div>


						<div class="form-row p-t-20">
							<label class="label label--block">Are you an existing company?<a href="login_front.php">Login here</a></label>
						</div>
						<div>
							<button class="btn btn--radius-2 btn--red" type="submit" name="register">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery JS-->
	<script src="assets/regpage_assets/vendor/jquery/jquery.min.js"></script>
	<!-- Vendor JS-->
	<script src="assets/regpage_assets/vendor/select2/select2.min.js"></script>
	<script src="assets/regpage_assets/vendor/datepicker/moment.min.js"></script>
	<script src="assets/regpage_assets/vendor/datepicker/daterangepicker.js"></script>

	<!-- Main JS-->
	<script src="assets/regpage_assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->