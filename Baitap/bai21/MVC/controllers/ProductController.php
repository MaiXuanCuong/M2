<?php
include_once "models/ProductModel.php";
class ProductController {
    // trang danh sách
    public function index() {
        // echo __METHOD__;
        $productModel = new ProductModel();
        $items = $productModel->getAll();

        // truyền xuống view
    include_once "views/products/index.php";

    }
    // trang chi tiết
    public function show() {
        $id = $_REQUEST['id'];
        $productModel = new ProductModel();
        $item = $productModel->find($id);
        // truyền xuống view
    include_once "views/products/show.php";
    }
     // trang thêm mới


     public function create() {
        echo __METHOD__;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name_category' => $_REQUEST['name_category'],
                'id_category' =>$_REQUEST['id_category ']
            ];
            $productModel = new ProductModel();
            $productModel->save($data);

            // chuyển hướng
            header('location: index.php?controller=Product&page=index');
        }

        include_once 'views/product/create.php';
     }

     // trang cập nhật

     public function edit() {
        echo __METHOD__;
     }

     // xóa
     public function  destroy() {
        echo __METHOD__;
     }


}




?>