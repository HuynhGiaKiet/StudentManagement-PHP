<?php
require_once __DIR__ . '/../config/db.php';

// Câu truy vấn để lấy dữ liệu từ bảng sinhvien
$sql = "SELECT MaSV, HoTen, NgaySinh, GioiTinh, DiaChi, Email, SDT FROM sinhvien";
$result = $conn->query($sql);

// Khởi tạo một mảng để lưu danh sách sinh viên
$listSinhVien = [];

if ($result->num_rows > 0) {
    // Duyệt qua các bản ghi và lưu vào mảng $listSinhVien
    while($row = $result->fetch_assoc()) {
        $listSinhVien[] = $row;
    }
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>