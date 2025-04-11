<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idsp = $_POST['idsp'];
    $tenKH = $_POST['ten'];
    $ngayBL = $_POST['date'];
    $noidung = $_POST['noidung'];
     
    echo $noidung;
      $conn = mysqli_connect("localhost","root","","MYPHAM");
        $sql = "INSERT INTO binhluan (idsp,tenKH, noidung,ngayBL) VALUES ( $idsp,' $tenKH', '$noidung', '$ngayBL')";
        $kq = mysqli_query($conn, $sql);

    ?>
</body>
</html>