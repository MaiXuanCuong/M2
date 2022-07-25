<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="a" placeholder="Nhập độ dài cạnh a"><br><br>
        <input type="number" name="b" placeholder="Nhập độ dài cạnh b"><br><br>
        <input type="number" name="c" placeholder="Nhập độ dài cạnh c"><br><br>
        <input type="submit">
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    try {
        if(!(is_numeric($a))) throw new Exception("Vui lòng nhập số");
        if(!(is_numeric($b))) throw new Exception("Vui lòng nhập số");
        if(!(is_numeric($c))) throw new Exception("Vui lòng nhập số");
    } catch (Exception $e) {
       echo " lỖi :".  $e->getMessage();
       die();
    }
class Shape {
public float $side1= 1;
public float $side2= 1;
public float $side3= 1;
public function __construct($side1, $side2, $side3) {
    $this->side1 = $side1;
    $this->side2 = $side2;
    $this->side3 = $side3;
}
public function setSide1($side1) {
    $this->side1 = $side1;
}
public function setSide2($side2) {
    $this->side2 = $side2;
}
public function setSide3($side3) {
    $this->side3 = $side3;
}
public function getSide1() {
    return $this->side1;
}
public function getSide2() {
    return $this->side2;
}
public function getSide3() {
    return $this->side3;
}
public function getPerimeter(){
    return ($this->side1 + $this->side2 + $this->side3);
}
public function getArea(){
    $p = ($this->getPerimeter()/2);
    $h = 2*(sqrt ($p*($p-$this->side1)*($p-$this->side2)*($p -$this->side3))/$this->side1);
    return ($this->side1*$h)/2;
}
public function toString(){
   return "Chiều dài cạnh a = ".$this->getSide1().'<br>'."Chiều dài cạnh b = ".$this->getSide2().'<br>'."Chiều dài cạnh c = ".$this->getSide3()."<br>".'Diện tích hình tam giác là: '.$this->getArea().'<br>'."Chu vi hình tam giác là : ".$this->getPerimeter();
}
}
$tamgiac = new Shape($a,$b,$c);
echo $tamgiac->toString();
class Triangle extends Shape {
}
}
?>
