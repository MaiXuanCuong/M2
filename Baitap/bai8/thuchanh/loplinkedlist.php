<?php
class Node {
    public $data;
    public $next;
    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
    function readNode(){
        return $this->data;
    }

}
class LinkList {
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct(){
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    public function insertFirst($data):void{
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)){
            $this->lastNode = $node;
        }
        $this->count++;
    } 
    public function insertLast($data):void{
        if (!is_null($this->firstNode)){
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
        $this->insertFirst($data);
        }
    }
    public function totalNode(): int{
        return $this->count;
    }
    public function readList():array{
        $listData = [];
        $current = $this->firstNode;
        while (!is_null($current)){
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
$linkedList = new LinkList();
$linkedList->insertFirst(12);
$linkedList->insertFirst(19);
$linkedList->insertLast(21);
$linkedList->insertLast(41);
$totalNode = $linkedList->totalNode();
$linkData = $linkedList->readList();
echo $totalNode;
echo "<br>";
echo implode("\n", $linkData);
?>