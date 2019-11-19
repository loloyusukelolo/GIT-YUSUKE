<?php 
include 'db_connect_exam3.php';
session_start();


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
    AND
    password = '$password'
    ";
    var_dump($sql);
    
    $result = mysqli_query($CONNECTION, $sql);

    $num_rows = mysqli_num_rows($result);

    var_dump($num_rows );

    if ($num_rows > 0) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION["user_id"]=$row['id'];

       $_SESSION["is_logged_in"] = true;
       header("Location: exam3_home.php");
       return false;
   } 

}





// REGISTRATION


if (isset($_POST["1username"]) &&
    isset($_POST["1email"]) &&
    isset($_POST["1password"]) 
) {
    $first_name = $_POST['1username'];
    $email= $_POST['1email'];
    $password = $_POST['1password'];
    $c_password = $_POST['confirm_password'];


if ($password == $c_password) {
   $sql ="
    INSERT INTO
    `members`
    (`id`,`username`,`email`,`password`) 
    VALUES
(NULL, '$first_name','$last_name','$user_email','$password');
";

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
  
            <h3>LOGIN</h3>

            <!-- email daddress -->
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="user_email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus>
<br>
</br>
            <!-- passwprd -->
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="Password" >

            <div class="checkbox mb-3">
                <label>
                    
                </label>
            </div>

            <!-- login button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>



<!-- regist-page -->
      <form class="form-signin" method="POST">
 <input type="text" name ="1username" class="form-control" placeholder="name" >

            <input type="text" name ="1email" class="form-control" placeholder="email" >

            <input type="text" name ="1password" class="form-control" placeholder="password" >
            
            <input type="password" name ="confirm_password" class="form-control" placeholder="Confirm Password" >

             <div class="checkbox mb-3">
                <label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                </label>
            </div>



        </form>



    </body>
</html>