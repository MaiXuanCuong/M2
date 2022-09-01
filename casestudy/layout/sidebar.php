<?php 
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="../index/index.php">
                                <div class="sb-nav-link-icon"><i class='fa fa-home'></i></div>
                                <i>Trang Chủ</i>
                            </a>
                            <div class="sb-sidenav-menu-heading"><i>Danh Mục</i></div>
                            <a class="nav-link collapsed" href="./../categories/index.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                <i>Thể Loại</i>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../categories/index.php"><i>Loại Sản Phẩm</i></a>
                                    <!-- <a class="nav-link" href="layout-static.html">Loại Sản Phẩm</a> -->
                                    <a class="nav-link" href="../product/index.php"><i>Sản Phẩm</i></a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class='fas fa-user-friends'></i></div>
                                <i>Khách Hàng</i>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    <i>Tài Khoản</i>
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="./../login/login.php"><i>Đăng nhập</i></a>
                                            <a class="nav-link" href="./../login/register.php"><i>Tạo Tài Khoản</i></a>
                                            <!-- <a class="nav-link" href="./../login/password.php?id=<?php if($_SESSION['id_admin'] != ''){echo $_SESSION['id_admin'];} ?>">Xem Tài Khoản và Mật khẩu</a> -->
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    <i>Đơn Đặt</i>
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="./../order_product/index.php"><i>Xem Chi Tiết</i></a>
                                            <!-- <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a> -->
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"><i>Khác</i></div>
                            <a class="nav-link" href="https://www.facebook.com/hihihihi.cuong">
                                <div class="sb-nav-link-icon"><i class='fas fa-phone-alt'></i></div>
                                <i>Liên Hệ</i>
                            </a>
                            <!-- <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><i>Login by</i></div>
                        <i> Admin <?php echo $_SESSION['admin']?>
                        </i></div>
                </nav>
            </div>
