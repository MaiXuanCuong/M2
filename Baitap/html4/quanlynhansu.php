<?php
session_start();
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
    public function getInfo(){
        return [
            "Ho" => $this->getHo(), 
            "Ten" => $this->getTen(),
            "NgaySinh"=>$this->getNgaySinh(),
            "DiaChi"=>$this->getDiaChi(),
            "ViTriCongViec"=>$this->getViTriCongViec()
        ];
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
class QuanLy{
    private  $Employees =[];
    public function __construct()
    {
        if (isset($_SESSION["Employees"])){
            $this->Employees = $_SESSION["Employees"];
        }
    }
    public function add($NhanVien)///thêm nhân sự
    {
        array_push($this->Employees, $NhanVien);
        $_SESSION["Employees"] = $this->Employees;
    }
    public function getEmployee(): array///in ra chi tiết nhân sự
    {
        return $this->Employees;
    }
    // public function hienthi($ds1){
    //     foreach( $ds1 as $key => $value){
    //         foreach($value as $value){
    //             echo $value."<br>";
    //         }
    //     }
    // }
    public function xemchitiet(){

    }
    public function xoa(){
        unset($_SESSION['Employees']);
    }
}
$Quanly1 = new Quanly();
if(  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $Ho = $_POST['Ho'];
    $Ten = $_POST['Ten'];
    $NgaySinh = $_POST['NgaySinh'];
    $DiaChi = $_POST['DiaChi'];
    $ViTriCongViec = $_POST['ViTriCongViec'];

    $NhanVien = new NhanVien($Ho,$Ten,$NgaySinh,$DiaChi,$ViTriCongViec);
    $Thongtinnhanvien =  $NhanVien->getInfo();
    
    $Quanly1->add($Thongtinnhanvien);

    // echo "<pre>";

    // print_r ($Quanly1->getEmployee());
}

$employees = $Quanly1->getEmployee();


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

    .error {
        color: #FF0000;
    }

    #table2 {
        text-align: center;
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
                <tr>
                    <td>Họ</td>
                    <td><input type="text" name="Ho" placeholder="Nhập Họ"></td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td><input type="text" name="Ten" placeholder="Nhập Tên"></td>
                </tr>
                <tr>
                    <td>Ngày Sinh</td>
                    <td><input type="date" id="date1" name="NgaySinh" placeholder="Nhập Ngày sinh"></td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td><input type="text" name="DiaChi" placeholder="Nhập Địa Chỉ"></td>
                </tr>
                <tr>
                    <td>Vị Trí Công Việc</td>
                    <td> <input type="text" name="ViTriCongViec" placeholder="Nhập Vị Trí Công Việc"></td>
                    </td>
                </tr>
                <tr>
                    <td></td>
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
            if ($employees != '') {
                // echo "<pre>";
                // print_r($employees);
             foreach ($employees as $key => $value){ ?>
        <tr>
            <td><?php echo $key +1 ?></td>
            <td><?php echo $value["Ho"];?></td>
            <td><?php echo $value["Ten"];?></td>
            <td><?php echo $value["NgaySinh"];?></td>
            <td><?php echo $value["DiaChi"];?></td>
            <td><?php echo $value["ViTriCongViec"];?></td>
            <td></td>
        </tr>
        <?php } } ?>
    </table>

</body>

</html>