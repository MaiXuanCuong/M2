<?php
class ProductModel extends Model {
    // lấy tất cả
    
    public function getAll(){
        $sql = "SELECT * FROM categories";
        // fetchall
        $stmt = $this->conn->query($sql);

        // thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);// array => object

        // fetchall sẽ trả về dữ liệu nhiều hơn một kết quả
        $rows = $stmt->fetchAll();
         return $rows;
    }

    // lấy chi tiết
    public function  find($id){
        $sql = "SELECT * FROM books WHERE id_book=$id";
        $stmt = $this->conn->query($sql);

        // thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);// array => object

        // fetchall sẽ trả về dữ liệu nhiều hơn một kết quả
        $row = $stmt->fetch();
         return $row;
        print_r($row);
        die();
    }
    

    // thêm 
    public function save($datadata){
        // $TENHANG = $data['TENHANG'];
        // $MACONGTY = $data['MACONGTY'];

        // $MALOAIHANG = 1;
        // $SOLUONG    = 100;
        // $DONVITINH  = 'chiec';
        // $GIAHANG    = 10000;

        // $sql = "INSERT INTO `c10_mat_hang` 
        //         (`TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) 
        //         VALUES 
        //         ('$TENHANG', $MACONGTY, $MALOAIHANG, $SOLUONG, '$DONVITINH', $GIAHANG)";

        // // exec
        // $this->conn->exec($sql);
    }

    // sửa
    public function update($id,$data){
        //exec
        
    }

}



?>