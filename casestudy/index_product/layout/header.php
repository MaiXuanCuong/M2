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

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
/* @-webkit-keyframes my {
	 0% { color: blue; } 
	 50% { color: green;  } 
	 100% { color: green;  } 
 }
 @-moz-keyframes my { 
	 0% { color: red;  } 
	 50% { color: blue;  }
	 100% { color:blue;  } 
 }
 @-o-keyframes my { 
	 0% { color: black; } 
	 50% { color: red; } 
	 100% { color: red;  } 
 }
 @keyframes my { 
	 0% { color: black;  } 
	 50% { color: black;  }
	 100% { color: black;  } 
 } 
.test{
        font-size:20px;
        font-weight:bold;
  -webkit-animation: my 3000ms infinite;
  -moz-animation: my 3000ms infinite; 
  -o-animation: my 3000ms infinite; 
  animation: my 3000ms infinite;
} */
/* del{
    text-decoration: line-through;
}
        ul {
		padding: 0;
        margin: 1px 45px;
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
        width: 200px;
        height: 60px;
        display: block;

    } */
    /* ul li a:hover img {
        transform: scale(1.4);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        border-radius: 30px/30px;     
    } */
    /* .img_product:hover img{
        border-radius: 20px/20px;
        transform: scale(1.1);
        
    } */
    /* Di chuyen anh? len tren */
		.sanPham a:hover > img {
			margin: 1px auto 2px;
		}
        .themvaogio {
			z-index: 20;
			border: 1px solid #e3e7eb;
			border-radius: 50%;
			width: 1.5em;
			height: 1.5em;
			font-size: 1.5em;
			color: rgb(163, 161, 161);
			background: none;
			transition-duration: .2s;
			cursor: pointer;
		}
		.themvaogio:hover {
			color: black;
			background-color: #e6e6e6;
			box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
		}
		.themvaogio:active {
			box-shadow: none;
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
.policy {
    display: block;
    overflow: hidden;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding-top: 10px;
    margin: 0 10px 10px 10px;
    padding-bottom: 5px;
}

.policy div {
    display: block;
    overflow: hidden;
    padding: 5px 0 5px 5px;
    font-size: 14px;
    line-height: 20px;
    margin: 0 10px;
    border-bottom: 1px solid #f0f0f0;
    position: relative;
}

.policy div img {
    background: #fff;
    display: block;
    width: 20px;
    height: 17px;
    float: left;
    margin: 3px;
}

.policy div p {
    margin: 0 0 0 28px;
    color: #288ad6;
}

.policy div.last {
    border-bottom: 0px;
}
.policy div.last {
    border-bottom: 0px;
}
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav style="background-color: #00FFFF" class="sb-topnav navbar navbar-expand navbar-light">
    
        <a class="navbar-brand ps-3" href="../index_product/index.php"><img width="50px" height="55px" src="../product/image/zyro-image.png"><i>XC-SmartShop.vn</a>&emsp;&emsp;&emsp;<b>Liên Hệ:</i> <i class='fas fa-phone-volume'></i> <i>0843.442.357</i></b>
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
            
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
                    <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
              
                    <b style="color:black"><i><?php $name_user = $_SESSION['user'] ; echo $name_user; ?></b><img style="border-radius:50%" width="50px" height="50px" src="../product/image/<?php if($_SESSION['gioitinh'] == 'Nam'){ echo 'anh-dai-dien-dep.jpg';} else if($_SESSION['gioitinh'] == 'Nữ'){ echo 'avatar-dep-chat-nu.jpg';} else { echo 'hinh-anh-hacker-anonymous-dep-day-bi-an.jpeg';}?> "></i>
                </div>
                </form>
            <ol class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../login/password.php?id=<?php echo $_SESSION['id_user'];?>"><i>Cài Đặt Tài Khoản</i></a></li>
                        <li><a class="dropdown-item" href="../orders_detail/index1.php"><i>Lịch Sử Mua Hàng</i></a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../login/login.php?idss=2"><i>Đăng Xuất</i></a></li>
                    </ul>
                </li>
            </ol>
        </nav>


    

        