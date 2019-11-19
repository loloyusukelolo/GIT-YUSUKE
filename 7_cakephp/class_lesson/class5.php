<?php 
class CALCULATOR{
// pleae always pass two parmeters wgenevr you use the class
public $number1 = 0;
public $number2 = 0;

 function __construct($number1,$number2){
$this->number1 = $number1;
$this->number2 = $number2;


}


public function add () {
        return $this->number1 + $this->number2;
    }
    public function substruct () {
        return $this->number1 - $this->number2;
    }
    public function mutiply () {
        return $this->number1 * $this->number2;
    }
    public function duvide () {
        return $this->number1 / $this->number2;
    }
}
//#1
$maths = new CALCULATOR(10,5);

$sum = $maths->add();

$diff = $maths->substruct();

$product = $maths->mutiply();

$quotiesnt = $maths->duvide();




//#2
$maths1 = new CALCULATOR(20,5);

$sum1 = $maths1->add();

$diff1 = $maths1->substruct();

$product1 = $maths1->mutiply();

$quotiesnt1 = $maths1->duvide();

//足し算結果 #1 #2
echo"ResultA=".($sum).' / '."ResultB=".($sum1); 
echo"<br>";

//引き算  #1 #2
echo"ResultA=".($diff).' / '."ResultB=".($diff1);
echo"<br>";

//掛け算　#1 #2
echo"ResultA=".($product).' / '."ResultB=".($product1);
echo"<br>";

//割り算　#1 #2
echo"ResultA=".($quotiesnt).' / '."ResultB=".($quotiesnt1);

  ?>
