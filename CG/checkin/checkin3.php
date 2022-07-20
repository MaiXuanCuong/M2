<?php
// function hello() {
//     echo "Hello";   
// }
// hello();





//  function sum($a, $b)
//   {return($a + $b);
// }
// $result = sum(5,6);
// echo $result;


/*4. Viết một chương trình máy tính, 
- có 4 hàm thực hiện các phép tính cộng trừ nhân chia cho 2 số a,b, trả về kết quả
- cho biến pheptinh bằng một trong 4 giá trị + - * /
- dùng khối lệnh switchcase để gọi các hàm tương ứng với giá trị của pheptinh 
- các case đều gán vào biến result
- sau khối lệnh switchcase in ra biến result theo cấu trúc:
- GIA_TRI_A PHEP_TINH GIA_TRI_B = KET_QUA
Ví dụ: 5 + 6 = 11*/
 
// function cong($a,$b){
//     return $a + $b;
// }
// function tru(){
//     return $a - $b;
// }
// function nhan(){
//     return $a * $b;
// }
// function chia(){
//     return $a / $b;
// }
// $pheptinh = '+';
// $a1 =6;
// $b1 =5;
// switch ($pheptinh) {
//     case '+':
//      $ketqua = cong($a1,$b1);
    
//     break;
//     case '-':
//         $ketqua = tru($a1,$b1);
     
//     break;
//     case '*':
//         $ketqua = nhan($a1,$b1);
      
//     break;
//     case '/':
//         $ketqua = chia($a1,$b1);
      
//     break;
                               
//     default:
//       echo "Phép tính không đúng";
//         break;
// }

// echo $a1 .' '.$pheptinh.' ' . $b1 .' = '.$ketqua;

// tạo mảng
//$boosk = array(1,2,3,4,5,6,7,8,9,10,11);
//  $boosk =[1,2,3,4,5,6,7,8,9,10];
// in ra mảng
// echo '<pre>';
// print_r($boosk);
// echo '</pre>';
// độ dài mảng
// echo count($boosk);
// duyệt mảng
    // for ($i=0; $i < count($books); $i++) { 
    //     if( isset($books[$i]) ){
    //         echo $books[$i].'<br>';
    //     }
    // }

   /* foreach( $books as $key => $book ){
        echo 'Key: '.$key.' - Value: '.$book.'<br>';
    }



*/
// thêm mảng
/*
$books[count($boosk]= giá trị;
array_push($books,"lý");
$books[] = "anh";

*/
/*
sửa
$books[0] = "sử học";

*/ 
/*
xóa vị trí
unset ($books[3]);
xóa phần tử đầu mảng
array_shift($books);
xóa phần tử cuối mảng
array_pop($books);



*/


/*  
mảng liên kết
tạo mảng 
$info = [
    'name' => 'John',
    'age' => 36
]
foreach ($boosk as $key => $value){
echo 'key: '.$key.' '. 'Value' . $value.'<br>';
} 
thêm phần tử
$info['gender'] = 'male';
$info['] = 'abc';
$info['] = 'dcb';
sửa phần tử
$info['gender'] = 'nu';
$info['name'] = '';

xóa phần tử
unset ($info['gender']);
xóa phần tử đầu mảng
xóa phần tử cuối mảng 
*/




/*
mảng đa chiều
tạo mảng
$tusach = [
['toan','ly','hoa'], //0
    //0   1    2
['văn','su','dia'], //1
    //0   1    2
['toan','ly','hoa'] //2
]    //0   1    2

 unset( $tusach[1][2] );

    // for ($i=0; $i < count($tusach); $i++) { 
    //     for ($j=0; $j < count($tusach[$i])  ; $j++) { 
            
    //     }
    // }
    echo '<pre>';
    print_r($tusach);
    echo '</pre>';
    echo '<hr>';
    foreach( $tusach as $key => $books ){
        foreach( $books as $book ){
            echo $book.'<br>';
        }
    }


*/
?>