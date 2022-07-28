<?php

if (  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
   $number3 = $_POST['number3'];
}
if ($number1 !="" && $number2 !="" && $number3 !=""){
class PhuongTrinhBacHai{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
  
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->c;
    }
    public function getDetal(){
        return (($this->getB() * $this->getB()) - (4*$this->getA() * $this->getC()));
    }
    public function getRoot1(){
        return (-$this->getB() + sqrt ( $this->getDetal() ))/2* $this->getA();
    }
    public function getRoot2(){
        return (-$this->getB() - sqrt ( $this->getDetal() ))/2* $this->getA();
    }
    public function getRoot3(){
        if ($this->getDetal() > 0){
            echo "Phương trình Có 2 nghiệm";
            echo "<br>";
            echo "X1 = ".$this->getRoot1();
            echo "<br>";
            echo "X2 = ".$this->getRoot2();
        }
        else if ($this->getDetal()== 0){
            echo "Phương trình có nghiệm kép X1 = X2 = ".(-$this->getB())/2* $this->getA();
        }
        else{
            echo "Phương trình vô nghiệm";
        
        }
    }
}


$phuongTrinhBacHai = new PhuongTrinhBacHai($number1,$number2,$number3);
$phuongTrinhBacHai->getA();
$phuongTrinhBacHai->getB();
$phuongTrinhBacHai->getC();
$phuongTrinhBacHai->getDetal();
echo $phuongTrinhBacHai->getRoot3();
} else {
    echo " Bạn phải nhập đủ các số";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=number] ,
        select{
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
<input type="number" name="number1" placeholder="nhập số a"><br>
<input type="number" name="number2" placeholder="nhập số b"><br>
<input type="number" name="number3" placeholder="nhập số c"><br>
<input type="submit" name="submit" id="submit" value="Kiểm tra">
</form>
</body>
</html>