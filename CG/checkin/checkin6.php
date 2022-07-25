<?php
// class Animal{
//     public $name;
//     public $color;
//      // phương thức khởi tạo
//      public function __construct($name1,$color1){
//         $this->name = $name1;
//         $this->color = $color1;
//      }
//       public function say(){
//         echo __METHOD__.'<br>';
//       }
//       public function go(){
//         echo __METHOD__.'<br>';
//       }
//       public function setName($name1){
//        $this->name = $name1;
//       }
//       public function getName(){
//        return $this->name;
//       }
//       public function setColor($color1){
//       $this->color = $color1;
//       }
//       public function getColor(){
//        return $this->color;
//       }
// }
// class meo extends Animal{

// }
// $meo = new Animal("meo", "red");

class Parent1 {
    public function car(){
        echo __METHOD__;
        echo "<br>";
        echo "xe của ba";
    }
    public function house(){
        echo __METHOD__;
        echo "<br>";
        echo "nhà của ba";
    }
}
// $parent1 = new Parent1(); 





class child extends Parent1{
    public function car(){
        echo __METHOD__;
        echo "<br>";
        echo "xe của con";
    }
    public function house(){
        echo __METHOD__;
        echo "<br>";
        echo "nhà của con";
    }
}
$child = new Child();
$child->car();
echo "<br>";
$child->house();






?>