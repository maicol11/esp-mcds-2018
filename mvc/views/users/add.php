<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> CRUD MVC (ADD USER)</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
	<style>
		body {
			font-family: 'Muli', sans-serif;
			font-weight: 300;
		}
	</style>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center"> <i class="fa fa-users"></i> CRUD MVC</h1>
				<hr>
				<h2><i class="fa fa-plus"> Add User </i></h2>
				<br><br>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						 <li class="breadcrumb-item"><a href="./">Home</a></li>
						 <li class="breadcrumb-item active">Add User</li>
				 	</ol>
				</nav>
				<form action="" method="POST">
					<div class="form-group">
						<label for="firstName">First Name:</label>
						<input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName" required>
					</div>
					<div class="form-group">
						<label for="lastName">Last Name:</label>
						<input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="phoneNumber">Phone Number:</label>
						<input type="number" class="form-control" placeholder="Phone Number" id="phoneNumber" name="phoneNumber" required>
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-lg" type="submit"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-dark btn-lg" type="reset"><i class="fa fa-broom"></i> Clear</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>