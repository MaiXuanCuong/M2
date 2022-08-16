<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sodienthoai = $_POST['sodienthoai'];
        class Exception1 extends Exception{
            public function message(){
                return $this->getMessage();
            }
        }
try {
    $pattern = '/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/';
    // '/\([0-9]{2,2}\)-\([0][0-9]{9,9}\)/';
    // $sodienthoai = '(84)-(0978489648)';
    if ($sodienthoai == ''){
        throw new Exception1("Vui lòng nhập số");
    }
    if (preg_match($pattern, $sodienthoai)) {
        echo "Số định dạng đúng: " . $sodienthoai;
    } else {
        echo "Số định dạng không đúng: " . $sodienthoai;
    }
} catch (\Exception1 $e) {
  echo $e->getMessage();
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
        <table>
            <tr>
                <td>Nhập số điện thoại</td>
                <td><input type="text" name="sodienthoai" placeholder="Ví dụ: (84)-(0978489648)"></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" value="Kiểm Tra"></td>
            </tr>
        </table>
        
       
    </form>
</body>
</html>