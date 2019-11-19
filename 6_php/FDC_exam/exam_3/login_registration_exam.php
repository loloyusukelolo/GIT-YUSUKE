<?php 
include 'db_connect_exam3.php';
session_start();



// LOGIN
$_SESSION["is_logged_in"];
if (isset($_GET["logout"])) {
    unset($_SESSION["is_logged_in"]);
    header("Location:login_exam.php");
    return fales;

}

if (isset($_SESSION["is_logged_in"])) {
    header("Location: exam3_home.php");
    return fales;

}



if (isset($_POST["user_email"])) {
    $email = $_POST["user_email"];
    $password = $_POST["user_password"];
    $sql = "
    SELECT
    id
    FROM
    members
    WHERE
    email = '$email' 
    and
    password = '$password'
    ";
    var_dump($sql);
    
    $result = mysqli_query($CONNECTION, $sql);

    $num_rows = mysqli_num_rows($result);

    var_dump($num_rows );

    if ($num_rows > 0) {
       $_SESSION["is_logged_in"] = true;
       header("Location: exam3_home.php");
       return false;

   } 

}


// REGISTRATION
if (isset($_POST["username"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) 
) {
    $Name = $_POST['username'];
    $User_email = $_POST['email'];
    $Password = $_POST['password'];
    $c_password = $_POST['confirm_password'];


if ($password == $c_password) {
   $sql ="
    INSERT INTO
    `members`
    (`id`,`username`,`email`,`password`) 
    VALUES 
(NULL, '$Name','$User_email','$Password');
";


var_dump( $sql);



$insert_result = mysqli_query($CONNECTION, $sql);
var_dump($insert_result);
var_dump(mysqli_error($CONNECTION));
die();
}else {
    echo "do not much";
}

}

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <title>Signin Template for Bootstrap</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom ;styles for this template -->
        <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" method="POST">
            <h3>LOGIN</h3>

            <!-- email daddress -->
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="user_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

            <!-- passwprd -->
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="Password" required>

            <div class="checkbox mb-3">
                <label>
                    
                </label>
            </div>

            <!-- login button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

  <input type="text" name ="user_first_name" class="form-control" placeholder="Firstname" required>
            <input type="text" name ="user_last_name" class="form-control" placeholder="Lastname" required>
            <input type="text" name ="user_email" class="form-control" placeholder="Email" required>
            <input type="password" name ="user_password" class="form-control" placeholder="Password" required>
            <input type="password" name ="confirm_password" class="form-control" placeholder="Confirm Password" required>

             <div class="checkbox mb-3">
                <label>
                    <a href="login.php">
                        Sign in
                    </a>
                </label>
            </div>

            <!-- login ;button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>



        </form>



    </body>
</html>