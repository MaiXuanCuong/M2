 

<?php

// class Test extends Exception
// {
// }

// try {
//    throw new Test();
// } catch (Test $t) {
//    echo("Got the Test Exception");
// } finally {
//    echo("Inside finally block ");
// }

// class Calculator
// {
//    function division($a, $b): float|int
//    {
//       if ($b == 0) {
//        throw new Exception('Error');
//       }
//       return $a / $b;
//    }
// }

// try {
//   $x = 0;
//   $y = 10;
//   $calculator = new Calculator();
//   $calculator->division($y, $x);
// } catch (Exception $e) {
//   echo $e->getMessage();
// }

// class Base extends Exception
// {
// }

// class Derived extends Base
// {
// }

// try {
//    throw new Derived();
// } catch (Base $b) {
//    echo("Caught base class exception");
// } catch (Derived $d) {
//    echo("Caught derived class exception");
// }


// echo strlen("Hello world!"); // outputs 12

// echo str_word_count("Hello world!"); // outputs 2
// echo strrev("Hello world!"); // outputs !dlrow olleH
// echo strpos("Hello world!", "world"); // outputs 6

// echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

// echo substr("Hello world", 10) . "<br>"; // d
// echo substr("Hello world", -1) . "<br>"; // d
// echo substr("Hello world", 0, 10) . "<br>"; // Hello worl
// echo substr("Hello world", 0, -1) . "<br>"; // Hello worl

// echo strtolower("Hello WORLD"); //hello world
// echo strtoupper("Hello WORLD!"); //HELLO WORLD!
// $str = "Hello Wforld!";
// echo $str . "<br>";
// echo trim($str, ""); // llo Worl

//1
// function sum_even_numbers()
// {
//     $sum = 0;
//     //Your code here
//     for ($i=1; $i<=1000;$i++){
//         if($i % 2 == 0){
//             $sum= $sum +$i;
//         }
//     }
//     return $sum; 
// }
// //2
// function get_array() {
//     $arr = [];
//     //your code here
//     for($i=1; $i<=255;$i++){
//         array_push($arr,$i);
//     }
//     return $arr; 
// }

// //3
// function iterArr($arr) {
//     //your code here 
//     $sum=0;
//     for ($i=0;$i <count($arr); $i++){
//         $sum = $sum + $arr[$i];
//     }
//     return $sum; 
// }
// //4
// function sum_odd_5000() {
//     $sum = 0;
//     //your code here 
//     for($i =1;$i<5000;$i=$i+2){
  
//             $sum =$sum+ $i;
          
//     }
//     return $sum; 
// }
// //5
// function findMax($arr) {
//     //your code here 
//     $max=$arr[0];
//     for($i=1 ; $i <count($arr); $i++){
//         if ($max < $arr[$i]){
//             $max =$arr[$i];
//         }
//     }
//     return $max; 
// }
// //6
// function findAvg($arr) {
//     //your code here 
//     $avg=0;
//     $sum=0;
//     for ($i =0;$i < count($arr);$i++){
//         $sum = $sum + $arr[$i];
//     }
//     $avg = $sum / count($arr);
//     return $avg; 
// }
// //7
// function oddNumbers() {
//     $arr = [];
//     //your code here 
//     for($i=1;$i<50;$i=$i+2){
//         array_push($arr,$i);
//     }
//     return $arr; 
// }
// //8
// function greaterY($arr, $Y) {
//     //your code here 
//     for ($i=0;$i<count($arr);$i++){
//         if ($arr[$i] > $Y){
//             $count++;
//             }
        
//     }
//     return $count; 
// }
// //9
// function squareVal($arr) {
//     //your code here
//     for($i = 0 ;$i<count($arr); $i++){
//         $arr[$i]=$arr[$i]*$arr[$i];
//     }
//     return $arr; 
// }
// //10
// function noNeg($arr) {
//     //your code here 
//     for($i=0;$i<count($arr);$i++){
//         if($arr[$i] <0){
//             $arr[$i] = 0;
//         }
//     }
//     return $arr; 
// }
// //11
// function maxMinAvg($arr) {
//     //your code here 
//     $arrNew=[];
//     $max = $arr[0];
//     for ($i = 1 ;$i<count($arr);$i++){
//         if ($max <$arr[$i]){
//             $max = $arr[$i];
//         }
//     }
//     array_push($arrNew,$max);
//     $min = $arr[0];
//        for ($i = 1 ;$i<count($arr);$i++){
//         if ($arr[$i] < $min){
//             $min = $arr[$i];
//         }
//     }
//     array_push($arrNew,$min);
//     $sum=0;
//     $avg =0;
//        for ($i = 0 ;$i<count($arr);$i++){
//         $sum = $sum + $arr[$i];
//         }
//         $avg = $sum/ count($arr);
    
