<?php
class Cylinder
{
    public $radius;
    public $height;
    public function getVolume($radius, $height) : float|int
    {
        $baseArea = $this->getBaseArea();
        $perimeter = $this->getPerimeter();
        return $perimeter * $this->height + 2 * $baseArea;
    }
    public function getBaseArea(){
       return pi() * $this->radius * $this->radius;
    }
    public function getPerimeter(){
        return 2 * pi() * $this->radius;
    }
}