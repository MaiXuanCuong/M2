<?php
//3 

    // $age = 18;
    // $money = true;
    //  if ($money == true && $age >= 18) {
    //     echo "bạn được uống bia";
    //  }

// 4 


    //  $age = 18;
    //  $money = true;
    //   if ($money == true || $age >= 18) {
    //      echo "bạn được uống biaa";
    //   }



//5 




// $age = 17;

//  if (!($age >= 18) ) {
//     echo "bạn phải uống nước ngọt";
//  }




//6


// $money = true;
// $quan_open = true;
// $cho_no = true;


//  if ($quan_open) {
//     if ($cho_no || $money){
//         echo "bạn được nhậu";
//     }

//  }



//7 


// $money = true;
// $quan_open = false;
// $cho_no = true;


//  if ($quan_open) {
//     if ($cho_no || $money){
//         echo "bạn được nhậu";
//     }

//  } else {
//     echo "bạn phải về nhà ";
//  }


//9


// $day = 7;
// if ($day >= 2 && $day <= 6){
//     echo "đi làm";
// }
// else if ($day == 7){
//     echo "sinh hoạt CLB";
// }
// else {
//     echo "relax";
// }



//11
 

// $month = 2;
// switch ($month){
//     case 1:
//         echo "31 ngày";
//         break;
//     case 2:
//         echo "28 ngày";
//         break;
//     default:
//     echo "30 ngày";
// }




//12

// $day = 3;
// switch ($day){
//     case 2;
//     case 3:
//     case 4:
//     case 5:
//     case 6:
//         echo "đi làm";
//         break;
//     case 7:
//         echo "sinh hoạt CLB";
//         break;
//     default:
//     echo "relax";
//     break;
// }




//13

// $age = 17;

// echo ($age >= 18) ? "được uống bia" : "được uống rượu";




//15

// for ($i = 0 ; $i < 5 ; $i++) {
//     echo $i . '<br>';
// }



//16

// for ($i = 1 ; $i <= 10; $i++) {
//     echo "5 X ". $i ." = ".(5*$i). '<br>';
// }




//17


// for ($i = 1 ; $i <= 100 ; $i++) {
//     if ($i % 2 == 0) {
//         echo $i.'<br>';
//     }
// }




//18

// for ($i = 100 ; $i >0 ; $i--) {
//     if (!($i % 2 == 0)) {
//         echo $i.'<br>';
//     }
// }



//19

// $tong = 0;
// for ($i = 1 ; $i <= 10 ; $i++) {
//     $tong += $i;
// }
// echo $tong;




//20 


// $dem = 0;
// while ($dem <= 5){
//     echo $dem . "<br>";
//     $dem ++;
// }



//21


// $dem = 10;
// while ($dem > 0){
//     echo $dem . "<br>";
//     $dem--;}



//22


// $dem = 0;
// do {
//     echo $dem . "<br>";
//     $dem++;
// } while ($dem <= 5);




//23



// $dem = 10;
// do {
//     echo $dem . "<br>";
//     $dem--;
// } while ($dem >= 5);




//24



//  for ($i = 0; $i < 10; $i++){
//     echo $i.'<br>';
//     if ($i == 5){
       
//         break;
//     }
//  }


//25



// for ($i = 1; $i <= 5; $i++){
   
//     if ($i == 3){
//         continue;
//     }
//     echo $i.'<br>';
// }


//26


// for ($i = 0; $i < 10; $i++){
//     if (!($i % 2 == 0)){
//    continue;
//     }
//     echo $i.'<br>';
// }




//27




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,td{
            border:1px solid #ccc;
            width:50px;
        }
    </style>
</head>
<body>
    <table>
        <?php for($i = 0; $i < 8; $i++){  
            echo "<tr>" ;
             for( $j = 0; $j < 3; $j++){
                echo "<td>".$i.$j."</td>";
             }
             echo '</tr>';
         }?>
    </table>
</body>
</html>

<?php
if (  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
   $pheptinh = $_POST['pheptinh'];
   if (!($number1 == "" && $number2 == "")){
    switch ($pheptinh) {
        case 'cong':
            echo "Kết quả : ". $number1 + $number2;
        break;
        case 'tru':
            echo "Kết quả : ". $number1 - $number2;
        break;
        case 'nhan':
            echo "Kết quả : ". $number1 * $number2;
        break;
        case 'chia':
            if ($number2 != 0){
                echo "Kết quả : ". $number1 / $number2;
            } else {
                echo "không được phép chia cho số 0";
            }
           
        break;
    }
   } else {
    echo " vui lòng nhập số";
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
    <form action="" method="post">
    <input type="number" name="number1" placeholder="nhập số thứ nhất"><br>
    <select name="pheptinh" id="">
        <option name="cong" value="cong">+</option>
        <option name="tru"  value="tru">-</option>
        <option name="nhan" value="nhan">*</option>
        <option name="chia" value="chia">/</option>
    </select><br>
    <input type="number" name="number2" placeholder="nhập số thứ hai"> <br>
    <input type="submit" name="submit" value="Kiểm tra">
    </form>
</body>
</html>
