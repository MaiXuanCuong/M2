<?php
    include_once 'models/UserModel.php';
    class UserController {
        //lay toan bo records
        public function index(){
            //khoi tao doi tuong model
            $UserModel = new UserModel();
            $rows = $UserModel->all();

            //goi view
            include_once 'views/users/index.php';
        }
        //sua record
        public function edit(){

            //goi view
            include_once 'views/users/edit.php';
        }

        public function add(){

            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                //ket noi model
                $UserModel = new UserModel();
                $UserModel->create($_REQUEST);

                //chuyen huong ve 
                header( "Location: UserController.php?action=index" );
            }

            //goi view
            include_once 'views/users/add.php';
        }
    }

    //khoi tao doi tuong
    $objController = new UserController();
    
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
        case 'edit':
            $objController->edit();
            break;
        case 'add':
            $objController->add();
            break;
        default:
            # code...
            break;
    }
    


   
    echo $action;

    
