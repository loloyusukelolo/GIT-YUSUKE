
<?php 

include  're_lo_php.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="re_lo.css">
	<title>Document</title>
</head>
<body>
	<form  method="POST">


		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<div name = "center" class="container-register-form">
			<div class="form">
				<div class="note">
					<span class="roll">Registrat</span>
				</div>

				<div class="form-content">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name ="your_name"class="form-control" placeholder="Your Name *" value=""/>
							</div>
							<div class="form-group">
								<input type="text" name = "new_email"class="form-control" placeholder="Email address *"required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name = "password"class="form-control" placeholder="New Password *" required>
							</div>
							<div class="form-group">
								<input type="text" name ="cnf_password" class="form-control" placeholder="Confirm Password *" vrequired>
							</div>
						</div>
					</div>
					<a class="btn" href=""><span>Log-in</span><span>Click</span></a>


				</div>
			</div>
		</div>
		<div name = "center" class="container-register-form">
			<div class="form">
				<div class="note">
					<span class="roll">Login</span>
				</div>
				<div class="form-content">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name = "email"class="form-control" placeholder="Email address *" value=""/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Password *" value=""/>
							</div>

						</div>
					</div>
					<a class="btn" href=""><span>Log-in</span><span>Click</span></a>

	

					</form>
				</body>


				</html>
