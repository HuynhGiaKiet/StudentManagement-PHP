<?php 
class GiaoVienController {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    //Hàm hiển thị danh sách phòng
    public function DanhSach() {
        $sql = "SELECT * FROM giaovien";
        $result = $this->conn->query($sql);
    
        return $result;
    }
}
?>