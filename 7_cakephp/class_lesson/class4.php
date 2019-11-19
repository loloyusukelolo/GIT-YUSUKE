<?php 
class  Integer{

function display($sort){
	$sort = array(5,12,28,19,20);
sort($sort);
for ($i=0; $i <count($sort); $i++) { 
	$this->sort =$i;
}


$call = new Integer();
$call->sort;

$call->display();
echo $call->$sort[$i];
	echo"<br>";
}

}

?>