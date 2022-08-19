<?php
    include_once 'db.php';
    class UserModel {
        //lay tat ca
        public function all(){
            global $conn;
            $sql = "SELECT * FROM categories";
            $stmt = $conn->query($sql);
            //Thiết lập kiểu dữ liệu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            //fetchALL se tra ve du lieu nhieu hon 1 ket qua
            $rows = $stmt->fetchAll();

            return $rows;
        }

        //lay 1 ket qua theo id
        public function find($id){
            global $conn;
            $sql = "SELECT * FROM categories WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $row = $stmt->fetch();
            return $row;
        }

        //them moi du lieu
        public function create( $data ){
            global $conn;
            $TENCONGTY = $data['TENCONGTY'];
            $TENGIAODICH = $data['TENGIAODICH'];
            $EMAIL = $data['EMAIL'];

            $sql = " INSERT INTO categories ( `name_category`) VALUES 
            ( '$TENCONGTY','$TENGIAODICH','$EMAIL' )
            ";

            $conn->exec($sql);
        }

        //cap nhat du lieu
        public function update(){

        }

        //xoa 1 du lieu
        public function destroy(){

        }
    }