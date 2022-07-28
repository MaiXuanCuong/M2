<?php
class Point2D{
    public float $x;
    public float $y;
    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x): void {
        $this->x = $x;
    }
    public function setY($y) : void {
        $this->y = $y;
    }
    public function getX() :float{
        return $this->x;
    }
    public function getY(): float{
        return $this->y;
    }
    public function setXY(float $x, float $y): void{
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY() : array{
       return array($this->x, $this->y);
    }
    public function toString(){
        return "X = ".$this->getX()."<br>"." Y = ".$this->getY()."<br>";
    }

}
$point2d = new Point2D(4,6);
echo  "Point2D:<br> ". $point2d->toString();
echo "<br>";
echo "<pre>";
print_r($point2d->getXY())."<br>";
echo "<hr>";


class Point3D extends Point2D{
    public float $z;
    public function __construct(float $x, float $y, float $z){
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setZ(float $z): void{
        $this->z= $z;
    }
    public function getZ(): float{
        return $this->z;
    }
    public function setXYZ(float $x, float $y, float $z): void{
        parent::setXY($x, $y );
        $this->z = $z;
    }
    public function getXYZ(): array{
        return array($this->x, $this->y, $this->z);
    }
    public function toString(){
        return parent::toString()."<br>"."Z = ".$this->getZ();
    }
}
$point3d = new Point3D(5,6,8);
echo "<pre>";
print_r($point3d->getXYZ()) ."<br>";
echo "Point3D:<br> ". $point3d->toString();



?>