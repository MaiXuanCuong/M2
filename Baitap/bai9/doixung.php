<?php
class Stack{
    public $doixung ;
    public $stack= [];
    public $queue=[];
    public function __construct($queue) {
       $this->queue = str_split($queue); 
       $this->doixung = $this->queue;
       $this->stack = str_split($queue); 
    }
    public function compare(){
        $check =true;
        while (count($this->queue) > 0 && $check == true) {
        $last = array_pop($this->stack);
        // array_unshift($this->doixung, $last);
        $fisrt = array_shift($this->queue);
        // array_push($this->doixung, $fisrt);
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
            foreach ($this->doixung as $key => $value){
                echo $value;
            }
            echo '<br> Đối xứng';
        }
        else {
            foreach ($this->doixung as $key => $value){
                echo $value;
            }
            echo '<br> Không đối xứng';
        }
    }
}
$queue = "1212";
$kiemtra = new Stack($queue);
$kiemtra->compare();
$kiemtra->check();
?>
