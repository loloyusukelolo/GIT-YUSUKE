

<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

// - prepare database variables
$host = "localhost";
$user = "root";
$password = "123";
$dbname = "crud";


?>

<?php
    $servername='localhost';
    $username='root';
    $password='123';
    $dbname = "my_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

