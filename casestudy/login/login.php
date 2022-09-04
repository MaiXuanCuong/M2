<?php 
include_once "../database.php";
if(isset($_REQUEST['idss'])){
    $idss = $_REQUEST['idss'];
    if($idss == 1){
        unset($_SESSION['admin']);
        unset($_SESSION['id_admin']);
        unset($_SESSION['gioitinh_ad']);

    } if($idss == 2){
        unset($_SESSION['user']);
        unset($_SESSION['id_user']);
        unset($_SESSION['gioitinh']);
    }
}



?>
<?php 
global $conn;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $taikhoan = $_REQUEST['taikhoan'] ;
    $matkhau = $_REQUEST['matkhau'] ;

$err = [];

if (empty($taikhoan)) {
    $err['tk'] = 'Bạn cần nhập email của mình';
}
if (empty($matkhau)) {
    $err['mk'] = 'Bạn cần nhập mật khẩu của mình';
}
if (empty($err)) {
    $sql = "SELECT * FROM customer WHERE gmail_customer = '$taikhoan'"; //and pass = '$matkhau' and `role` = 'Admin'
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->fetch();
    if ($err != '' && $row != '') {
    if($row->gmail_customer != $taikhoan ){
        $err['sai_tk'] = "Tài khoản không đúng";
    }
    if($row->pass != $matkhau ){
        $err['sai_mk'] = "Mật khẩu không đúng";
    }
    // if($row->role != 'Admin' ){
    //     $err['not_admin'] = "Chỉ có Admin mới có thể Đăng Nhập";
    // }
    if(isset($row)){

        if(empty($err) && $row->role == 'Admin'){
            $_SESSION['admin'] = $row->name_customer;
            $_SESSION['id_admin'] = $row->id_customer;
            $_SESSION['gioitinh_ad'] = $row->gender_customer;
            header("location:../index/index.php");}
        }
        if(empty($err) && $row->role == 'User'){
            $_SESSION['user'] = $row->name_customer;
            $_SESSION['id_user'] = $row->id_customer;
            $_SESSION['gioitinh'] = $row->gender_customer;
     
    
            header("location:../index_product/index.php");
        } else {
            $err['err'] = "Chỉ có Admin mới có thể Đăng Nhập";
        }
    }
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
        <title>Login - SB Admin</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng Nhập</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="taikhoan"  id="inputEmail" type="email" placeholder="name@example.com" />
                                                <span style="color:red"><?php if (isset($err['tk'])) {
                                                         echo $err['tk'];
                                                            } else if (isset($err['sai_tk'])){echo $err['sai_tk'];}   ?></span>
                                                <label for="inputEmail">Tài Khoản</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                              
                                                <input class="form-control" name="matkhau" id="inputPassword" type="password" placeholder="" /><br>

                                                <label for="inputPassword">Mật Khẩu</label>
                                                <span style="color:red"><?php if (isset($err['mk'])) {
                                                         echo $err['mk'];
                                                            } else if (isset($err['sai_mk'])){echo $err['sai_mk'];}  ?></span><br>
                                                            <!-- else if(isset($err['not_admin'])){
                                                                echo $err['not_admin'];
                                                            } -->
                                             
                                            </div>
                                            <div class="form-check mb-3">
                                            <input class="form-check-input"  id="inputRememberPassword" type="checkbox" placeholder=""/>
                                                <label class="form-check-label" for="inputRememberPassword">Nhớ Mật Khẩu</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Quên Mật Khẩu?</a>
                                                <input type="submit" class="btn btn-primary" value="Đăng Nhập">
                                                <!-- <a class="btn btn-primary" href="./../index/index.php">Đăng Nhập</a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../login/register.php">Cần một tài khoản? Đăng ký!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
               
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
