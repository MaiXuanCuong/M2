<?php
class Stack {
    public $stack = [];
    public function __construct(){

    }
    public function push($value){
        array_unshift($this->stack, $value);
    }
   public function conVertDecimalToBinary($number){
    while($number!=0){
            $Number=$number%2;
            $this->push($Number);
            $number=floor($number/2);
        }
    foreach($this->stack as $key => $value){
        echo $value;
        }
    }
    public function conVertBinaryToBinary($str){
        $array=str_split($str);
        $array_1=array_reverse($array);
        $sum=0;
            for($i=0;$i<count($array_1);$i++){
                $sum+=$array_1[$i]*pow(2,$i);
        }
        return $sum;

    }
}
$chuyendoi = new Stack();
echo "Thập phân: ";
echo $Decimal = 400;
echo " = Nhị Phân : ";
$chuyendoi->conVertDecimalToBinary($Decimal);
echo "<br>";
echo "Nhị Phân : ";
echo $ToBinary = 101000;
echo " = Thập phân: ";
echo $chuyendoi->conVertBinaryToBinary($ToBinary);



?>