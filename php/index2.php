<!-- so sanh su khac biet  -->
<?php
// // Địa chỉ IP của client (người dùng truy cập)
// echo "Địa chỉ IP của bạn: " . $_SERVER['REMOTE_ADDR'] . "<br>";

// // Tên server hoặc địa chỉ IP của server
// echo "Tên server: " . $_SERVER['SERVER_NAME'] . "<br>";

// // Đường dẫn file hiện tại từ thư mục gốc của server
// echo "Đường dẫn file hiện tại: " . $_SERVER['PHP_SELF'] . "<br>";

// // Phương thức yêu cầu HTTP (GET, POST, v.v.)
// echo "Phương thức yêu cầu: " . $_SERVER['REQUEST_METHOD'] . "<br>";

// // User Agent của client (trình duyệt và hệ điều hành của người dùng)
// echo "Thông tin trình duyệt: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// // Thời gian yêu cầu (timestamp)
// echo "Thời gian yêu cầu: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . "<br>";

// // Thông tin về giao thức HTTP được sử dụng
// echo "Giao thức HTTP: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";


// Biến toàn cục để lưu ngân sách tổng
// $totalBudget = 1000;

// // Hàm để thêm một khoản thu vào ngân sách
// function addIncome($amount) {
//     $GLOBALS['totalBudget'] += $amount;
//     echo "Thêm khoản thu: $amount. Ngân sách hiện tại: " . $GLOBALS['totalBudget'] . "<br>";
// }

// // Hàm để trừ một khoản chi từ ngân sách
// function addExpense($amount) {
//     if ($GLOBALS['totalBudget'] >= $amount) {
//         $GLOBALS['totalBudget'] -= $amount;
//         echo "Thêm khoản chi: $amount. Ngân sách hiện tại: " . $GLOBALS['totalBudget'] . "<br>";
//     } else {
// //         echo "Không đủ ngân sách cho khoản chi: $amount.<br>";
//     }
// }

// // Hàm để hiển thị ngân sách hiện tại
// function displayBudget() {
//     echo "Ngân sách hiện tại là: " . $GLOBALS['totalBudget'] . "<br>";
// }

// // Thêm và trừ các khoản thu, chi
// addIncome(500);        // Thêm khoản thu 500
// addExpense(300);       // Thêm khoản chi 300
// addExpense(1500);      // Thử trừ một khoản chi vượt ngân sách
// displayBudget();       // Hiển thị ngân sách hiện tại


?>


<!DOCTYPE html>
<html>
<script>
function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_ajax.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=Mary");
}
</script>
<body>

<button onclick="myfunction()">Click me!</button>

<h1 id="demo"></h1>

</body>
</html>