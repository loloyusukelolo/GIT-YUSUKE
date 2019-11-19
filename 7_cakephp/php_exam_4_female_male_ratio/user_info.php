
<?php 
include 'db_con1.php';



// $query=myqueli($conecton,$count_femail);
// $result=mysqli_featch_assoc($query);
// $num_count_other=$result[num_count_other];

// $femail= "SELECT
// count(*)AS femail_count 
// FROM
// users
// WHERE
// gender =1"



// $errors = array();

if(isset($_POST['date1'])&&
	isset($_POST['date2'])
) {
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];

 if ($date1 OR $date2 === '') {
     $all ="SELECT * FROM `users`";
 }

// if ($date1 < $date2 ) {
// 	$sql = "SELECT * FROM users WHERE created >= '$date1' AND created <='$date2'";
	


if ($date1 < $date2 ) {
 $user = "SELECT count(*) FROM users 
 WHERE 
 created AND
gender = 2 OR
gender = 1 OR
gender = 0
between '$date1' AND '$date2'";

$query = myqueli($CONNECTION,$user);
$result = mysqli_featch_assoc($query);
$user_by_search = $result['id'];
}

var_dump($user_by_search);
}


// $femail= "SELECT
// count(*)AS femail_count 
// FROM
// users
// WHERE
// gender =1"
// // SELECT
// // count(*)AS femail_count 
// // FROM
// // users
// // WHERE 
// // gender !=1


// echo"totaluser" ; "$numcountall"."_".(($nucoyntall/$numcountall*100));



// echo"totaluser";"$numcountall"."_".(($nucountmall/$numcountmail*100))


//  $result = mysqli_query($CONNECTION,$user);
//   $user_row = mysqli_fetch_assoc($result);
//   $_SESSION["user_id"]=$user_row['id'];


// print_r($result);

// var_dump($all);


?>







<!DOCTYPE html>
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
<body>
    <form action="" method="POST">
    <input type="datetime-local" name="date1" >
    <input type="datetime-local" name="date2">
   <button class="btn btn-lg btn-primary btn-block" type="submit">click</button>
</form>

</body>
</html>