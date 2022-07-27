<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

interface Resizeable {
    function resize($size);
}

$Rectangle1 = new Rectangle("Hình Chữ Nhật",10,10);
echo $Rectangle1->toString()."<br>";
$Rectangle1->resize(100);
echo 'Diện Tích = '. $Rectangle1->calculateArea()."<br>";
echo 'Chu VI = '. $Rectangle1->calculatePerimeter()."<br>";


$Square1 = new Square("Hình Trụ ", 10,20);
echo $Square1->toString()."<br>";
$Square1->resize(100);
echo 'Chu vi = '.$Square1->calculatePerimeter() ."<br>";
echo 'Diện tích = ' .$Square1->calculateArea() ."<br>";



$Circle1 = new Circle("Hình Tròn", 10);
echo $Circle1->toString()."<br>";
$Circle1->resize(100)."<br>";
echo "Chu VI = ".$Circle1->calculatePerimeter()."<br>";
echo "Diện Tích = ".$Circle1->calculateArea()."<br>";
?>