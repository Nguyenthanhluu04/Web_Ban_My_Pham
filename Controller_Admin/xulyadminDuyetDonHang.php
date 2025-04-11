<?php
session_start();
$orderId = $_POST['orderId'];
$customerName = $_POST['customerName'];
$productName = $_POST['productName'];
$img = $_POST['img'];
$quantity = $_POST['quantity'];
$totalAmount = $_POST['totalAmount']; 
$action = $_POST['action'];
$statuss = $_POST['status'];
$UserId = $_POST['userId'];
$conn = mysqli_connect("localhost","root","","MYPHAM");
$sql = " INSERT INTO  xacnhandonhang(customerName,img,productName,quantity,totalAmount,actions,statuss,userId)
     VALUES ('$customerName','$img','$productName','$quantity','$totalAmount','$action','$statuss','$UserId')";
$result = mysqli_query($conn,$sql);

// xóa đơn hàng khi duyệt đơn hàng thành công (Theo Id)
$conn2 = mysqli_connect("localhost","root","","MYPHAM");
$sql2 = ' DELETE FROM  donhang  WHERE id ='.$orderId;
$result = mysqli_query($conn2,$sql2);

header("Location: /View_Admin/adminDuyetDonHang.php");

?>