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
    if($this->getOn()){
    return "Quạt đang bật"."<br>". "Tốc độ quạt: ".$this->getSpeed()."<br>"." Màu quạt: ".$this->getColor()."<br>"." Bán kính: ".$this->getRadius();
} else {
    echo "Quạt đang tắt" ."<br>"."Màu quạt: ".$this->getColor()."<br>"." Bán kính: ".$this->getRadius();
}
}
}
$quat1 = new Fan();
$quat1->setSpeed(FAST);
$quat1->setOn(true);
$quat1->setRadius(10);
$quat1->setColor("red");
echo "Quạt 1: ";
echo "<br>";
echo $quat1->toString();
echo "<br>";
echo "<br>";
echo "<br>";
$quat2 = new Fan();
$quat2->setSpeed(MEDIUM);
$quat2->setOn(false);
$quat2->setRadius(10);
$quat2->setColor("blue");
echo "Quạt 2: ";
echo "<br>";
echo $quat2->toString();








?>