

<?php
$cerr =null;
$aerr =null;
$berr =null;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
   
    $hasError = false;
    if (empty($a)) {
        $aerr = "Hãy nhập số a!";
        $hasError = true;
    }
    if (empty($b)) {
        $berr = "Hãy nhập số b!";
        $hasError = true;
    } 
    if (empty($c)) {
        $cerr = "Hãy nhập số b!";
        $hasError = true;
    }
    if (!$hasError) {
        
      
  

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
$a = null;
        $b = null;
        $c = null;
}
?>
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
        <table>
            <tr>
                <td> <input type="number" name="a" placeholder="Nhập độ dài cạnh a"><br><br></td>
                <td><?php echo $aerr ?></td>
            </tr>
            <tr>
                <td><input type="number" name="b" placeholder="Nhập độ dài cạnh b"><br><br></td>
                <td><?php echo $berr ?></td>
            </tr>
            <tr>
                <td> <input type="number" name="c" placeholder="Nhập độ dài cạnh c"><br><br></td>
                <td><?php echo $cerr ?></td>
            </tr>
            <tr>
               
                <td> <input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
