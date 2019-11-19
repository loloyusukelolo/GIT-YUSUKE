<?php
error_reporting(E_ERROR | E_PARSE);
// - ALWAYS INITIALISE SESSION
session_start();

// - connection logic
$CONNECTION = mysqli_connect(
	"localhost", 
	"root", 
	"123", 
	"user_information"
);


/**
 * get a file name's extension
 */
function getFileExtension($filename = ""){
	return pathinfo($filename, PATHINFO_EXTENSION);


}