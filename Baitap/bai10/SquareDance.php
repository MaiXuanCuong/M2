<?php
class Dancer {
    public $name;
    public $gender;
    public function __construct($name,$gender) {
        $this->name = $name;
        $this->gender = $gender;
    }
}
    function getDancer($maleDancer, $femaleDancer) {
        $maleDancer->rewind();
        $femaleDancer->rewind();
    while ($maleDancer->valid() && $femaleDancer->valid()) {
        echo "cặp ".$maleDancer->current()->name.' vs '.$femaleDancer->current()->name."<br>";
        $maleDancer->next();
        $femaleDancer->next();
    }   
}
function checkCouple($maleDancer,$femaleDancer) {
    $i=0;
    while (!$maleDancer->valid() && $femaleDancer->valid()){
        echo $femaleDancer->current()->name." Đang đợi "."<br>";
        $maleDancer->next();
        $femaleDancer->next();
        $i++;

    }
    while (!$femaleDancer->valid() && $maleDancer->valid()){
        echo $maleDancer->current()->name." Đang đợi"."<br>";
        $maleDancer->next();
        $femaleDancer->next();
        $i++;
    }
    if ($i != 0){
        echo "Có ".$i." Người đang đợi";
    }
}
$maleDancer = new SplQueue();
$femaleDancer = new SplQueue();

$maleDancer->enqueue($dancer = new Dancer('Cường',"male"));
$maleDancer->enqueue($dancer = new Dancer('Thắng',"male"));
$maleDancer->enqueue($dancer = new Dancer('Phi',"male"));
$maleDancer->enqueue($dancer = new Dancer('Tân',"male"));

getDancer($maleDancer,$femaleDancer);
$femaleDancer->enqueue($dancer = new Dancer('Hà','female'));
$femaleDancer->enqueue($dancer = new Dancer('Như','female'));
$femaleDancer->enqueue($dancer = new Dancer('Tâm','female'));

getDancer($maleDancer,$femaleDancer);

checkCouple($maleDancer,$femaleDancer);
?>
