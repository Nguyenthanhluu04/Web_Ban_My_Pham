<?php
session_start();
$customer_id = $_COOKIE['customer_id'];

$id=$_GET['item'];
if(isset($_SESSION['cart'][$customer_id][$id])){
$qty = $_SESSION['cart'][$customer_id][$id] + 1;
}else{
$qty=1;
}
$_SESSION['cart'][$customer_id][$id]=$qty;
header("location:/index.php");
exit();
?> 