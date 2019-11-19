<?php
error_reporting(E_ERROR | E_PARSE);
// session_start();

$host = "localhost";
$user = "root";
$password = "123";
$dbname = "fdc_ exam";

// - establish connection
$CONNECTION = mysqli_connect(
			    $host,
			    $user,
			    $password,
			    $dbname
			);
// var_dump($CONNECTION);
			?>