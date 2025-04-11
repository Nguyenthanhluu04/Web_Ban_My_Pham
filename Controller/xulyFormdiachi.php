<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $yourAddress = $_POST['yourAddress'];

    // lưu thông tin vào session
    $_SESSION['address-infor'] = [
      "fullName" => $fullName,
      "phoneNumber" => $phoneNumber,
      "yourAddress" => $yourAddress,
    ];
    header("Location: /View/diachi.php");
    exit();
}
?>