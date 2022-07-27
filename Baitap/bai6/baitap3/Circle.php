<?php
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