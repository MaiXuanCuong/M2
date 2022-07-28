<?php
class HinhChuNhat{
public int $width;
public int $height;
public function __construct($width, $height){
    $this->width = $width;
    $this->height = $height;
}
// tính diện tích
public function getArea() : int {
return $this->width  * $this->height;
}
//tính chu vi
public function getPerimeter() : int {
    return (($this->width + $this->height) * 2);
}
public function display() : string {
return "Hình Chữ Nhật{"."Chiều rộng= ".$this->width.",Chiều dài= ".$this->height."}";
}
};
$width = 10;
$height = 20;
$rectangle = new HinhChuNhat($width, $height);
echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";
$rectangle->width = 20;
$rectangle->height = 40;
echo $rectangle->getPerimeter();
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->display();




?>