<?php 


class Data{


	
}
class Human{
	//フィールド
	public $name; //名前
	public $gender; //性別
	public $height; //身長
	public $weight; //体重


	//メソット
	public function change_name($name){
		$this->name = $name;
	}

	public function convert_gender(){
		if($this->gender =='male'){
			$this->gender = 'femail';
		}elseif($this->gender == 'femail'){
			$this->gender= 'male';
		}
	}

	public function speak($something){
		echo $this->name.'['. $something .']';

	}

}


$yusuke = new Human();
$yusuke->name = 'uejima';
$yusuke->age =26;
$yusuke->gender = 'male';
$yusuke->height = 167;
$yusuke->weight =67;

$yusuke->speak('I am yusuke');

//性別変換 (結果:女)
$yusuke->convert_gender();
echo $yusuke->gender;

//再度性別変換 (結果:男)
$yusuke->convert_gender();
echo $yusuke->gender;

//名前変更
$yusuke->change_name('kaong');
echo $yusuke->name;

?>

　