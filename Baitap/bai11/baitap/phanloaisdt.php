<?php
$arrVT=[];
$arrVN=[];
$arrMB=[];
$nhap = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nhap = $_REQUEST['nhap'];
    $nhap = explode(", ", $nhap);
    for($i = 0; $i < count($nhap); $i++){
        $element = substr($nhap[$i],0,3);
        if(strlen($nhap[$i]) == 10){
            // if($element == '033'){
            //     array_push($arrVT, $nhap[$i]);
            // }elseif($element == '088'){
            //     array_push($arrVN, $nhap[$i]);
            // }elseif($element == '089'){
            //     array_push($arrMB, $nhap[$i]);
            // }
            switch ($element){
                case '086':
                case '096':
                case '097':
                case '098':
                case '032':
                case '033':
                case '034':
                case '035':
                case '036':
                case '037':
                case '038':
                case '039':
                    array_push($arrVT, $nhap[$i]);
                    break;
                case '088':
                case '091':
                case '094':
                case '083':
                case '084':
                case '085':
                case '081':
                case '082':
                    array_push($arrVN, $nhap[$i]);
                    break;
                case '089':
                case '090':
                case '093':
                case '070':
                case '079':
                case '077':
                case '076':
                case '078':
                    array_push($arrMB, $nhap[$i]);
                    break;
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <textarea name="nhap" cols="30" rows="10"><?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo implode(", ",$nhap);
            }
        ?></textarea>
        <input type="submit" name="" id="" value="Lọc">
    </form>
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'Viettel: ';
    for($i = 0; $i < count($arrVT); $i++){
        echo $arrVT[$i].', ';
    }
    echo '<br>';echo 'Vinaphone: ';
    for($i = 0; $i < count($arrVN); $i++){
        echo $arrVN[$i].', ';
    }
    echo '<br>';echo 'Mobifone: ';
    for($i = 0; $i < count($arrMB); $i++){
        echo $arrMB[$i].', ';
    }
    echo '<br>';
}
// 0331, 0332, 0881, 0882, 0891, 0892
?>