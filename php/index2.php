<?php
// Địa chỉ IP của client (người dùng truy cập)
echo "Địa chỉ IP của bạn: " . $_SERVER['REMOTE_ADDR'] . "<br>";

// Tên server hoặc địa chỉ IP của server
echo "Tên server: " . $_SERVER['SERVER_NAME'] . "<br>";

// Đường dẫn file hiện tại từ thư mục gốc của server
echo "Đường dẫn file hiện tại: " . $_SERVER['PHP_SELF'] . "<br>";

// Phương thức yêu cầu HTTP (GET, POST, v.v.)
echo "Phương thức yêu cầu: " . $_SERVER['REQUEST_METHOD'] . "<br>";

// User Agent của client (trình duyệt và hệ điều hành của người dùng)
echo "Thông tin trình duyệt: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// Thời gian yêu cầu (timestamp)
echo "Thời gian yêu cầu: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . "<br>";

// Thông tin về giao thức HTTP được sử dụng
echo "Giao thức HTTP: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
?>
