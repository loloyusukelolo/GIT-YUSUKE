<?php 
// 本日の日付
echo "Today";
echo "<br>";
echo date("Y/m/d - M (D) H:i:s");
echo "<br>";
echo"-------------------";
echo "<br>";


//クラス
class User{
	public $name;

	public function __construct (){
	$this->name = 1;
}
	function show(){
		 $a = $this->name *8;
		 echo $a;
		
	}
	}
$userOne = new User ();
$userOne->show();

 ?>