//         array_push($arrNew,$avg);
//     return $arrNew; 
// }
// //12
// function swap($arr) {
//     //your code here 
    
//     $temp = $arr[0];
//     $arr[0]= $arr[count($arr)-1];
//     $arr[count($arr)-1] = $temp;
// $arrNew= $arr;
//     return $arrNew; 
// }
// //13
// function numToStr($arr) {
//     //your code here 
//     for ($i=0;$i<count($arr);$i++){
//         if ($arr[$i] < 0){
//             $arr[$i]='Dojo';
//         }
//     }
//     return $arr; 
// }


// $string = " CodeGym_Viet_Nam ";
// $trim_string = trim($string, " ");
// $index = stripos($trim_string, "_");
// $sub_string = substr($trim_string, 0, $index);
// echo "$sub_string";


// $subject = "51-X2-123.04";
// // "CodeGym@gmail.com";
// $pattern = '/^\d{2}-[A-Z]\d-\d{3}\.\d{2}$/';
// // '/^\w+@\w+(\.\w+){1,3}$/';
// if (preg_match($pattern, $subject, $matches)) {
//     echo 'Khớp';
// } else {
//     echo 'Không khớp';
// };
// $str = "Mai Xuân Cường";
// echo $str . "<br>";
// echo trim($str, "Cường");
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #a1, #a3, #a5, #a7, {
            background-color: aliceblue;
        }
        #a2, #a4, #a6, #a8 {
            background-color: black;
        }
        #b1 {
            font-size: 40px;
            background-color:rgb(246, 201, 52);
        }
    </style>
</head>
<body>
    <table border="0" cellspacing="0" cellpadding="50">
        <form>
            <tr >
                <td rowspan="2"id="b1"></td>
                <td id="b1"><b>1</b></td>
                <td id="b1"><b>2</b></td>
                <td id="b1"><b>3</b></td>
                <td id="b1"><b>4</b></td>
                <td id="b1"><b>5</b></td>
                <td id="b1"><b>6</b></td>
                <td id="b1"><b>7</b></td>
                <td id="b1"><b>8</b></td>
                <td id="b1"></td>
            <tr>
            <tr>
                <td id="b1"><b>A</b></td>
                <td id="a1"></td>
                <td id="a2"></td>
                <td id="a3"></td>
                <td id="a4"></td>
                <td id="a5"></td>
                <td id="a6"></td>
                <td id="a7"></td>
                <td id="a8"></td>
                <td  rowspan="9" id="b1"id=""></td>
              
            </tr>
            <tr>
                <td id="b1"><b>B</b></td>
                <td id="a2"></td>
                <td id="a3"></td>
                <td id="a4"></td>
                <td id="a5"></td>
                <td id="a6"></td>
                <td id="a7"></td>
                <td id="a8"></td>
                <td id="a1"></td>
               
              
            </tr>
            <tr>
                <td id="b1"><b>C</b></td>
                <td id="a1"></td>
                <td id="a4"></td>
                <td id="a5"></td>
                <td id="a6"></td>
                <td id="a7"></td>
                <td id="a8"></td>
                <td id="a1"></td>
                <td id="a2"></td>
                
               
            </tr>
            <tr>
                <td id="b1"><b>D</b></td>
                <td id="a2"></td>
                <td id="a5"></td>
                <td id="a6"></td>
                <td id="a7"></td>
                <td id="a8"></td>
                <td id="a1"></td>
                <td id="a2"></td>
                <td id="a3"></td>
                
               
            </tr>
            <tr>
                <td id="b1"><b>E</b></td>
                <td id="a1"></td>
                <td id="a6"></td>
                <td id="a7"></td>
                <td id="a8"></td>
                <td id="a1"></td>
                <td id="a2"></td>
                <td id="a3"></td>
                <td id="a4"></td>
                
               
            </tr>
            <tr>
                <td id="b1"><b>F</b></td>
                <td id="a2"></td>
                <td id="a7"></td>
                <td id="a8"></td>
                <td id="a1"></td>
                <td id="a2"></td>
                <td id="a3"></td>
                <td id="a4"></td>
                <td id="a5"></td>
               
              
            </tr>
            <tr>
                <td id="b1"><b>G</b></td>
                <td id="a1"></td>
                <td id="a8"></td>
                <td id="a1"></td>
                <td id="a2"></td>
                <td id="a3"></td>
                <td id="a4"></td>
                <td id="a5"></td>
                <td id="a6"></td>
                
            </tr>
            <tr>
                <td id="b1"><b>H</b></td>
                <td id="a2"></td>
                <td id="a1"></td>
                <td id="a2"></td>
                <td id="a3"></td>
                <td id="a4"></td>
                <td id="a5"></td>
                <td id="a6"></td>
                <td id="a7"></td>
                
              
            </tr>
            <tr>
                <td colspan="9" id="b1"></td>
              
            </tr>
        </form>
       
    </table>
   
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table
        { width: 90%;
         border-color: aliceblue;
         border-width: 2px;
        }
        #k1 {
            text-align: center;
            color: blue
        }
        #k2 {
            background-color:red
        }
        #k3 {
            background-color: rgb(239, 195, 15)
        }
        #k4 {
            background-color:blue 
        }
        th {
            border-style: none;
        
        }
        #k5 {
            color : red
        }
        sub {
            font-size: 8px;
            color : black 
        }
        #k6 {
            color: blue

        }
        #k7 {
            font-size: 10px;
            color:rgb(252, 234, 234)
        }
        #k8 {
            font-size: 10px;
    }
    td {
        text-align: center;
    }
    </style>
