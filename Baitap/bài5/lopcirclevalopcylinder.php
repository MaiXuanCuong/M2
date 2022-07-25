<?php
class Circle {
public int $radius;
public string $color;
public function __construct($radius,$color){
    $this->radius = $radius;
    $this->color = $color;
}
 public function setRadius($radius){
    $this->radius = $radius;
 }
 public function getRadius(){
    return $this->radius;}
 public function setColor($color){
    $this->color = $color;
 }
 public function getColor() {
    return $this->color;
 }
 public function perimeter(){
    return pi()* $this->radius *2;
 }
 public function area(){
    return pi()* pow($this->radius,2);
}
}
$hinhtron = new Circle(7,"blue");
$hinhtron->setColor("yellow");
echo 'Diện tích hình tròn là: '.$hinhtron->area();
echo "<br>";
echo "chu vi hình tròn là: ".$hinhtron->perimeter();


class Cylinder extends Circle {
public int $height;
public function __construct($height,$radius,$color){
    parent::__construct($radius,$color);
    $this->height = $height;
}

public function thetich(){
return $this->area()* $this->height;
}

}
$hinhtru = new Cylinder(8, 6,"black");
echo "<br>";
echo "Thể tích hình trụ là: ".$hinhtru->thetich();


?>