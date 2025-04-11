<?php
session_start();
ob_start();

$conn = mysqli_connect("localhost", "root", "", "mypham");
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['inputuser'];
    $password = $_POST['inputpass'];

    $conn = mysqli_connect("localhost", "root", "", "mypham");
    
    // Bảo mật trước SQL Injection sử dụng Prepared Statements
    $sql = "SELECT id ,tenKH FROM users WHERE email = ? AND pass = ?";
    $stmt = mysqli_prepare($conn, $sql); // chuẩn bị truy vấn
    mysqli_stmt_bind_param($stmt, 'ss', $user, $password);// gán các giấ trị vào câu truy vấn
    mysqli_stmt_execute($stmt); // thực thi câu lệnh truy vấn
    mysqli_stmt_store_result($stmt); // lưu kết quả truy vấn

    // Kiểm tra xem có kết quả trả về từ truy vấn hay không
    if (mysqli_stmt_num_rows($stmt) > 0) {
       
          // Lấy thông tin khách hàng từ kết quả truy vấn
          mysqli_stmt_bind_result($stmt, $customer_id, $customer_name);
          mysqli_stmt_fetch($stmt);
  
           // Lưu thông tin khách hàng vào cookie (với thời gian tồn tại là 1 giờ)
          setcookie('customer_id', $customer_id, time() + 3600 * 24, '/');
          setcookie('customer_name', $customer_name, time() + 3600 * 24, '/');

        //   // lưu thông tin khách hàng bằng session
        //     $_SESSION['customer_id'] = $customer_id;
        //     $_SESSION['customer_name'] = $customer_name;
        
          // chuyển về trang trước đó
        if (isset($_SERVER['HTTP_REFERER'])) {
            $previousPage = $_SERVER['HTTP_REFERER'];
            header('Location: ' . $previousPage);
        } else {
            // Nếu không có trang trước đó, chuyển hướng về một trang index
            header('Location: /index.php');
        }
    } else {  
        header('Location: error.html');
        

    }

    // Đóng Prepared Statement và kết nối CSDL
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

ob_end_flush();


?>