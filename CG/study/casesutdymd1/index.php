<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="./stylemota.css">
</head>

<body>

    </head>

    <body>
        <div class="topnav">
            <span class="top1">
                <a class="active" onclick="ht_sp()">Trang Chủ</a>
            </span>

            <a onclick="add01()" ;dblclick="add01()">Quản Lý Sản phẩm</a>
            <div class="topnav-right" style="padding-left:16px">
                <a href="https://www.tiktok.com/@xc.2k2">Tik Tok</a>
                <a href="https://www.facebook.com/hihihihi.cuong/">FaceBook</a>
                <a href="./dangnhap.html">Đăng Nhập</a>

            </div>
        </div>
        </div>
        <form>
            <br><br><br><br><br><br><br>
            <div>
                <h1>Shop Điện Thoại Giá Rẻ</h1>
                <p>Chúng tôi là số 2 không ai là số 1</p>
                <textarea placeholder="Nhập mô tả sản phẩm" id="motasp" cols="204" rows="4"></textarea>
            </div>
            <table id="timk1" width="10000px">
                <tr>
                    <td width="250x">
                        <input type="search" placeholder="Kiểm tra sản phẩm" id="timkiem" />
                        <input id="timkiem1" type="button" value="Tìm kiếm" onclick="timkiem_sp();" />
                    </td>

                    <td width="980x">
                        <input type="text" placeholder="Nhập tên sản phẩm" id="newProduct" />
                        <input type="text" placeholder="Nhập giá sản phẩm" id="Gia" />

                        <input type="text" id="img" placeholder="Nhập link ảnh">
                        <input id="addd" type="button" value="Thêm Sản Phẩm" onclick="them_sp();" />
                    </td>
                    <td width="100x">
                        <input id="reset1" type="reset" value="Làm Mới" onclick="offmota()" />
                    </td>
                    <td>
                    </td>
                    <td width="100x">
                        <input id="delete1" type="button" value="Xóa Tất cả sản phẩm" onclick="xoaall();" />
                    </td>
                </tr>
            </table>
            <br>
            <table id="bangg" style="width: 1500px">
                <tr style="text-align: center">
                    <td width="135px">
                        <b id="soluong"></b>
                    </td>
                    <td style="text-align: center" width="100px"><b>Tên sản phẩm</b></td>
                    <td style="text-align: center" width="100px"><b>Giá</b></td>
                    <td style="text-align: center" width="600px">
                        <b>Mô tả</b>
                    <td style="text-align: center" width="140px">
                        <b>Ảnh</b>
                    </td>
                    </td>
                    <td style="text-align: center" width="115px">
                        <b>Chỉnh sửa</b>
                    </td>
                </tr>
            </table>
            <br />
            <!-- <hr /> -->
        </form>
        <span id="bang1"></span>
        <script src="./motajs.js"></script>
    </body>

</html>