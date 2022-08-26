<?php
function loadRegistrations($fileName){
    $jsonData = file_get_contents($fileName);
    return json_decode($jsonData, true);
}
function saveDataJSON($fileName, $Ho,$Ten, $NgaySinh, $DiaChi, $ViTriCongViec){
    try{
        $contact = array(
            'ho' => $Ho,
            'ten' => $Ten,
            'ngaysinh' => $NgaySinh,
            'diachi' => $DiaChi,
            'vitricongviec' => $ViTriCongViec
        );
        $arrData = loadRegistrations($fileName);
        array_push($arrData,$contact);
        $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
        file_put_contents($fileName, $jsonData);
}
catch(Exception $e){
    echo 'Lỗi: ', $e->getMessage(), "\n";
}
}
$HoErr = null;
$TenErr = null;
$NgaySinhErr = null;
$DiaChiErr = null;
$ViTriCongViecErr = null;

    if(  $_SERVER['REQUEST_METHOD'] == 'POST'){
        $Ho = $_POST['Ho'];
        $Ten = $_POST['Ten'];
        $NgaySinh = $_POST['NgaySinh'];
        $DiaChi = $_POST['DiaChi'];
        $ViTriCongViec = $_POST['ViTriCongViec'];
        $hasError = false;
        if (empty($Ho)) {
            $HoErr = "Họ không được để trống!";
            $hasError = true;
        }
    
        if (empty($Ten)) {
            $TenErr = "Tên không được để trống!";
            $hasError = true;
        } 
        
    
        if (empty($NgaySinh)) {
            $NgaySinhErr = " Ngày sinh không được để trống!";
            $hasError = true;
        }
        if (empty($DiaChi)) {
            $DiaChiErr = " Địa chỉ không được để trống!";
            $hasError = true;
        }
        if (empty($ViTriCongViec)) {
            $ViTriCongViecErr = " Vị trí công việc không được để trống!";
            $hasError = true;
        }
    
        if (!$hasError) {
            saveDataJSON("dulieu.json", $Ho, $Ten, $NgaySinh, $DiaChi, $ViTriCongViec);
            $Ho = null;
            $Ten = null;
            $NgaySinh = null;
            $DiaChi = null;
            $ViTriCongViec = null;
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
    <style>
        #date1 {
            width: 97%;
        }
        .error{
            color: #FF0000;
        }
        #table2 {
            text-align: center ;
            border-collapse: collapse;
            width: 1500px;
            border: solid 1px #ccc;
        }
        form {
            width: 450px;
        }
        .a
        {text-decoration: none;
            /* background-color: #cbcbcb; */
    background-color:#00ffff;
    /* float: right; */
    color: blue;
    text-align: center;
    padding: 4px 10px;
    text-decoration: none;
    font-size: 17px;}
    </style>
</head>
<body>
    <form action=" " method="post">
    <fieldset>
        <table>
        <tr><td>Họ</td>
        <td><input type="text" name="Ho" placeholder="Nhập Họ"></td>
        <td><span class="error">* <?php echo $HoErr; ?></span><br></td>
        </tr>
        <tr><td>Tên</td>
        <td><input type="text" name="Ten" placeholder="Nhập Tên"></td>
        <td><span class="error">* <?php echo $TenErr; ?></span><br></td>
        </tr>
        <tr><td>Ngày Sinh</td>
        <td><input type="date" id="date1" name="NgaySinh" placeholder="Nhập Ngày sinh"></td>
        <td> <span class="error">* <?php echo $NgaySinhErr; ?></span><br> </td>
        </tr>
        <tr><td>Địa Chỉ</td>
        <td><input type="text" name="DiaChi" placeholder="Nhập Địa Chỉ"></td>
        <td> <span class="error">* <?php echo $DiaChiErr; ?></span><br> </td>
        </tr>
        <tr><td>Vị Trí Công Việc</td>
        <td> <input type="text" name="ViTriCongViec" placeholder="Nhập Vị Trí Công Việc"></td>
        <td><span class="error">* <?php echo $ViTriCongViecErr; ?></span>
        </td>
        </tr>
        <tr><td></td>
        <td><input type="submit" name="submit" value="Thêm"></td>
        <td></td>
        </tr>
    </fieldset>
    </table>
    </form>
    <table id="table2">
            <tr>
                <td>ID</td>
                <td width="100px">Họ</td>
                <td width="100px">Tên</td>
                <td width="100px">Ngày Sinh</td>
                <td width="550px">Địa Chỉ</td>
                <td width="350px">Công việc</td>
                <td width="350px">Thao tác</td>
                <!-- <td>Thao tác</td> -->
            </tr>
            <hr>
            <?php
            $employee = loadRegistrations('dulieu.json');
            if ($employee != '') {
             foreach ($employee as $key => $registration){  ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?= $registration['ho']; ?></td>
                <td><?= $registration['ten'];  ?></td>
                <td><?= $registration['ngaysinh'];  ?></td>
                <td><?= $registration['diachi'];  ?></td>
                <td><?= $registration['vitricongviec']; ?></td>
                <td>
                    <a class="a" href="edit.php?id=<?php echo --$key; ?>" >Edit</a>
                    <a class="a" href="delete.php?id=<?php echo --$key; ?>" >Delete</a>
                </td>
            </tr>
        <?php } } ?>
        </table>
 
</body>
</html>
