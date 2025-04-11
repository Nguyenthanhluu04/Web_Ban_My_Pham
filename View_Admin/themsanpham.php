<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">
	<link href="/assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/base.css">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <div class="update__app">
        <div class="update__app--container">
                <form  class="form__addProduct" action="themsanpham.php" method="POST">
                <div class="form__update--container">
                    <h3 class="form__update--container--title">Thêm Sản Phẩm</h3>
                        <div class="form__update--container__form"> 
                        <div class="form__update--container__group">
                            <input type="text" name="addTitle" class="form__update--container__input" placeholder="Thêm tên sản phẩm">
                            <input type="text" name="addImg" class="form__update--container__input" placeholder="Thêm hình ảnh sản ">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="addPriceOld" class="form__update--container__input" placeholder="Thêm giá cũ ">
                            <input type="text"name="addPriceNew" class="form__update--container__input" placeholder="Thêm giá mới ">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="addsold" class="form__update--container__input" placeholder="Thêm số lượng đã bán">
                            <input type="text"name="addBrand" class="form__update--container__input" placeholder="Thêm thương hiệu">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="addNation" class="form__update--container__input" placeholder="Thêm quốc gia">
                            <input type="text" name="addEvaluate" class="form__update--container__input" placeholder="Thêm đánh giá">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="addDiscount" class="form__update--container__input" placeholder="Thêm mã giảm giá">
                            <input type="text"name="addSize" class="form__update--container__input" placeholder="Thêm kích cỡ của sản phẩm">
                        </div>
                         <div class="form__update--container__group">
                            <input type="text" name="addAvailable" class="form__update--container__input" placeholder="Thêm sản phẩm có sẵn">
                            <input type="text"name="addTypeProduct" class="form__update--container__input" placeholder="Thêm loại sản phẩm">
                        </div>
                        <input type="submit" name="submit" value="Lưu" class="form__addProduct--btn">
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $title = $_POST['addTitle'];
    $Img = $_POST['addImg'];
    $PriceOld = $_POST['addPriceOld'];
    $PriceNew = $_POST['addPriceNew'];
    $sold = $_POST['addsold'];
    $Brand = $_POST['addBrand'];
    $Nation = $_POST['addNation'];
    $Evaluate = $_POST['addEvaluate'];
    $Discount = $_POST['addDiscount'];
    $Size = $_POST['addSize'];
    $Available = $_POST['addAvailable'];
    $TypeProduct = $_POST['addTypeProduct'];

    $conn = mysqli_connect("localhost","root","","MYPHAM");
   $sql = " INSERT INTO  SANPHAM(title,urlImg,priceOld,priceNew,sold,brand,nation,evaluate,discount,size,available,iddm)
            VALUES ('$title','$Img','$PriceOld','$PriceNew','$sold','$Brand','$Nation','$Evaluate',$Discount,'$Size','$Available',$TypeProduct)";
  $result = mysqli_query($conn,$sql);
  header("Location:/View_Admin/danhsachsanpham.php");
}
?>
