<?php
class Animal{
    public $name;
    public $color;
     // phương thức khởi tạo
     public function __construct($name1,$color1){
        $this->name = $name1;
        $this->color = $color1;
     }
      public function say(){
        echo __METHOD__.'<br>';
      }
      public function go(){
        echo __METHOD__.'<br>';
      }
      public function setName($name1){
       $this->name = $name1;
      }
      public function getName(){
       return $this->name;
      }
      public function setColor($color1){
      $this->color = $color1;
      }
      public function getColor(){
       return $this->color;
      }
}
$ngua = new Animal("miule","trang");
$cun = new Animal("lu","đen");
// $ngua ->say();
// $ngua ->go();
// $ngua ->setName("meo");
// $ngua ->getName();
// $ngua ->setColor("black");
// $ngua ->getColor();
// echo $ngua->name;
// echo '<br>';
// echo $ngua->color;
// echo '<pre>';
// print_r($ngua);
// echo '</pre>';
// gọi phương thức thay đổi nam và color
$cun->setName("lu1");
$cun->setColor("đen1");
echo '<pre>';
print_r($cun);
echo '</pre>';
// echo $cun->name;
// echo '<br>';
// echo $cun->color;
// gọi phương thức để in ra giá trị name và giá trị color
echo $cun->getName();
echo '<br>';
echo $cun->getColor();
?>