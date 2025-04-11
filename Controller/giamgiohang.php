
<?php
session_start();
$customer_id = $_COOKIE['customer_id'];

$id=$_GET['item'];
if($_SESSION['cart'][$customer_id][$id] >1){
$qty = $_SESSION['cart'][$customer_id][$id] - 1;
}else{
$qty=1;
}
$_SESSION['cart'][$customer_id][$id]=$qty;
header("location:/View/giohang.php");
exit();
?> 