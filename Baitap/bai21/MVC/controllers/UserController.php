<?php
include_once "models/ProductModel.php";
class UserController {
    // trang  danh sách

    public function index() {
        echo __METHOD__;
        $productModel = new ProductModel();
        $items = $productModel->getAll();

        // truyền xuống view
        include_once "views/products/index.php";
    }

    // trang chi tiết

    public function show(){
        echo __METHOD__;
    }

    // trang  thêm mới
    public function create(){
        echo __METHOD__;
    }

    // trang cập nhật

    public function edit(){
        echo __METHOD__;
    }

    // xóa
     public function destroy(){
        echo __METHOD__;
     }

}






?>