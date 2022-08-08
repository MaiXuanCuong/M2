<?php
class CustomException extends Exception{
    public function hienThiLoi(){
        $error = "";
        $error .= " <br> Lỗi ngoại lệ: ".$this->getMessage();// nội dung lỗi
        $error .= " <br> Lỗi code ngoại lệ: ".$this->getCode();// mã lỗi
        $error .= " <br> Lỗi tên tệp nguồn: ".$this->getFile();//file chứa lỗi
        $error .= " <br> Lỗi dòng: ".$this->getLine();// dòng xãy ra lỗi
        return $error;
    }
}
function sum($a,$b){
    if ($b == 0){
        throw new CustomException('Số chia phải khác số không');
     }
     $C = $a / $b;
     echo "Kết quả là : ".$C;
}
$a = 5; // số bị chia
$b=0; // số chia

    try {
        
        sum($a,$b);
    } catch (\Exception $e ) {
    echo "Lỗi :".$e->hienThiLoi();
    } 
    // finally {
    //     echo " vào khối finally ";
    // }