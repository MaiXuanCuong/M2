<?php
// session_start();
    
!isset($_SESSION['admin'])==true;
if(isset($_SESSION['admin'])==false){
    header("location:../login/login.php");

} ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <a class="navbar-brand ps-3" href="./../index_product/index.php"><img width="50px" height="55px" src="../product/image/zyro-image.png"><i>XC-SmartShop</i></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
                    <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                    <i>Admin <b style="color:black"><?php echo $_SESSION['admin']; ?></i></b><img style="border-radius:50%" width="50px" height="50px" src="../product/image/<?php if($_SESSION['gioitinh_ad'] == 'Nam'){ echo 'anh-dai-dien-dep.jpg';} else if($_SESSION['gioitinh_ad'] == 'Nữ'){ echo 'avatar-dep-chat-nu.jpg';} else { echo 'hinh-anh-hacker-anonymous-dep-day-bi-an.jpeg';}?> "></i>

                </div>
            </form>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../login/password.php?id=<?php echo $_SESSION['id_admin'];?>"><i>Cài Đặt Tài Khoản</i></a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../login/login.php?idss=1"><i>Đăng Xuất</i></a></li>
                    </ul>
                </li>
            </ul>
        </nav>