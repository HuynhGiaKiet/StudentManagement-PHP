<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nhập Thông Tin Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Thông Tin Sinh Viên</h2>
        <form action="your_backend_endpoint" method="POST" class="space-y-4">
            <!-- Mã Sinh Viên -->
            <div>
                <label for="MaSV" class="block text-sm font-medium text-gray-700">Mã Sinh Viên</label>
                <input type="text" id="MaSV" name="MaSV" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            
            <!-- Họ và tên -->
            <div>
                <label for="HoTen" class="block text-sm font-medium text-gray-700">Họ và Tên</label>
                <input type="text" id="HoTen" name="HoTen" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            
            <!-- Ngày Sinh -->
            <div>
                <label for="NgaySinh" class="block text-sm font-medium text-gray-700">Ngày Sinh</label>
                <input type="date" id="NgaySinh" name="NgaySinh" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            
            <!-- Giới Tính -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Giới Tính</label>
                <div class="flex items-center space-x-4 mt-1">
                    <label class="flex items-center">
                        <input type="radio" name="GioiTinh" value="Nam" required class="text-blue-500 focus:ring-blue-500">
                        <span class="ml-2">Nam</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="GioiTinh" value="Nữ" required class="text-blue-500 focus:ring-blue-500">
                        <span class="ml-2">Nữ</span>
                    </label>
                </div>
            </div>
            
            <!-- Địa Chỉ -->
            <div>
                <label for="DiaChi" class="block text-sm font-medium text-gray-700">Địa Chỉ</label>
                <input type="text" id="DiaChi" name="DiaChi" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            
            <!-- Email -->
            <div>
                <label for="Email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="Email" name="Email" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            
            <!-- Số Điện Thoại -->
            <div>
                <label for="SDT" class="block text-sm font-medium text-gray-700">Số Điện Thoại</label>
                <input type="tel" id="SDT" name="SDT" required pattern="[0-9]{10}"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            
            <!-- Nút Gửi -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Gửi
                </button>
            </div>
        </form>
    </div>
</body>
</html>
