<?php 
!isset($_SESSION['user'])==true;
if(isset($_SESSION['user'])==false){
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
        <!-- <title>Admin</title> -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
@-webkit-keyframes my {
	 0% { color: #00FFFF; } 
	 50% { color: #fff;  } 
	 100% { color: #B8B8B8;  } 
 }
 @-moz-keyframes my { 
	 0% { color: #F8CD0A;  } 
	 50% { color: #fff;  }
	 100% { color: #E0FFFF;  } 
 }
 @-o-keyframes my { 
	 0% { color: #FF00FF; } 
	 50% { color: #0000FF; } 
	 100% { color: #FF0000;  } 
 }
 @keyframes my { 
	 0% { color: #00FF00;  } 
	 50% { color: #00FFFF;  }
	 100% { color: #FFFF00;  } 
 } 
.test {
        font-size:24px;
        font-weight:bold;
  -webkit-animation: my 3000ms infinite;
  -moz-animation: my 3000ms infinite; 
  -o-animation: my 3000ms infinite; 
  animation: my 3000ms infinite;
}
del{
    text-decoration: line-through;
}
        ul {
		padding: 0;
        margin: 1px 49px;
        list-style: none;
    }
    ul li {
        margin: 0px;
        display: inline-block;
    }
    ul li a {
        padding: 0px;
        display: inline-block; 
     
    }
    a{
        text-decoration: none;
       }
    ul li a img {
        width: 250px;
        height: 60px;
        display: block;

    }
    ul li a:hover img {
        transform: scale(1.4);
        box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        border-radius: 30px/30px;     
    }
    .img_product:hover img{
        border-radius: 20px/20px;
        transform: scale(1.2);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        
    }

    .button {
border-radius: 4px;
  background-color: #FF9500;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 5px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav style="background-color: #00FFFF" class="sb-topnav navbar navbar-expand navbar-light">
    
        <a class="navbar-brand ps-3" href="../index_product/index.php"><img width="50px" height="55px" src="../product/image/zyro-image.png">DienThoaiGM.vn</a><b>Liên Hệ: 0843.442.357</b>
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
                    <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
              
                    <b style="color:black"><?php $name_user = $_SESSION['user'] ; echo $name_user; ?></b><img style="border-radius:50%" width="50px" height="50px" src="../product/image/<?php if($_SESSION['gioitinh'] == 'Nam'){ echo 'anh-dai-dien-dep.jpg';} else if($_SESSION['gioitinh'] == 'Nữ'){ echo 'avatar-dep-chat-nu.jpg';}?> ">
                </div>
                </form>
            <ol class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../login/password.php?id=<?php echo $_SESSION['id_user'];?>">Cài Đặt Tài Khoản</a></li>
                        <li><a class="dropdown-item" href="../orders_detail/index1.php?id_user=<?php echo $_SESSION['id_user'];?>">Lịch Sử Mua Hàng</a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../login/login.php?idss=2">Đăng Xuất</a></li>
                    </ul>
                </li>
            </ol>
        </nav>


    

        