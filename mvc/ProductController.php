<?php
    class ProductController {
        //lay toan bo records
        public function index(){

            //goi view
            include_once 'views/products/index.php';
        }

        //sua record
        public function edit(){
            //goi view
            include_once 'views/products/edit.php';
        }

        public function add(){
            //goi view
            include_once 'views/products/add.php';
        }

        public function delete(){
            
        }
    }

    //khoi tao doi tuong
    $objController = new ProductController();
    
    //lay action tu url
    if( isset($_REQUEST['action']) ){
        $action = $_REQUEST['action'];
    }else{
        $action = 'index';
    }

    switch ($action) {
        case 'index':
            $objController->index();
            break;
        case 'add':
            $objController->add();
            break;
        case 'edit':
            $objController->edit();
            break;
        case 'delete':
            $objController->delete();
            break;
        default:
            # code...
            break;
    }