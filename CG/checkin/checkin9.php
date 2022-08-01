<?php
class ArrayList {
        private $elements = [];
        public function add($item):void{
            array_push($this->elements, $item);
        }
        public function get($index):string|int{
            return $this->elements[$index];
        }
        public function size():int {
            return count($this->elements);
        }
        public function isEmpty(){
            if ($this->size() == 0){
                return true;
            }else {
                return false;
            }
        }
        public function find($item){
            foreach($this->elements as $key => $value){
                if ($value == $item){
                    echo 'Vị trí '.$key;
                    echo ' Tên '.$value;
                } else if ($value != $item && $key == count($this->elements) - 1){
                    echo "Phần tử ".$item." không tồn tại trong mảng";
                }
            }
        }
        public function removeItemByIndex($index):void{
            unset($this->elements[$index]);
        }
        public function toArray():Array {
            return $this->elements;
        }
        public function addAtpos($item, $index){
            array_splice($this->elements, $index,0, $item);
        }
}
$ArrayList = new ArrayList();
$ArrayList->add(2);
$ArrayList->add("hi");
echo "<pre>";
echo "<br>";
$ArrayList->addAtpos("hello",1);
// echo $ArrayList->size();
echo "<br>";
// echo $ArrayList->get(1);
// $ArrayList->removeItemByIndex(1);
print_r ($ArrayList->toArray());
echo "<br>";
echo $ArrayList->find('hi');
echo "<br>";
var_dump($ArrayList->isEmpty());
?>