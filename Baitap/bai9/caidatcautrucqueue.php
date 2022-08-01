<?php
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