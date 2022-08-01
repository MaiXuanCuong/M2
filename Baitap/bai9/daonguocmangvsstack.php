<?php
class Stack{
    public $arrayList;
    public $stack = [];
    public function __construct($array) {
        $this->arrayList = $array;
    }
    public function push(){
        while (count($this->arrayList) > 0){
            $phantu = array_shift($this->arrayList);
            array_unshift($this->stack, $phantu);
        }
    }
    public function pop(){  
        while (count($this->stack) > 0){
            $phantu = array_shift($this->stack);
            array_push($this->arrayList, $phantu);
        }
    }
}
$arraylist = [1,2,3,4,5,6,7,8,9,10];
$songuyen = new Stack($arraylist);
echo "<pre>";
print_r($songuyen);
$songuyen->push();
$songuyen->pop();
echo "<pre>";
print_r($songuyen);


?>