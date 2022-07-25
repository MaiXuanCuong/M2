<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style>
        span {
            color: red;
        }

        label {
            color: brown;

        }

        /* body {
            background-image: url(picture/img3.jpg);
            background-size: cover;
        } */
    </style>
</head>

<body>
    <?php
       $key = $_REQUEST['id'];
       $old_data =  file_get_contents('dulieu.json'); ///lay dlieu trong file json
       $old_data = json_decode($old_data); ///chuyen dlieu ve mang 
       if(  $_SERVER['REQUEST_METHOD'] == 'POST'){
        $Ho = $_POST['Ho'];
        $Ten = $_POST['Ten'];
        $NgaySinh = $_POST['NgaySinh'];
        $DiaChi = $_POST['DiaChi'];
        $ViTriCongViec = $_POST['ViTriCongViec'];
        $hasError = false;
        $contact = array(
            'ho' => $Ho,
            'ten' => $Ten,
            'ngaysinh' => $NgaySinh,
            'diachi' => $DiaChi,
            'vitricongviec' => $ViTriCongViec
        );
        
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
            $old_data[$key] = $contact;
            $old_data = json_encode($old_data);
            file_put_contents('dulieu.json', $old_data);
            header('Location:index.php');

            // saveDataJSON("dulieu.json", $Ho, $Ten, $NgaySinh, $DiaChi, $ViTriCongViec);
            // $Ho = null;
            // $Ten = null;
            // $NgaySinh = null;
            // $DiaChi = null;
            // $ViTriCongViec = null;
        }

    }
    
    ?>
    <form action=" " method="post">
    <fieldset>
        <table>
        <tr><td>Họ</td>
        <td><input type="text" name="Ho" placeholder="Nhập Họ" value="<?= $old_data[$key]->ho ?>"></td>
        <td><span class="error">* <?php ; ?></span><br></td>
        </tr>
        <tr><td>Tên</td>
        <td><input type="text" name="Ten" placeholder="Nhập Tên" value="<?= $old_data[$key]->ten ?>"></td>
        <td><span class="error">* <?php ; ?></span><br></td>
        </tr>
        <tr><td>Ngày Sinh</td>
        <td><input type="date" id="date1" name="NgaySinh" placeholder="Nhập Ngày sinh" value="<?= $old_data[$key]->ngaysinh ?>"></td>
        <td> <span class="error">* <?php ; ?></span><br> </td>
        </tr>
        <tr><td>Địa Chỉ</td>
        <td><input type="text" name="DiaChi" placeholder="Nhập Địa Chỉ" value="<?= $old_data[$key]->diachi ?>"></td>
        <td> <span class="error">* <?php; ?></span><br> </td>
        </tr>
        <tr><td>Vị Trí Công Việc</td>
        <td> <input type="text" name="ViTriCongViec" placeholder="Nhập Vị Trí Công Việc" value="<?= $old_data[$key]->vitricongviec ?>"></td>
        <td><span class="error">* <?php ; ?></span>
        </td>
        </tr>
        <tr>
        <td><input type="submit" name="submit" value="Thêm"></td>
        <td><a href="index.php">Cancel</a></td>
        <td></td>
        </tr>
    </fieldset>
    </table>
</body>

</html>