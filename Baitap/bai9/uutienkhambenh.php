<?php
class Node{
    public $name;
    public $code;
    public function __construct($name, $code){
        $this->name = $name;
        $this->code = $code;
    }
}

class Patient {
    public $kham = [];
    public function push($name,$code){
        $node = new Node($name,$code);
        array_push($this->kham,$node);
    }
    public function sort(){
        function sapxep($code1,$name1)
            {
                if ($code1->code == $name1->code) return 1;
                return ($code1->code > $name1->code) ? 1 : -1;
            }
         
            usort($this->kham, "sapxep");
        }
    
    public function toString(){
       return $this->kham;
    }
}


$benhnhan = new Patient();
$benhnhan->push("Phi",5);
$benhnhan->push("Tâm",1);
$benhnhan->push("Cường",1);
$benhnhan->push("Tân",4);
$benhnhan->push("Thắng",2);
echo "<pre>";
print_r($benhnhan->kham);
$benhnhan->sort();
echo "<pre>";
print_r($benhnhan->toString());


?>