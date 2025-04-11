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
    <title>Sửa sản phẩm</title>
</head>
<body>
    <?php
    $id = $_GET['idkh'];
    ?>
    <div class="update__app">
        <div class="update__app--container">
                <form  class="form__addProduct" action="Suasanpham.php" method="POST">
                <div class="form__update--container">
                    <h3 class="form__update--container--title"> Chỉnh Sửa Sản Phẩm</h3>
                        <div class="form__update--container__form"> 
                        <div class="form__update--container__group">
                        <input type="hidden" name="updateId" value="<?php echo $id; ?>">
                            <input type="text" name="updateTitle" class="form__update--container__input" placeholder="Thêm tên sản phẩm">
                            <input type="text" name="updateImg" class="form__update--container__input" placeholder="Thêm hình ảnh sản ">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="updatePriceOld" class="form__update--container__input" placeholder="Thêm giá cũ ">
                            <input type="text"name="updatePriceNew" class="form__update--container__input" placeholder="Thêm giá mới ">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="updatesold" class="form__update--container__input" placeholder="Thêm số lượng đã bán">
                            <input type="text"name="updateBrand" class="form__update--container__input" placeholder="Thêm thương hiệu">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="updateNation" class="form__update--container__input" placeholder="Thêm quốc gia">
                            <input type="text" name="updateEvaluate" class="form__update--container__input" placeholder="Thêm đánh giá">
                        </div>
                        <div class="form__update--container__group">
                            <input type="text" name="updateDiscount" class="form__update--container__input" placeholder="Thêm mã giảm giá">
                            <input type="text"name="updateSize" class="form__update--container__input" placeholder="Thêm kích cỡ của sản phẩm">
                        </div>
                         <div class="form__update--container__group">
                            <input type="text" name="updateAvailable" class="form__update--container__input" placeholder="Thêm sản phẩm có sẵn">
                            <input type="text"name="updateTypeProduct" class="form__update--container__input" placeholder="Thêm loại sản phẩm">
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
    $id = $_POST['updateId'];
    $title = $_POST['updateTitle'];
    $Img = $_POST['updateImg'];
    $PriceOld = $_POST['updatePriceOld'];
    $PriceNew = $_POST['updatePriceNew'];
    $sold = $_POST['updatesold'];
    $Brand = $_POST['updateBrand'];
    $Nation = $_POST['updateNation'];
    $Evaluate = $_POST['updateEvaluate'];
    $Discount = $_POST['updateDiscount'];
    $Size = $_POST['updateSize'];
    $Available = $_POST['updateAvailable'];
    $TypeProduct = $_POST['updateTypeProduct'];

    $conn = mysqli_connect("localhost","root","","MYPHAM");
   $sql = " UPDATE  SANPHAM SET title ='$title',urlImg ='$Img',priceOld ='$PriceOld',priceNew = '$PriceNew' ,sold ='$sold',brand ='$Brand',nation ='$Nation',evaluate ='$Evaluate',discount =$Discount,
   size ='$Size',available ='$Available',iddm =$TypeProduct WHERE id =$id";
  $result = mysqli_query($conn,$sql);
  header("Location:/View_Admin/danhsachsanpham.php");
}
?>
