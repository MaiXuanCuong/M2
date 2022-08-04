<?php
class Country{
   public $name;
   public $totalGoldMedals;
   public $rank=[];
    public function push($name,$totalGoldMedals) {
        array_push($this->rank, [$name,$totalGoldMedals]);
    }
   public function sortTotalGoldMedals(){
($this->rank);
            return $this->rank;
   }
}
$QuocGia = new Country();
$QuocGia->push("Vn",4);
$QuocGia->push("tq",5);
$QuocGia->push("nb",2);
$QuocGia->push("hq",9);
$QuocGia->push("nga",2);
$QuocGia->push("cmp",1);
$QuocGia->push("lao",9);
$QuocGia->push("plp",0);
echo "<pre>";
print_r($QuocGia->sortTotalGoldMedals()) ;

?>