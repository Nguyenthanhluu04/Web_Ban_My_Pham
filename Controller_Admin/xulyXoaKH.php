<?php
session_start();
$conn = mysqli_connect("localhost","root","","MYPHAM");
$sql = ' DELETE FROM  USERS WHERE id ='.$_GET['idkh'];
$result = mysqli_query($conn,$sql);
header("Location:/View_Admin/adminKH.php");
?>