
<?php 
include 'db_con1.php';

if(isset($_POST['date1'])&&
	isset($_POST['date2'])
) {
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];

 if ($date1 OR $date2 === '') {
     $all_male ="
     SELECT count(*)
FROM `users`
WHERE gender =1
 ";

 $result_male = $
 echo  $all_male;
 }

  if ($date1 OR $date2 === '') {
     $all_femail ="
     SELECT count(*)
FROM `users`
WHERE gender =2
 ";
echo $all_femail;
 }



if ($date1 < $date2 ) {
 $male_users = "
SELECT *
FROM `users`
WHERE gender =1
AND created
BETWEEN '$date1'
AND
 '$date2'
";
}

if ($date1 < $date2) {
 $female_users = "
 SELECT *
FROM `users`
WHERE gender =2
AND
created
BETWEEN '$data1'
AND
'$date2'
";
}

// if (isset($_POST['submit'])) {
// if ($_POST['date1']=="" || $_POST['date2']=="") {
   

   // var_dump($female_users);
    }

    






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
   <button class="btn btn-lg btn-primary btn-block" name="submit"type="submit">click</button>
</form>

</body>
</html>