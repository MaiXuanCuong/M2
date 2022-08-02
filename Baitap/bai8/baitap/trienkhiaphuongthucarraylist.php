<?php
class MyList{
    public int $size;
    public array $elements;
    public function __construct ($size){
        $this->size =$size ;
        $this->elements = [];
    }
    public function insert($index,$obj):void{
        $this->elements[$index] = $obj;
    }
    public function add ($obj):void{
        array_push($this->elements, $obj);
    }   
    public function remove($index):void{
        unset($this->elements[$index]);
    }
    public function get($index){
        return $this->elements[$index];
    }
    public function clear(): void{
        
    }
    public function addAll($arr):array{
        $this->elements = $arr;
    }
    public function indexOf($obj): int {
        indexOf($this->elements, $obj);
    }
    public function isEmpty(): bool {
        return empty($this->elements);
    }
    public function sort():array{
        sort($this->elements);
    }
    public function reset(): void{
        reset($this->elements);
    }
    public function size(): int {
        return $this->size;
    }

}



?>