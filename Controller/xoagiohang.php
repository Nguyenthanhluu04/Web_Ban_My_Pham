<?php
session_start();
$customer_id = $_COOKIE['customer_id'];
$id=$_GET['productid'];
var_dump($id);
if($id == 0)
{
unset($_SESSION['cart'][$customer_id]);
}
else
{
unset($_SESSION['cart'][$customer_id][$id]);
}
header("location:/View/giohang.php");
exit();
?>