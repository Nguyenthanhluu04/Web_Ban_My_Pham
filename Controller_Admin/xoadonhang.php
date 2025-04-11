<?php
session_start();
$conn = mysqli_connect("localhost","root","","MYPHAM");
$sql = ' DELETE FROM  donhang  WHERE id ='.$_GET['iddh'];
$result = mysqli_query($conn,$sql);
header("Location:/View_Admin/adminDonHang.php");

?>