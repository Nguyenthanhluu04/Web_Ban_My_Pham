<?php
// session_start();
// ob_start();
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $user = $_POST['inputuser'];
//     $password = $_POST['inputpass'];

//     $conn = mysqli_connect("localhost","root","","banhang");
//     $sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";        
//     $result = mysqli_query($conn,$sql);

//     while($row = mysqli_fetch_array($result)){
//     if($user == $row['user'] && $password == $row['password']){
//         echo ' Đăng nhập thành công !';
//         header("Location: test.php");
//     }else{
//         header("Location: index.php");
//     }
//     }
// }
    

// ob_end_flush();


session_start();
ob_start();

$conn = mysqli_connect("localhost", "root", "", "banhang");
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['inputuser'];
    $password = $_POST['inputpass'];

    $conn = mysqli_connect("localhost", "root", "", "banhang");
    
    // Bảo mật trước SQL Injection sử dụng Prepared Statements
    $sql = "SELECT * FROM users WHERE user = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $user, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Kiểm tra xem có kết quả trả về từ truy vấn hay không
    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo ' Đăng nhập thành công !';
        header("Location: test.php");
    } else {
        header("Location: index.html");
        echo 'Đăng nhập thất bại';
    }

    // Đóng Prepared Statement và kết nối CSDL
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

ob_end_flush();


?>