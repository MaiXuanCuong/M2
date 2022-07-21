<?php
define ('SLOW', 1);
define ('MEDIUM', 2);
define ('FAST', 3);

class Fan{
    private $speed = SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";
  


public function setSpeed($speed) {
    $this->speed = $speed;
}
public function getSpeed() {
    return $this->speed;
}
public function setOn($on) {
    $this->on = $on;
}
public function getOn() {
    return $this->on;
}
public function setRadius($radius) {
    $this->radius =$radius;
}
public function getRadius() {
    return $this->radius;
}
public function setColor($color) {
    $this->color = $color;
}
public function getColor() {
    return $this->color;
}
public function toString() {
    return "Tốc độ ".$this->getSpeed()." màu quạt ".$this->getColor()." bán kính ".$this->getRadius()." Fan is on";
}


    
}
$quat1 = new Fan();
$quat1->setSpeed(FAST);
$quat1->setOn(true);
$quat1->setRadius(10);
$quat1->setColor("red");
echo $quat1->toString();







?>