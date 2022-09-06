<?php 
include_once "../database.php";
global $conn;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];
    $err = [];

if (empty($email)) {
    $err['email'] = 'Bạn cần nhập email của mình';
}
if (empty($name)) {
    $err['name'] = 'Bạn cần nhập email của mình';
}
if (empty($password)) {
    $err['password'] = 'Bạn cần nhập mật khẩu của mình';
}


if (empty($err)) {
    $sql = "SELECT * FROM customer WHERE gmail_customer = '$email'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row = $stmt->fetch();
    if ($err != '' && $row != '') {
    if($row->gmail_customer != $email && $row->name_customer != $name){
        $err['sai_tk'] = "Tài khoản không đúng";
            } else {
                $sql = "UPDATE customer SET pass ='$password' ,`name_customer` = '$name' WHERE gmail_customer ='$email'";
                $conn->query($sql);
                header('location:login.php');    
            }
        }
    }
}


if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM customer WHERE id_customer = '$id'";
    $stmt1 = $conn->query($sql1);
    $stmt1->setFetchMode(PDO::FETCH_OBJ);
    $row1 = $stmt1->fetch();
    // print_r($row1);
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
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" value="<?php if(isset($_REQUEST['id'])){echo $row1->gmail_customer;}?>"/>
                                                <label for="inputEmail">Địa Chỉ Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="name" id="inputEmail" type="text" placeholder="Nhập Tên value="<?php if(isset($_REQUEST['id'])){echo $row1->name_customer;}?>"/>
                                                <label for="inputEmail">Tên</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputEmail" type="text" value="<?php  if(isset($_REQUEST['id'])){echo $row1->pass;}?>" placeholder="Nhập Lại Mật Khẩu" />
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
              
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
