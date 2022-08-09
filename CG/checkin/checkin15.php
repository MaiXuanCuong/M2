<?php
// str_replace(); //tìm chuỗi thay thês chuỗi và truyền một chuỗi
// substr(); // tách chuỗi theo tùy chọn chuỗi, vị tri bắt đầu, độ dài muốn tách
// explode(); // chueyenr chuỗi thành mảng , kí tự phân tách, chuỗi
// implode();// chuyển mảng thành chuõi , kí tự phân tách , mảng

$string = '0943612567,0905444555,0968787878,0941888999';
$arr = explode(",",$string);
$vinaphone = [];
foreach ($arr as $key => $value){
    $sosanh = substr($value, 0, 3);
    if ($sosanh == '094' || $sosanh == '091'){
        array_push($vinaphone,$value);
    }
}
echo "Vinaphone = ". implode(",",$vinaphone);


?>