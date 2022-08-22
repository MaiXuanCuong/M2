<?php
//đưa model để các lớp sau sử dụng
include 'helper.php';
include 'models/Model.php';

//index.php?controller=Product&page=create
//Controller: Product + Page: create
//index.php?controller=User&page=create

$controller = ( isset($_REQUEST['controller']) ) ? $_REQUEST['controller'] : 'Product';
$page       = ( isset($_REQUEST['page']) ) ? $_REQUEST['page'] : 'index';

//gọi controller tùy thuộc vào url
switch ($controller) {
    case 'Product':
        include 'controllers/ProductController.php';
        $objController = new ProductController();
        break;
    case 'User':
        include 'controllers/UserController.php';
        $objController = new UserController();
        break;
    default:
        # code...
        break;
}

//gọi action tùy thuộc vào url

switch ($page) {
    case 'index':
        // vào trang danh sách
        $objController->index();
        break;
    case 'create':
        // vào trang them moi
        $objController->create();
        break;
    case 'edit':
        // vào trang chinh sua
        $objController->edit();
        break;
    case 'show':
        // vào trang chi tiết
        $objController->show();
        break;
    case 'destroy':
        // vào trang chi tiết
        $objController->destroy();
        break;
    default:
        # code...
        break;
}