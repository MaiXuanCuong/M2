<?php
class Stack{
    public $doixung = [] ;
    public $stack= [];
    public $queue=[];
    public function __construct($stack, $queue) {
       $this->stack=  str_split($stack);
       
       $this->queue = str_split($queue); 
       
    }
    public function compare(){
        $check =true;
        while (count($this->stack) > 0 && $check == true) {
          $last = array_pop($this->stack);
          array_unshift($this->doixung, $last);
          $fisrt = array_shift($this->queue);
          array_push($this->doixung, $fisrt);
          if ($last === $fisrt) {
            $check = true;
          }else {
            $check = false;
          }
        }
        return $check;
       
     
    }
    public function check(){
        if ( $this->compare()) {
            echo 'Đối xứng';
        }
        else {
            echo "không đối xứng";
        }
    }
}
$stack = "hi";
$queue = "hi";
$kiemtra = new Stack($stack,$queue);
$kiemtra->compare();
$kiemtra->check();
echo "<pre>";
print_r($kiemtra->doixung);




?>
