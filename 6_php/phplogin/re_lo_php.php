<?php 
include 'db_connect.php';



// REGISTRATION  !!!!!


if (isset($_POST["your_name"])&&
	isset($_POST["new_email"])&&
	isset($_POST["Password"])
	
) {
	$name = $_POST['your_name'];
$email = $_POST['new_email'];
$password = $_POST['Password'];
$c_password = $_POST['cnf_password'];


if ($password == $c_password) {
	$sql ="
	INSERT INTO
	`ContactSystemSpecs`
	(`id`,`name`,`email`,`password`) 
	VALUES 
	(NULL,'$name','$email','$password');
	";



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
    header("Location:re_lo_top_pages.php");
    return fales;

}

if (isset($_SESSION["is_logged_in"])) {
    header("Location:re_lo_top_pages.php");
    return fales;

}
// var_dump($_POST);


if (isset($_POST["email"])) {
    $email2 = $_POST["email"];
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
       header("Location: re_lo_top_pages.php");
       return false;

   } 

}


 ?>