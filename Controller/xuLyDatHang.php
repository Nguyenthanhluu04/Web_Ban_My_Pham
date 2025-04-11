<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
  <title>Document</title>
</head>
<body>
<?php
session_start();
if(isset($_COOKIE['customer_id'])){  
    $customer_id = $_COOKIE['customer_id'];
    // var_dump($customer_id);
}
?>

<?php
if(isset($_POST['submit']) && empty($_SESSION['address-infor'])){
  ?>
  <form class="form__address" action="xulyFormdiachi.php" method="POST">
  <div class="form__address--overlay" id="overlay"></div>
      <div class="container__form-address">
          <div class="content__form-address">
              <h1 class="content__form-address--title"> Thêm địa chỉ</h1>
              <table align="center" class="content__form-address--table">
                  <tr>
                      <td>
                          <input type="text" name="fullName" placeholder="Nhập họ và tên" class="content_form-address--name" required>
                      </td>
                      <td>
                          <input type="text" name="phoneNumber" placeholder="Nhập số điện thoại " class="content_form-address--phoneNumber" required>
                      </td>
                  </tr>
                  <tr >    
                      <th colspan="2">
                          <input type="text" name="yourAddress" placeholder="Nhập địa chỉ của bạn" class="content_form-address--address" required>
                      </th>
                      <th></th>
                  </tr>
                
              </table>
              <div class="content__form-address--button">
                  <a href="index.php" id="address__back--btn" class=" btn content__form-address__button--return">Trở Lại</a>
                  <input type="submit"  class=" btn content__form-address__button--complete" value="Hoàn Thành"></input>
              </div>
          </div>
      </div>
  </form>
 
  <?php   
}
else if(isset($_POST['submit'])){
        $addressInfor = $_SESSION['address-infor'];
        $customerName =  $addressInfor['fullName'];
         $phoneNumber = $addressInfor['phoneNumber'];
         $yourAddress = $addressInfor['yourAddress'];
$productId = $_POST['productId'];
$productName = $_POST['title'];
$img = $_POST['img'];
$quantity = $_POST['quantity'];
$totalAmount = $_POST['totalAmount'];
$userId = $_POST['userId'];

$conn = mysqli_connect("localhost","root","","MYPHAM");
$sql = " INSERT INTO  donhang(customerName,phoneNumber,yourAddress,	img,productName,quantity,totalAmount,userId)
         VALUES ('$customerName','$phoneNumber','$yourAddress','$img','$productName','$quantity','$totalAmount','$userId')";
$result = mysqli_query($conn,$sql);
// xóa sản phẩm trong giỏ hàng khi đã mua hàng thành công
unset($_SESSION['cart'][$customer_id][$productId]);
header("Location: /View/donMua.php");
}
?>

</body>
</html>

