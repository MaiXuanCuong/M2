<?php
// include_once 'Square.php';
interface Colorable {
    function howToColor();
}
class Square implements Colorable{
    function howToColor(){
        echo "Color all four sides..";
    }
    public float $width;
     
    public function __construct(int $width)
      {
          $this->width = $width;
      }
      public function getArea()
      {
          return "Diện tích hình Vuông là: ".$this->width * $this->width;
      }
      public function getPreimeter()
      {
          return "Chu vi hình Vuông là: ". ($this->width + $this->width) * 2;
      }
}
class Rectangle implements Colorable{

    function howToColor(){
        echo "Color all four sides..1";
    }

    function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function getArea()
    {
        return "diện tích hình chử nhật là: ".$this->x*$this->y;
    }
    function getPreimeter()
    {
        return "Chu vi hình chử nhật là: ".(2*($this->x+$this->y));
    }

}

$hinh[0] = new Square(19);
$hinh[1] = new Square(190);
$hinh[2] = new Rectangle(19,30);
$hinh[3] = new Rectangle(190,12);

foreach($hinh as $key => $value){
    echo $value->getArea()."<br>";
   if ($value instanceof Square){ 
        echo  $value->howToColor()."<br>";
   }
}

?>