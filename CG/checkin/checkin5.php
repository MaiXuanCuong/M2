<?php
//  class Man{
//     public $name;
//     private $age;
//     protected $stk;
//     public function __construct($name1,$age1,$stk1){
//         $this->name = $name1;
//         $this->age = $age1;
//         $this->stk = $stk1;
//     }
//     public function setAge() {
//         $this->age;
//     }
//     public function getAge() {
//         return $this->age;
//     }
//     public function setStk() {
//         $this->stk;
//     }
//     public function getStk() {
//         return $this->stk;
//     }
//  }
// $cuong = new Man("Mai xuân cường", 20, 123456789);
// echo $cuong->name;
// echo '<br>';
// echo $cuong->getAge();
// echo '<br>';
// echo $cuong->getStk();
// echo '<br>';
// echo $cuong->stk;
// echo '<br>';
// echo $cuong->age;
?>
<?php
    // class Man {
    //     public      $name;
    //     private     $salary;
    //     protected     $wife;

    //     //thuoc tinh cua lop
    //     private static $info = 'Hello 123';
    //     public function __construct( $ts_name, $ts_salary, $ts_wife ){
    //         $this->name = $ts_name;
    //         $this->salary = $ts_salary;
    //         $this->wife = $ts_wife;

    //         //
    //         self::$info = 'Hello';
    //     }
    //     public function getWife(){
    //         return $this->wife;
    //     }

    //     public function hi(){
    //         echo __METHOD__;
    //     } 

    //     public static function showInfo(){
    //         self::hi();
    //         return self::$info;
    //     }
    // }

    // echo Man::showInfo();
   

    // $phongTam = new Man( 'Tam',20000000, 'chua vo' );
    // echo $phongTam->getWife();

    // echo '<pre>';
    // print_r($phongTam);
    // die();

include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';

use DongHa\Tam;
use GioLinh\Tam as TamGioLinh;

$taiTam = new Tam();
$phongTam = new TamGioLinh();

$taiTam_1 = new DongHa\Tam();
$phongTam_1 = new GioLinh\Tam();

echo '<pre>';
print_r($taiTam);
print_r($phongTam);

echo '<hr>';

print_r($taiTam_1);
print_r($phongTam_1);