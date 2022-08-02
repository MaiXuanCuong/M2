<?php
class Stack{
    public $doixung = [] ;
    public $stack= [];
    public $queue=[];
    public function __construct($queue) {
       $this->queue = str_split($queue); 
       $this->stack = str_split($queue); 
    }
    public function compare(){
        $check =true;
        while (count($this->queue) > 0 && $check == true) {
        $last = array_pop($this->stack);
        array_unshift($this->doixung, $last);
        $fisrt = array_shift($this->queue);
        array_push($this->doixung, $fisrt);
          if ($last === $fisrt) {
                $check = true;
                }else{
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
$queue = "elba11abl1e";
$kiemtra = new Stack($queue);
$kiemtra->compare();
$kiemtra->check();
echo "<pre>";
print_r($kiemtra->doixung);




?>
