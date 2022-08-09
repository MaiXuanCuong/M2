 

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
function sum_even_numbers()
{
    $sum = 0;
    //Your code here
    for ($i=1; $i<=1000;$i++){
        if($i % 2 == 0){
            $sum= $sum +$i;
        }
    }
    return $sum; 
}
//2
function get_array() {
    $arr = [];
    //your code here
    for($i=1; $i<=255;$i++){
        array_push($arr,$i);
    }
    return $arr; 
}

//3
function iterArr($arr) {
    //your code here 
    $sum=0;
    for ($i=0;$i <count($arr); $i++){
        $sum = $sum + $arr[$i];
    }
    return $sum; 
}
//4
function sum_odd_5000() {
    $sum = 0;
    //your code here 
    for($i =1;$i<5000;$i=$i+2){
  
            $sum =$sum+ $i;
          
    }
    return $sum; 
}
//5
function findMax($arr) {
    //your code here 
    $max=$arr[0];
    for($i=1 ; $i <count($arr); $i++){
        if ($max < $arr[$i]){
            $max =$arr[$i];
        }
    }
    return $max; 
}
//6
function findAvg($arr) {
    //your code here 
    $avg=0;
    $sum=0;
    for ($i =0;$i < count($arr);$i++){
        $sum = $sum + $arr[$i];
    }
    $avg = $sum / count($arr);
    return $avg; 
}
//7
function oddNumbers() {
    $arr = [];
    //your code here 
    for($i=1;$i<50;$i=$i+2){
        array_push($arr,$i);
    }
    return $arr; 
}
//8
function greaterY($arr, $Y) {
    //your code here 
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i] > $Y){
            $count++;
            }
        
    }
    return $count; 
}
//9
function squareVal($arr) {
    //your code here
    for($i = 0 ;$i<count($arr); $i++){
        $arr[$i]=$arr[$i]*$arr[$i];
    }
    return $arr; 
}
//10
function noNeg($arr) {
    //your code here 
    for($i=0;$i<count($arr);$i++){
        if($arr[$i] <0){
            $arr[$i] = 0;
        }
    }
    return $arr; 
}
//11
function maxMinAvg($arr) {
    //your code here 
    $arrNew=[];
    $max = $arr[0];
    for ($i = 1 ;$i<count($arr);$i++){
        if ($max <$arr[$i]){
            $max = $arr[$i];
        }
    }
    array_push($arrNew,$max);
    $min = $arr[0];
       for ($i = 1 ;$i<count($arr);$i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    array_push($arrNew,$min);
    $sum=0;
    $avg =0;
       for ($i = 0 ;$i<count($arr);$i++){
        $sum = $sum + $arr[$i];
        }
        $avg = $sum/ count($arr);
    
        array_push($arrNew,$avg);
    return $arrNew; 
}
//12
function swap($arr) {
    //your code here 
    
    $temp = $arr[0];
    $arr[0]= $arr[count($arr)-1];
    $arr[count($arr)-1] = $temp;
$arrNew= $arr;
    return $arrNew; 
}
//13
function numToStr($arr) {
    //your code here 
    for ($i=0;$i<count($arr);$i++){
        if ($arr[$i] < 0){
            $arr[$i]='Dojo';
        }
    }
    return $arr; 
}


