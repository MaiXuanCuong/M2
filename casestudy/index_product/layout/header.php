<?php 
// include_once '../database.php';
session_start();
    
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
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            @-webkit-keyframes my {
  0% { color: #F8CD0A; } 
  50% { color: #fff;  } 
  100% { color: #F8CD0A;  } 
}
@-moz-keyframes my { 
  0% { color: #F8CD0A;  } 
  50% { color: #fff;  }
  100% { color: #F8CD0A;  } 
}
@-o-keyframes my { 
  0% { color: #F8CD0A; } 
  50% { color: #fff; } 
  100% { color: #F8CD0A;  } 
}
@keyframes my { 
  0% { color: #F8CD0A;  } 
  50% { color: #fff;  }
  100% { color: #F8CD0A;  } 
} 
.test {
        font-size:24px;
        font-weight:bold;
  -webkit-animation: my 700ms infinite;
  -moz-animation: my 700ms infinite; 
  -o-animation: my 700ms infinite; 
  animation: my 700ms infinite;
}
del{
    text-decoration: line-through;
}
/* 
#wrapper{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        h1{
            flex-basis: 100%;
            text-align: center;
        }
        .box{
            width: 400px;
            height: 600px;
            background: chocolate;
            overflow: hidden;
            box-shadow: 2px 2px 5px #888;
            position: relative;
        }
        .box img{
            max-width: 100%;
            position: absolute;
            bottom: -1235px;
            transition: bottom 3.5s ease-in-out;
           
        }
        .box:hover img{
            bottom: 0px;
            cursor: pointer;
        }
        */
        ul {
		padding: 0;
        margin: 50px 20px;
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
        transform: scale(1.2);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    .img_product:hover img{
        transform: scale(1.2);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        
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
                    <b style="color:black"><?php echo $_SESSION['user'] ?></b><img style="border-radius:50%" width="50px" height="50px" src="../product/image/<?php if($_SESSION['gioitinh'] == 'Nam'){ echo 'anh-dai-dien-dep.jpg';} else if($_SESSION['gioitinh'] == 'Nữ'){ echo 'avatar-dep-chat-nu.jpg';}?> ">
                </div>
                </form>
            <ol class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../login/password.php?id=<?php echo $_SESSION['id_user'];?>">Cài Đặt Tài Khoản</a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../login/login.php?idss=2">Đăng Xuất</a></li>
                    </ul>
                </li>
            </ol>
        </nav>


    

        