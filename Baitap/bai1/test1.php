<?php

// echo chr(56); Trả về các ký tự từ các giá trị ASCII khác nhau:
// echo ord('hi'); Hàm ord() trả về giá trị ASCII của ký tự đầu tiên của chuỗi.
// lcfirst — Tạo chữ thường cho ký tự đầu tiên của chuỗi
// echo ucwords("freetuts.net"); Hàm ucwords() sẽ chuyển tất cả các chữ đầu tiên của mỗi từ trong chuỗi thành chữ in hoa.
//Hàm next() di chuyển con trỏ bên trong tới và xuất ra phần tử tiếp theo trong mảng.
// prev() - di chuyển con trỏ bên trong tới và xuất ra phần tử trước đó trong mảng

//current() - trả về giá trị của phần tử hiện tại trong một mảng

//end() - di chuyển con trỏ bên trong tới và xuất ra phần tử cuối cùng trong mảng

//reset() - di chuyển con trỏ bên trong đến phần tử đầu tiên của mảng

//each() - trả về khóa và giá trị phần tử hiện tại và di chuyển con trỏ bên trong về phía trước
//Hàm array_splice() xóa phần tử trong mảng và thay thế bằng một phần tử hoặc một số phần tử khác.
//Hàm array_sum() tính tổng tất cả các phần tử trong mảng. Hàm trả về kết quả là tổng giá trị của các phần tử trong mảng truyền vào.
//array_product — Tính tích của các giá trị trong một mảng
//Hàm pos() trả về giá trị của phần tử hiện tại trong một mảng.
//Hàm stripos() sẽ chỉ ra vị trí xuất hiện đầu tiên của chuỗi con nào đó trong chuỗi mà không phân biệt chữ hoa chữ thường. Hàm trả về số nguyên là vị trí xuất hiện đầu tiên của chuỗi con.
//strstr — Tìm sự xuất hiện đầu tiên của một chuỗi
//Hàm addslashes() dùng để thêm một dấu gạch chéo ngược (\) phía trước các ký tự là dấu nháy kép, dấu nháy đơn và dấu gạch chéo ngược trong chuỗi.

// $a = 13;
// // $b = &$a;
// $b = 12 ;
// var_dump($a & $b) ;
// $x = false;
// var_dump ($x ?? 'hello')."<br>";
// var_dump ($x ?: 'hello');

interface a{
    function a();
}
interface b{
    function b();
}
interface c extends a,b{
    function c();
}
class d implements a,b{
    function a(){
        echo 'hello';
    }
    function b(){
        echo 'hello';
    }
}
abstract class c1{
    // public abstract function aa1();
  }
abstract class a1{
//   protected abstract function aa();
  private function aaa(){
    
  }
}
abstract class b1 extends a1 implements a{
    
}