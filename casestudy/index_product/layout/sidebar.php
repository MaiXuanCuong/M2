<?php 
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"><i>XC-SmartShop</i></div>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class='fa fa-home'></i></div>
                        Trang Chủ
                    </a>
                    <br>

                    <a class="nav-link collapsed" href="./../categories/index.php" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Danh Mục
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="cate.php?id=3">Apple</a>
                            <a class="nav-link" href="cate.php?id=4">Sam Sung</a>
                            <a class="nav-link" href="cate.php?id=1">Realme</a>
                            <a class="nav-link" href="cate.php?id=2">Xiaomi</a>
                            <a class="nav-link" href="#">Phụ Kiện</a>
                        </nav>

                    </div>
                    <br>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                        aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class='fa fa-shopping-cart'></i></i></div>
                        Giỏ Hàng
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="cart.php?id_user=<?php echo $_SESSION['id_user'];?>">Xem Giỏ Hàng</a>
                            <a class="nav-link" href="../orders_detail/index1.php?id_user=<?php echo $_SESSION['id_user'];?>">Xem Đơn Đã Đặt</a>
                    </div>

                    </a>
                </div>
            </div>
    </div>