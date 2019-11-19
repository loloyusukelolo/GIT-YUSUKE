<?php 
// class User {
//     private $Name;
  

    // function __construct() {
    //     $this->Name = isset($_POST['name']) ? $_POST['name'] : null;
    // }

    // function start() {
    //     if (empty($this->firstName)) {
    //         throw new Exception("Empty Post not allowed");
    //     }

   
    //     }
    // }




// if(isset($_POST['name'])){
	// 	echo 'ok';
	// }


class Display{
	public $name;


	public function output(){
		if(isset($_GET['name'])){
			$this->name =$_GET["name"];
		}
	}
}

$call = new Display();
$call->name;

$call->output();
echo $call->name;



// class ACTOR{
// 	public $name
// }

// if (isset($_POST[""])) {
// 	$test = new ACTOR($_POST["nickname"]);
// }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>class3</title>
</head>
<body>
	<form action="" method="">
		<input type="text" name="name" >
		<input type="submit" name="submit">
	</form>
</body>
</html>