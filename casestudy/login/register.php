<?php 
include_once '../database.php'; 
global $conn; ?>
<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ho = $_REQUEST['ho'];
    $ten = $_REQUEST['ten'] ;
    $name = $ho.' '.$ten ;
    $pass = $_REQUEST['pass'];
    $matkhau = $_REQUEST['matkhau'];
    $gmail = $_REQUEST['gmail'];
    $phone = null;
    $role = null;
    $gender = null;
    $address = null;
    $err = [];
    if(empty($ho)){
        $err['ho'] = 'Bạn không thể để trống mục này!';
    }
    if(empty($ten)){
        $err['ten'] = 'Bạn không thể để trống mục này!';
    }
    if(empty($gmail)){
        $err['gmail'] = 'Bạn không thể để trống mục này!';
    }
    if(empty($matkhau)){
        $err['pass'] = 'Bạn không thể để trống mục này!';
    }
    if(empty($matkhau)){
        $err['matkhau1'] = 'Bạn không thể để trống mục này!';
    }
    if($pass != $matkhau  ){
        $err['loi'] = 'Xác Thực Mật Khẩu Không đúng';
    }

    if(empty($err)){
        
    $sql = "INSERT INTO `customer` 
    (`name_customer`,`gender_customer`,`address_customer`,`phone_customer`,`gmail_customer`,`pass`,`role`) 
    VALUES 
    ('$name','$gender','$address','$phone','$gmail',$pass,'$role')";

    $conn->exec($sql);
    header('location:../login/login.php');
    }

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tạo tài khoản</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="ho" class="form-control" id="inputFirstName" type="text" placeholder="Nhập Họ" />
                                                        <span><?php if (isset($err['ho'])) {
                                                         echo $err['ho'];}?></span>
                                                        <label for="inputFirstName">Họ</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name="ten" class="form-control" id="inputLastName" type="text" placeholder="Nhập Tên" />
                                                        <span><?php if (isset($err['ten'])) {
                                                         echo $err['ten'];}?></span>
                                                        <label for="inputLastName">Tên</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="gmail" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <span><?php if (isset($err['gmail'])) {
                                                         echo $err['gmail'];}?></span>
                                                <label for="inputEmail">Địa Chỉ Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="pass" class="form-control" id="inputPassword" type="password" placeholder="Nhập Mật Khẩu" />
                                                        <span><?php if (isset($err['pass'])) {
                                                         echo $err['pass'];}?></span>
                                                        <label for="inputPassword">Mật Khẩu</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="matkhau" class="form-control" id="inputPasswordConfirm" type="password" placeholder="Nhập Lại Mật Khẩu" />
                                                        <span><?php if (isset($err['matkhau1'])) {
                                                         echo $err['matkhau1'];} else if(isset($err['loi'])){
                                                            echo $err['loi'];} ?></span>
                                                        <label for="inputPasswordConfirm">Xác nhận mật khẩu</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                   <input type="submit" class="btn btn-primary btn-block" value=" Tạo tài khoản"></></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../login/login.php">Bạn đã có tài khoản? Đi đến đăng nhập</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>