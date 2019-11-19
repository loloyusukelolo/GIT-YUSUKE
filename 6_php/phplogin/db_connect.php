<?php
// - ALWAYS INITIALISE SESSION
error_reporting(E_ERROR | E_PARSE);
session_start();

// - connection logic
$CONNECTION = mysqli_connect(
	"localhost", 
	"root", 
	"123", 
	"fdc_exercise"
);

/**
 * get a file name's extension
 */

// $CONNECTION = mysqli_connect(
// 			    $host,
// 			    $user,
// 			    $password,
// 			    $dbname
// 			);

 function getFileExtension($filename = ""){
 	return pathinfo($filename, PATHINFO_EXTENSION);
}







// PAGENATION
//define how many results you want per page
// $results_per_page =3;

// // find out the number of result in the database
// $sql = "SELECT * FROM images";
// $result = mysqli_query($CONNECTION,$sql);

// $number_of_results = mysqli_num_rows($result);

// // var_dump($number_of_results);

// // while ($row = mysqli_fetch_array($result)){
// // 	echo $row['id'].' '. $row['status'].' '.
// // 	$row['user_id'].' '.$row['image_url'].''.$row[$description].'<br>';
// // }
//  $number_of_pages = ceil($number_of_results/$results_per_page);



// //determine which page number visiter is currently on
//  if(!isset($_GET['page'])){
//  	$page =1;
//  }else{
//  	$page= $_GET['page'];
//  }

//  $this_page_first_result =($page-1)*$results_per_page;
 
//  $sql = "SELECT * FROM images LIMIT " . $this_page_first_result .','.$results_per_page;
//  $result =mysqli_query($CONNECTION,$sql);

//  while ($row = mysqli_fetch_array($result)){
// 	echo $row['id'].' '. $row['status'].' '.
// 	$row['user_id'].' '.$row['image_url'].''.$row['description'].'<br>';
// }

// //display the links to the pages
// 	for ($page=1;$page<=$number_of_pages;$page++ ) { 
// 	echo '<a href="db_connect.php?page=' .$page.'">' .$page.'</a>';
// 	}
//  ?>