<?php
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