</head>
<body>
    <table border="1" cellspacing="1">
        <tr>
            <th colspan="7" id="k1"><b>Tháng 10-October</b></th>
        </tr>
        <tr id="k7">
            <th id="k2"><b>C.Nhật</b></th>
            <th id="k3"><b>T.Hai</b></th>
            <th id="k3"><b>T.Ba</b></th>
            <th id="k3"><b>T.Tư</b></th>
            <th id="k3"><b>T.Năm</b></th>
            <th id="k3"><b>T.Sáu</b></th>
            <th id="k4"><b>T.Bảy</b></th>
        </tr>
        <tr id="k8">
            <th id="k5"><b>Sun</b></th>
            <th><b>Mon</b></th>
            <th><b>Tue</b></th>
            <th><b>Wed</b></th>
            <th><b>Thu</b></th>
            <th><b>Fri</b></th>
            <th id="k6"><b>Sat</b></th>
        </tr>
        <tr>
            <td><sub></sub></td>
            <td><sub></sub></td>
            <td><sub></sub></td>
            <td><sub></sub></td>
            <td>1<sub>13</sub></td>
            <td>2<sub>14</sub></td>
            <td id="k6">3<sub>15</sub></td>
            
            
        </tr>
        <tr>
            <td id="k5">4<sub>16</sub></td>
            <td>5<sub>17</sub></td>
            <td>6<sub>18</sub></td>
            <td>7<sub>19</sub></td>
            <td>8<sub>20</sub></td>
            <td>9<sub>21</sub></td>
            <td id="k6">10<sub>22</sub></td>
        </tr>
        <tr>
            <td id="k5">11<sub>23</sub></td>
            <td>12<sub>24</sub></td>
            <td>13<sub>25</sub></td>
            <td>14<sub>26</sub></td>
            <td>15<sub>27</sub></td>
            <td>16<sub>28</sub></td>
            <td id="k6">17<sub>29</sub></td>
        </tr>
        <tr>
            <td id="k5">18<sub>1.9</sub></td>
            <td>19<sub>2</sub></td>
            <td>20<sub>3</sub></td>
            <td>21<sub>4</sub></td>
            <td>22<sub>5</sub></td>
            <td>23<sub>6</sub></td>
            <td id="k6">24<sub>7</sub></td>
        </tr>
        <tr>
            <td id="k5">25<sub>8</sub></td>
            <td>26<sub>9</sub></td>
            <td>27<sub>10</sub></td>
            <td>28<sub>11</sub></td>
            <td>29<sub>12</sub></td>
            <td>30<sub>13</sub></td>
            <td id="k6">31<sub>14</sub></td>
        </tr>
    </table>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        for (var i = 0; i <5; i++) {
            setTimeout((function() {
                console.log(i)
            }), )
        }
    </script>
</body>
</html>