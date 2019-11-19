<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();

// - connection logic
$CONNECTION = mysqli_connect(
	"localhost", 
	"root", 
	"123", 
	"fdc_exercise"
);

// var_dump($CONNECTION);

// REGISTRATION  !!!!!


if (isset($_POST["your_name"])&&
	isset($_POST["new_email"])&&
	isset($_POST["password"])
	
) {
	$name = $_POST['your_name'];
$email = $_POST['new_email'];
$password = $_POST['password'];
$c_password = $_POST['cnf_password'];


if ($password == $c_password) {
	$sql ="
	INSERT INTO
	`ContactSystemSpecs`
	(`id`,`name`,`email`,`password`) 
	VALUES 
	(NULL,'$name','$email','$password');
	";
var_dump($sql);
die();



	$insert_result = mysqli_query($CONNECTION, $sql);
	var_dump($insert_result);

	var_dump(mysqli_error($CONNECTION));


}else {
	echo "Please check ";
}

}


// LOG_IN!!




$_SESSION["is_logged_in"];
if (isset($_GET["logout"])) {
    unset($_SESSION["is_logged_in"]);
    header("Location:d.php");
    return fales;

}

if (isset($_SESSION["is_logged_in"])) {
    header("Location:top.php");
    return fales;

}
// var_dump($_POST);


if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["form-control"];
    $sql = "
    SELECT
    id
    FROM
  ContactSystemSpecs
    WHERE
    email = '$email' 
    and
    password = '$password'
    ";
    //var_dump($sql);
    
    $result = mysqli_query($CONNECTION, $sql);

    $num_rows = mysqli_num_rows($result);






    //var_dump($num_rows );
    var_dump($sql);
    //var_dump($CONNECTION);

    var_dump($result);
    if ($num_rows > 0) {
       $_SESSION["is_logged_in"] = true;
       header("Location: ");
       return false;

   } 

}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Document</title>
</head>
<body>
	<form  method="POST">
ss

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
				</div>
			</div>
		</div>

		<div name = "center" class="container-register-form">
			<div class="form">
				<div class="note">
					<span class="roll">Login</span>
				</div>



				ddd
				<div class="form-content">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name = "up_date_name"class="form-control" placeholder="name" value=""/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name = "password"class="form-control" placeholder="Your Password *" value=""/>
							</div>

						</div>

						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name = "up_date_email"class="form-control" placeholder="Password *" value=""/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name = "cnf_password"class="form-control" placeholder="confirm password *" value=""/>
							</div>

						</div>
					</div>
					<a class="btn" href=""><span>UP-</span><span>Click</span></a>
				</div>
			</div>
		</div>
        <a href="https://www.sejuku.net">
            <button type="button">back！</button>
        </a>



				</form>
			</body>


			</html>
