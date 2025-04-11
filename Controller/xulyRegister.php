<?php
session_start();
ob_start();

$conn = mysqli_connect("localhost", "root", "", "mypham");
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['createName'];
    $user = $_POST['createEmail'];
    $pass = $_POST['createPass'];
    
    // kiểm tra tên khách hàng và email hoặc mật khẩu có trùng không
    $conn = mysqli_connect("localhost", "root", "", "mypham");
    $check_account = "SELECT * FROM users WHERE tenKH = ? OR (email = ? AND pass = ?)";
    $stmt = mysqli_prepare($conn, $check_account);
    mysqli_stmt_bind_param($stmt, 'sss', $name, $user, $pass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        die("Tên người dùng hoặc mật khẩu đã tồn tại. Vui lòng chọn tên người dùng hoặc mật khẩu khác.");
    }else{
        $create_account = " INSERT INTO users (tenKH, email, pass) VALUES (?, ?, ?)";
        $stmt1 = mysqli_prepare($conn,$create_account);
        mysqli_stmt_bind_param($stmt1, 'sss', $name, $user, $pass);
        mysqli_stmt_execute($stmt1);
        mysqli_stmt_store_result($stmt1);

        $sql = "SELECT id ,tenKH FROM users WHERE  email = ? AND pass = ?";
        $stmt2 = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt2, 'ss',  $user, $pass);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_store_result($stmt2);
        if (mysqli_stmt_num_rows($stmt2) > 0) {

            mysqli_stmt_bind_result($stmt2, $customer_id, $customer_name);
            mysqli_stmt_fetch($stmt2);
    
             // Lưu thông tin khách hàng vào cookie (với thời gian sống là 1 giờ)
            setcookie('customer_id', $customer_id, time() + 3600, '/');
            setcookie('customer_name', $customer_name, time() + 3600, '/');
            
            if (isset($_SERVER['HTTP_REFERER'])) {
                $previousPage = $_SERVER['HTTP_REFERER'];
                header('Location: ' . $previousPage);
            } else {
                // Nếu không có trang trước đó, chuyển hướng về một trang index
                header('Location: /index.php');
            }
        }

    }

      // Đóng Prepared Statement và kết nối CSDL
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}
ob_end_flush();

?>