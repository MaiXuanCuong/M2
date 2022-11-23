<?php
// $i = 0;
// $max =10;
// $date = '2022-02-02';
// $listbh = ['monday'=>'red', 'friday'=>'blue'];
// while ($i < $max) {
// $thu = date('l', strtotime($date));
// array_push($listbh, $thu);
// if (isset($listbh[$thu])) {
// echo $listbh[$thu];
// $i++;
// }
// $date = date('Y-m-d', strtotime($date . " +1 days"));
// }


// $string = 'ngày 2022-01-29 mua hàng 100,000 đ,
// ngày 2022-02-02 mua hàng 300,000 đ,
// ngày 2022-02-02 mua hàng 300,000 đ,
// ngày 2022-02-02 mua hàng 300,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-07 thanh toán 200,000 đ,
// ngày 2022-02-10 mua hàng 250,000 đ,
// ngày 2022-02-15 thanh toán 400,000 đ,';
// $arrayS = explode("đ,", $string);
// array_pop($arrayS);
// $total = 0;
// $totalbuy = 0;
// $totalpay = 0;
// $totalbuy1 = 0;
// $totalpay1 = 0;
// $arrdaybuy = [];
// $arrtotaldaybuy = [];
// $dayfrom = "2022-01-29";
// $dayto = "2022-02-20";
// foreach ($arrayS as $arrayChirls) {
//     $luys = explode(" ", $arrayChirls);
//     $date = $luys[1];
//     if (strtotime($date) >= strtotime($dayfrom) && strtotime($date) <= strtotime($dayto)) {
//         if (strtotime($date) >= strtotime("2022-02-02") && strtotime($date) <= strtotime("2022-02-10")) {
//             if ($luys[3] == 'toán') {
//                 $moneypay = $luys[4];
//                 $moneyp = str_replace(',', '', $moneypay);
//                 $totalpay += $moneyp;
//             }
//             if ($luys[3] == 'hàng') {
//                 $moneybuy = $luys[4];
//                 $moneyb = str_replace(',', '', $moneybuy);
//                 $totalbuy += $moneyb;
//             }
//             $total = $totalbuy - $totalpay;
//             $date = date_create($date);
//             array_push($arrdaybuy, date_format($date, "d/m/Y") . " " . $luys[2] . " " . $luys[3] . " " . $luys[4] . " VNĐ");
//         } else {
//             if ($luys[3] == 'toán') {
//                 $moneypay1 = $luys[4];
//                 $moneyp1 = str_replace(',', '', $moneypay1);
//                 $totalpay1 += $moneyp1;
//             }
//             if ($luys[3] == 'hàng') {
//                 $moneybuy1 = $luys[4];
//                 $moneyb1 = str_replace(',', '', $moneybuy1);
//                 $totalbuy1 += $moneyb1;
//             }
//             $total1 = (($totalbuy + $totalbuy1) - ($totalpay + $totalpay1));
//             $date = date_create($date);
//             array_push($arrtotaldaybuy, date_format($date, "d/m/Y"));
//         }
//         ;
//     }
// }
// echo 'Khách Hàng Đã Thực Hiện Những Giao Dịch (<br>';
// foreach ($arrdaybuy as $daybu) {
//     echo 'Ngày ' . $daybu . ' <br>';
// }
//  echo '<br>=> Tổng Mua Hàng ' . number_format(abs($totalbuy)) . " VND<br><br>" .
// '=> Tổng Thanh Toán là ' . number_format(abs($totalpay)) . " VND<br><br>"; 

// if($total > 0){
//     echo  '=> Số tiền khách còn nợ cần phải trả là ' . number_format(abs($total)) . " VND)<br><br>";
// } else {
//     echo '=> Số tiền cẩn phải trả cho khách là ' . number_format(abs($total)) . " VND)<br><br>";
// }
// if($total1 > 0){
//     echo '=> Dư nợ Tính Từ Ngày: ' . $dayfrom . ' Đến Ngày: ' . $dayto . ' Là ' . number_format(abs($total1)) . " VND<br>";
// } else {
//     echo '=> Dư có Tính Từ Ngày: ' . $dayfrom . ' Đến Ngày: ' . $dayto . ' Là ' . number_format(abs($total1)) . " VND<br>";
// }
$arr = [1,2,3,7,5,3,2,8,7,6,9,9,6,9,10,3,10,10];
rsort($arr);
echo '<pre>';
print_r($arr);
$maxtwo = 0;
foreach ($arr as $key => $value) {
    if($value < $arr[0]){
        $maxtwo = $value;
        if($maxtwo == $arr[$key]){
            echo $arr[$key].'<br>';
            break;
        }
        
    }
   
}