<?php
// Include file controller để lấy dữ liệu
session_start();
require_once __DIR__ . '/../config/db.php';
include_once __DIR__ . '/../Controllers/listController.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-6xl bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Danh Sách Sinh Viên</h2>
            <button class="bg-green-500 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-green-600">
                Thêm Sinh Viên
            </button>
        </div>
        
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">STT</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Mã SV</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Họ và Tên</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Ngày Sinh</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Giới Tính</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Địa Chỉ</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Email</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">SĐT</th>
                    <th class="px-4 py-2 border-b font-semibold text-gray-700">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kiểm tra nếu có dữ liệu trong danh sách sinh viên
                if (!empty($listSinhVien)) {
                    $stt = 1; // Để đếm số thứ tự
                    foreach ($listSinhVien as $sinhvien) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='px-4 py-2 border-b text-center'>{$stt}</td>"; // STT tự tăng
                        echo "<td class='px-4 py-2 border-b text-center'>{$sinhvien['MaSV']}</td>"; // Mã SV
                        echo "<td class='px-4 py-2 border-b text-left'>{$sinhvien['HoTen']}</td>"; // Họ và Tên
                        echo "<td class='px-4 py-2 border-b text-center'>{$sinhvien['NgaySinh']}</td>"; // Ngày Sinh
                        echo "<td class='px-4 py-2 border-b text-center'>{$sinhvien['GioiTinh']}</td>"; // Giới Tính
                        echo "<td class='px-4 py-2 border-b text-left'>{$sinhvien['DiaChi']}</td>"; // Địa Chỉ
                        echo "<td class='px-4 py-2 border-b text-left'>{$sinhvien['Email']}</td>"; // Email
                        echo "<td class='px-4 py-2 border-b text-center'>{$sinhvien['SDT']}</td>"; // SĐT
                        echo "<td class='px-4 py-2 border-b text-center flex justify-center space-x-2'>";
                        echo "<button class='bg-yellow-500 text-white px-3 py-1 rounded-md text-sm hover:bg-yellow-600'>Edit</button>";
                        echo "<button class='bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600'>Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                        $stt++; // Tăng số thứ tự cho mỗi sinh viên
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center py-4'>Không có sinh viên nào.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
