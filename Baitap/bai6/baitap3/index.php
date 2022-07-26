<?php
interface Resizeable {
    function resize($size);
}
class Rectangle implements Resizeable{
    public int $width;
    public int $height;
    public string $name;
   
  public function __construct(string $name,
                                        int $width,
                                        int $height)
    {   $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }
    function resize($size){
        $this->width =  $this->width * ($size/100);
        $this->height = $this->height * ($size/100);
    }
    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }
    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
    public function toString(): string{
        return "Hình ".$this->name;
    }

}
$Rectangle1 = new Rectangle("Hình Chữ Nhật",10,10);
echo $Rectangle1->toString()."<br>";
$Rectangle1->resize(10);
echo 'Diện Tích = '. $Rectangle1->calculateArea()."<br>";
echo 'Chu VI = '. $Rectangle1->calculatePerimeter()."<br>";

class Square  implements Resizeable
{
    public string $name;
    public float $width;
    public float $height;
    function resize($size){
        $this->width =  $this->width * ($size/100);
        $this->height =  $this->height * ($size/100);
    }
  public function __construct(string $name, int $width ,int $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }
    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
    public function toString(): string{
        return "Hình ".$this->name;
    }
}
$Square1 = new Square("Hình Trụ ", 10,20);
echo $Square1->toString()."<br>";
$Square1->resize(100);
echo 'Chu vi = '.$Square1->calculatePerimeter() ."<br>";
echo 'Diện tích = ' .$Square1->calculateArea() ."<br>";


class Circle  implements Resizeable
{
    public string $name;
    public float $radius;
    function resize($size){
        $this->radius = $this->radius * ($size/100);
    }

  public function __construct(string $name, int|float $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
     public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
    public function toString(): string{
        return "Hình ".$this->name;
    }
}
$Circle1 = new Circle("Hình Tròn", 10);
echo $Circle1->toString()."<br>";
$Circle1->resize(100)."<br>";
echo "Chu VI = ".$Circle1->calculatePerimeter()."<br>";
echo "Diện Tích = ".$Circle1->calculateArea()."<br>";
?>