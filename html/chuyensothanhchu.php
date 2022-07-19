<?php
$number = [
    "1"=>"one",
    "2"=>"two",
    "3"=>"three",
    "4"=>"four",
    "5"=>"five",
    "6"=>"six",
    "7"=>"seven",
    "8"=>"eight",
    "9"=>"nine",
    "10"=>"ten",
];
$chuc=[
    "11" => "eleven",
    "12" => "twelve",
    "13" => "thirteen",
    "14" => "fourteen",
    "15" => "fifteen",
    "16" => "sixteen",
    "17" => "seventeen",
    "18" => "eighteen",
    "19" => "nineteen",
];
$chucchan =[
    "20" => "twenty",
    "30" => "thirty",
    "40" => "forty",
    "50" => "fifty",
    "60" => "sixty",
    "70" => "seventy",
    "80" => "eighty",
    "90" => "ninety",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $searchWord = $_POST["search"];
    switch ($searchWord) {
        case $searchWord<=10 && $searchWord >0:
        echo $number[$searchWord];
        break;
        case $searchWord >10 && $searchWord < 20;
        echo $chuc[$searchWord];
        break;
        case $searchWord >=20 && $searchWord <100;
        $chuc_1=(int)($searchWord/10)*10;
        $dv=$searchWord-$chuc_1;
        echo $chucchan[$chuc_1].$number[$dv];
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>chuyển chữ thành số</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập số"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>