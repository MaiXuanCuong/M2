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
        array_push($arrData, $contact);
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
    if($Ho != '' && $Ten != '' && $NgaySinh != '' && $DiaChi != '' && $ViTriCongViec !=''){


class NhanVien{
    public string $Ho;
    public string $Ten;
    public $NgaySinh;
    public string $DiaChi;
    public string $ViTriCongViec;
    public array $mang = [];
    public function __construct($Ho ='',$Ten='',$NgaySinh=0,$DiaChi='',$ViTriCongViec=''){
        $this->Ho = $Ho;
        $this->Ten = $Ten;
        $this->NgaySinh = $NgaySinh;
        $this->DiaChi = $DiaChi;
        $this->ViTriCongViec = $ViTriCongViec;
    }
    public function setInfo(){
        // $mang1($this->Ho,$this->Ten,$this->NgaySinh,$this->DiaChi,$this->ViTriCongViec);

        // $this->mang[]=$mang1;
    }
    public function getInfo(){
        return $this->mang;
    }
    public function getHo(){
        return $this->Ho;
    }
    public function getTen(){
        return $this->Ten;
    }
    public function getNgaySinh(){
        return $this->NgaySinh;
    }
    public function getDiaChi(){
        return $this->DiaChi;
    }
    public function getViTriCongViec(){
        return $this->ViTriCongViec;
    }
}
$Ten = new NhanVien($Ho,$Ten,$NgaySinh,$DiaChi,$ViTriCongViec);
class QuanLy{
    private array $Employee;
    static array $ds;
    public function __construct()
    {
        $this->Employee=[];
        self::$ds=[];
    }
    public function add($employees)///thêm nhân sự
    {
        $this->Employee[]=$employees;
    }
    public function getEmployee(): array///in ra chi tiết nhân sự
    {
        return $this->Employee;
    }

    // public static $danhsach =[];

    // public function hienthi(){
        
    // }
    // public function them(){

    // }
    // public function xemchitiet(){

    // }
    // public function xoa(){

    // }

    // public function chinhsua(){

    // }
}
$Quanly1 = new Quanly();
$Quanly1->add($Ten);
// $Quanly1->add($Ten);'
// $employee = $Quanly1->getEmployee();
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
                <td>Thao tác</td>
            </tr>
            <?php
            $employee = loadRegistrations('dulieu.json');
            if ($employee != '') {
             foreach ($employee as $key => $registration){  ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?= $registration['ho']; ?></td>
                <td><?= $registration['ten'];  ?></td>
                <td><?= $registration['ngaysinh'];  ?></td>
                <td><?= $registration['diachi'];  ?></td>
                <td><?= $registration['vitricongviec']; ?></td>
                <td>
                    <a href="show.php?id=<?php echo $key; ?>">Show</a>
                    <a href="edit.php?id=<?php echo $key; ?>">Edit</a>
                    <a href="edit.php?id=<?php echo $key; ?>">Delete</a>
                </td>
            </tr>
        <?php } } ?>
        </table>
 
</body>
</html>

       