<?php 
include_once "../database.php";
global $conn;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $err = [];
    $id = $_REQUEST['id'];

if (empty($email)) {
    $err['email'] = 'Bạn cần nhập email của mình';
}
if (empty($password)) {
    $err['password'] = 'Bạn cần nhập mật khẩu của mình';
}
if($id != ""){
    $sql = "SELECT * FROM customer WHERE id_customer = '$id'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->fetch();
}
if (empty($err)) {
    $sql = "SELECT * FROM customer WHERE gmail_customer = '$email'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->fetch();
    if ($err != '' && $row != '') {
    if($row->gmail_customer != $email ){
        $err['sai_tk'] = "Tài khoản không đúng";
            } else {
                $sql = "UPDATE customer SET pass ='$password' WHERE gmail_customer ='$email'";
                $conn->query($sql);
                header('location:login.php');    
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
        <title>Password Reset - SB Admin</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Khôi Phục Mật Khẩu</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn.</div>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" value="<?php echo $row->gmail_customer?>"/>
                                                <label for="inputEmail">Địa Chỉ Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputEmail" type="text" value="<?php echo $row->pass?>" placeholder="Nhập Lại Mật Khẩu" />
                                                <label for="inputEmail">Nhập Mật Khẩu Mới</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="../login/login.php">Trở Về Trang Đăng Nhập</a>
                                                <input class="btn btn-primary" type="submit" value="Đặt Lại Mật Khẩu"></input>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="./../login/register.php">Cần một tài khoản? Đăng ký!</a></div>
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
