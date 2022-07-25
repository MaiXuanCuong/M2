<?php
class Point {
    public float $x;
    public float $y;
    public function __construct(float $x,float $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x) :void{
        $this->x = $x;
    }
    public function setY($y) :void{
        $this->y = $y;
    }
    public function setXY(float $x, float $y) :void {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX():float {
        return $this->x;
    }
    public function getY():float {
        return $this->y;
    }
    public function getXY():array{
        return array($this->x,$this->y);
    }
    public function toString():string{
        return "X = " . $this->x . "<br>" ."Y = ". $this->y;
    }
}
$point = new Point(4.5,4.5);
echo $point->toString()."<br>";
echo "<pre>";
print_r($point->getXY())."<br>";
echo "<hr>";

class MoveablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct(float $x,float $y,float $xSpeed,float $ySpeed) {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function setXSpeed(float $xSpeed) :void{
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed(float $ySpeed) :void{
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed():float {
        return $this->xSpeed;
    }
    public function getYSpeed():float {
        return $this->ySpeed;
    }
    public function getSpeed():array{
        return array($this->xSpeed, $this->ySpeed);
    }
    public function move(){
        $this->xSpeed ++;
        $this->ySpeed ++;
    }
    public function toString():string{
        return "xSpeed = ".$this->getXSpeed()."<br>"."ySpeed = ".$this->getYSpeed();
    }
}
$move = new MoveablePoint(4.1,4.2,4.4,4.4);
echo $move->toString()."<br>";
echo "<pre>";
print_r($move->getSpeed());




?>