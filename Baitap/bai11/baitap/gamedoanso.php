<?php 
session_start();
if(isset($_SESSION['left'])){
    $arr = $_SESSION['arr'];
    $left = $_SESSION['left'];
    $right = $_SESSION['right'];
    $mid = $_SESSION['mid'];

    $_SESSION['arr'] = $arr;
    $_SESSION['left'] = $left;
    $_SESSION['right'] = $right;
    $_SESSION['mid'] = $mid;

    $show = true;
}
else{
    $arr = [];
    for($i = 0; $i < 100; $i++){
        $arr[$i] = $i + 1;
    }
    $left = 0;
    $right = count($arr) - 1;
    $mid = ceil(($left + $right)/2);
    $_SESSION['arr'] = $arr;
    $_SESSION['left'] = $left;
    $_SESSION['right'] = $right;
    $_SESSION['mid'] = $mid;
    $show = false;

}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $rand = rand(1, 100);
    if(isset($_REQUEST['doan'])){
        // var_dump($_SESSION['arr']);
        // echo '[Máy] đoán số: '.$_SESSION['arr'][$_SESSION['mid']];
        echo '[Máy] đoán số: ' . $rand;
    }
    if(isset($_REQUEST['lon_hon'])){
        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';
        if ($right <= 100 && $left < 100){
        $left = $_SESSION['left'];
        $right = $_SESSION['mid'] -1;
        $mid = ceil(($left + $right)/2 );
        $_SESSION['left'] = $left;
        $_SESSION['right'] = $right;
        $_SESSION['mid'] = $mid;
        echo '[Máy] đoán số: '.$arr[$mid];
    
} else {
    echo "bạn chỉ được nghĩ số từ 1 đến 100";
}
    }
    if(isset($_REQUEST['nho_hon'])){
        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';
        if ($right < 100 && $left < 100){
            $left = $_SESSION['mid'] + 1;
            $right = $_SESSION['right'];
            $mid = ceil(($left + $right)/2 );
            $_SESSION['left'] = $left;
            $_SESSION['right'] = $right;
            $_SESSION['mid'] = $mid;
        } if($mid != 100){
            echo '[Máy] đoán số: '.$arr[$mid];
        } else {
            echo "bạn chỉ được nghĩ số từ 1 đến 100";
        }
       
    }

    if(isset($_REQUEST['doan_dung'])){
        echo 'Chúc mừng !!!';
        $show = false;
        session_destroy(); 
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
        hãy nghĩ một số 1=>100
        <?php if($show):?>
        <input type="submit" value="Đoán đúnng" name="doan_dung">
        <input type="submit" value="Đoán lớn hơn rồi" name="lon_hon">
        <input type="submit" value="Đoán nhỏ hơn rồi" name="nho_hon">
        <?php else:?>
        <input type="submit" value="Đoán" name="doan">
        <?php endif;?>
    </form>
</body>
</html>