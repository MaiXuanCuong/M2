<?php 
include_once "./../database.php"; 
include_once "layout/header.php"; 
include_once "layout/sidebar.php";
?>
<div id="layoutSidenav_content">
    <div  class="container">
        <br>
        <div style="text-align:center">
            <b  style="font-size:200%; color:orange "><i>Thông Tin Mua Hàng</i></b>
        </div>
            <form>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <br><br><br>
                            <input type="text" class="form-control" placeholder="Nhập Họ Và Tên(*Bắt Buộc)" >
                            <div  class="form-text"><b><i>Họ Và Tên</b></i></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <br><br><br>
                            <input type="text" class="form-control" placeholder="Nhập Số Điện Thoại(*Bắt Buộc)" >
                            <div  class="form-text"><b><i>Số Điện Thoại</b></i></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <br><br><br>
                            <input type="text" class="form-control" placeholder="Nhập Tỉnh/Thành Phố(*Bắt Buộc)" >
                            <div  class="form-text"><b><i>Tỉnh/Thành Phố</b></i></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <br><br><br>
                            <input type="text" class="form-control" placeholder="Nhập Quận/Huyện(*Bắt Buộc)" >
                            <div  class="form-text"><b><i>Quận/Huyện</b></i></div>
                        </div>
                    </div>

                
                    <div class="col-4">
                        <div class="mb-3">
                            <br><br><br>
                            <input type="text" class="form-control" placeholder="Nhập Xã/Phường(*Bắt Buộc)" >
                            <div  class="form-text"><b><i>Xã/Phường</b></i></div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <br><br><br>
                            <input type="text" class="form-control" placeholder="Nhập Địa Chỉ Chi Tiết(*Bắt Buộc)" >
                            <div  class="form-text"><b><i>Nhập Địa Chỉ Chi Tiết</b></i></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <br><br><br>
                            <textarea class="form-control" rows="5" cols="3" placeholder="Nhập Ghi Chú/Yêu Cầu Giao Hàng(*Không Bắt Buộc).VD Giao Hàng Buối Chiều or Giao Hàng Vào Chủ Nhật..." ></textarea>
                            <div  class="form-text"><b><i>Nhập Ghi Chú/Yêu Cầu Giao Hàng</b></i></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><b><i>Đặt Hàng</b></i></button>
            </form>
        </div>
    </div>
    <?php
include 'layout/footer.php';
?>