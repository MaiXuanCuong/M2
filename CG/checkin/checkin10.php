<?php
// class Stack {
//     protected $stack = [];
//     protected $limit;
//     function __construct($limit = 10){
//         $this->limit = $limit;
//     }
//     public function push($item){
//         if ($this->isFull()){
//             echo "stack đầy";
//             }else {
//             array_unshift($this->stack,$item);
//         }
//     }
//     public function pop(){
//         if ($this->isEmpty()) {
//             echo "stack rỗng";
//             } else {
//             return array_shift($this->stack);
//         }
//     }
//     public function isEmpty() {
//         return empty($this->stack);
//     }
//     public function peek(){
//       return current($this->stack);
//     }
//     public function isFull() {
//      if (count($this->stack)== $this->limit) {
//         return true;
//      }
//      else {
//         return false;
//      }
//     }
//     public function getArray(){
//         return $this->stack;
//     }
// }
// $stack = new Stack();
// $stack->push('Thắng');
// // $stack->push("Phi");
// // $stack->push("Tân");
// // $stack->push("Cường");
// // $stack->push("Tâm");
// // $stack->push("Tâm");
// // $stack->push("Tâm");
// // $stack->push("Tâm");
// // $stack->push("Tâm");
// // $stack->push("Tâm");
// // $stack->push("Tâm");
// // echo $stack->pop();
// // echo $stack->peek();
// echo "<pre>";
// print_r($stack);



class Queue{
    public $queue;
    public $limit;
    public function __construct($limit = 3) {
        $this->queue = [];
        $this->limit = $limit;
    }
    public function enqueue($item){
        if ($this->isFull()) {
            echo "Queue đầy";
            } else {
                array_push($this->queue, $item);
        }
    }
    public function dequeue() {
        if ($this->isEmpty()){
            echo "Queue rỗng";
            }else{
                return array_shift($this->queue);
        }
    }
    public function size(){
        return count($this->queue);
    }
    public function isEmpty() {
       return empty($this->queue); 
    }
    public function isFull() {
        if (count($this->queue) == $this->limit){
            return true;
            }else {
                return false;
        }
    }
}   
$Queue = new Queue();
$Queue->enqueue("Thắng");
$Queue->enqueue("Cường");
$Queue->enqueue("Phi");
$Queue->enqueue("Tân");
// echo $Queue->size();
$Queue->dequeue();
$Queue->dequeue();
$Queue->dequeue();
$Queue->dequeue();
echo "<pre>";
print_r($Queue);

?>
