<?php
class Shape {
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    } 
    public function show(){
        return 'Tôi là một hình '.$this->name;
    }

}
class Circle extends Shape {
    public int $radius;
    public function __construct(string $name,float $radius){
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea() :int|float{
        return pi()* pow($this->radius,2);
    }
    public function calculatePerimeter():int|float{
        return pi()* $this->radius *2;
    }

}
class Cylinder extends Circle {
    public int $height;
    public function __construct(string $name,int|float $radius, int $height){
        parent::__construct($name,$radius);
        $this->height = $height;
    }
    public function calculateArea() :int|float{
        return parent::calculateArea() *2 + parent::calculatePerimeter()* $this->height;
    }
    public function calculateVolumn():int|float{
        return parent::calculateArea() * $this->height;
    }
} 
class Rectangle extends Shape{
    public int $width;
    public int $height;
    public function __construct(string $name,int $width,int $height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() :int|float{
        return $this->height * $this->width;
    }
    public function calculatePerimeter():int|float{
        return ($this->height + $this->width)* 2;
    }

}
class Square extends Rectangle {
    public function __construct(string $name,int $width){
        parent::__construct($name,$width,$width);
    }
}

$circle = new Circle("Circle 01", 3);
echo "Circle area: " . $circle->calculateArea() . "<br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . "<br>";

$cylinder = new Cylinder("Cylinder 01", 3,4);
echo "Cylinder area: " . $cylinder->calculateArea() ."<br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() ."<br>";

$rectangle = new Rectangle("Rectangle 01", 3, 4);
echo "Rectangle area: " . $rectangle->calculateArea() ."<br>"; 
echo "Rectangle perimeter: " . $rectangle->calculatePerimeter() ."<br>";

$square = new Square("Square 01",  4);
echo "Square area: " . $square->calculateArea() ."<br>";
echo "Square perimeter: " . $square->calculatePerimeter() ."<br>";


?>