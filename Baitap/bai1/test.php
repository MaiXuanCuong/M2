<?php
$string = 'ngày 2022-01-29 mua hàng 100,000 đ,
ngày 2022-02-02 mua hàng 300,000 đ,
ngày 2022-02-07 thanh toán 200,000 đ,
ngày 2022-02-10 mua hàng 250,000 đ,
ngày 2022-02-15 thanh toán 400,000 đ,';
$arrayS = explode("đ,", $string);
array_pop($arrayS);
$total = 0;
$totalbuy = 0;
$totalpay = 0;
$totalbuy1 = 0;
$totalpay1 = 0;
$arrdaybuy = [];
$arrtotaldaybuy = [];
$dayfrom = "2022-01-29";
$dayto = "2022-02-20";
foreach ($arrayS as $arrayChirls) {
    $luys = explode(" ", $arrayChirls);
    array_pop($luys);
    $date = $luys[1];
    if (strtotime($date) >= strtotime($dayfrom) && strtotime($date) <= strtotime($dayto)) {
        if (strtotime($date) >= strtotime("2022-02-02") && strtotime($date) <= strtotime("2022-02-10")) {
            if ($luys[3] == 'toán') {
                $moneypay = $luys[4];
                $moneyp = str_replace(',', '', $moneypay);
                $totalpay += $moneyp;
            }
            if ($luys[3] == 'hàng') {
                $moneybuy = $luys[4];
                $moneyb = str_replace(',', '', $moneybuy);
                $totalbuy += $moneyb;
            }
            $total = $totalbuy - $totalpay;
            $date = date_create($date);
            array_push($arrdaybuy, date_format($date, "d/m/Y") . " " . $luys[2] . " " . $luys[3] . " " . $luys[4] . " VNĐ");
        } else {
            if ($luys[3] == 'toán') {
                $moneypay1 = $luys[4];
                $moneyp1 = str_replace(',', '', $moneypay1);
                $totalpay1 += $moneyp1;
            }
            if ($luys[3] == 'hàng') {
                $moneybuy1 = $luys[4];
                $moneyb1 = str_replace(',', '', $moneybuy1);
                $totalbuy1 += $moneyb1;
            }
            $total1 = (($totalbuy + $totalbuy1) - ($totalpay + $totalpay1));
            $date = date_create($date);
            array_push($arrtotaldaybuy, date_format($date, "d/m/Y"));
        }
        ;
    }
}
echo 'Khách Hàng Đã Thực Hiện Những Giao Dịch (<br>';
foreach ($arrdaybuy as $daybu) {
    echo 'Ngày ' . $daybu . ' <br>';
}
echo 'Tổng Mua Hàng ' . number_format(abs($totalbuy)) . " VND<br>" .
'Tổng Thanh Toán là ' . number_format(abs($totalpay)) . " VND<br>" .
'Số Tiền Còn Nợ Cần Phải Trả Là ' . number_format(abs($total)) . " VND)<br>";
echo 'Dư Nợ Tính Từ Ngày: ' . $dayfrom . ' Đến Ngày: ' . $dayto . ' Là ' . number_format(abs($total1)) . " VND<br>";
die;

$a = 5;
$b = $a++ - --$a + $a-- + $a;
//    5         5   5     4
echo $b;