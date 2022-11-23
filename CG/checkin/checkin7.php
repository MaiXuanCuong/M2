<?php 

// class ConMeo implements Bird{
//     function fly(){

//     }
//     function sing() {

//     }
// }

// interface Bird{
//     function fly(); // phương thức trừu tượng
//     function sing(); // phương thức trừu tượng
// }

// interface GiaCam extends Bird{
//  function gay(); // phương thức trừu tượng
// }
// interface Fish{
//     function swimning(); // phương thức trừu tượng
// }
// class GaCon implements GiaCam,Fish{
//     function fly(){
//         echo "bay";
//     }
//     function sing() {
//         echo "hát";
//     }
//     function swimning(){
//         echo "bơi";
//     }
//     function gay(){
//         echo "ò ó o";
//     }
// }
// $gacon = new GaCon();
// $gacon->fly();
// echo "<br>";
// $gacon->sing();
// echo "<br>";
// $gacon->swimning();
// echo "<br>";
// $gacon->gay();
// echo "<br>";





abstract class HinhHoc{

       public $name;
       public abstract function area();
       public abstract function perimeter();
        public function getName(){

    }
    
}
class HinhChuNhat extends HinhHoc{
    public function area(){

    }
    public function perimeter(){

    }
}
// không thể khởi tạo đối tượng
?>
