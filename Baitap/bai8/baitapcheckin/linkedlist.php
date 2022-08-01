<?php
class LinkedList{
    public $head;
    public $tail;
    public function __construct(){
        $this->head = null;
        $this->tail = null;
    }
    public function addFirst($nodeItem){
        $node = new Node($nodeItem);
        $node->next = $this->head;
        $this->head = $node;
        if (!$this->tail){
            $this->tail = $node;
        }

    }
    function addLast($nodeItem){
        $node = new Node($nodeItem);
        if (!$this->head){
            $this->addFirst($nodeItem);
        }
        else {
            $this->tail->next = $node;
            $this->tail = $node;
        }
    }
    function removeFirst():void{
        if($this->head != null){
            if ($this->head->next != null){
                $this->head = $this->head->next;
            } else {
                $this->head = null;
            }
        }
    }
    function removeLast():void{
    if($this->head !== null){
        $tail = $this->head;
        if($tail->next === null){
            $this->head = null;
        } else{
            $head = null;
            while ($tail->next !== null){ 
            $head = $tail;
            $tail = $tail->next;
            }
            $head->next = null;
        }
    }
    }
    function getFirst() {
    //     $head = $this->head;
    //    if($head!= null && $head->next == null){
    //        return $head;
    //     } else if( $head != null && $head->next ) {
    //     }
    $tail = $this->head;
    $key = 1 ;
        while ($tail!= null){
            if($key == 1){
                return $tail->data;
            }
            // $tail = $tail->next;
            // $key ++;
        }
    }
    function getLast():Object{
        $tail = $this->head;
        while ($tail!= null){
            if($tail->next == null){
                return $tail;
            }
            $tail = $tail->next;
        }
    }

}






?>