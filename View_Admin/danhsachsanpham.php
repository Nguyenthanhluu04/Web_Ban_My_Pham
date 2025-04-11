<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
   <link rel="stylesheet" href="/assets/css/main.css">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>BEUTYBLEND</title>

	<link href="/assets/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<!-- sidebar admin -->
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">ADMIN-SHOP</span>
        </a>
				<ul class="sidebar-nav">
					
					<li class="sidebar-item active">
						<a class="sidebar-link" href="/View_Admin/admin.php">
						  <i class="align-middle" data-feather="home"></i> <span class="align-middle">Trang chủ</span>
						</a>
					</li>
					<li class="sidebar-header">
						Quản lý tài khoảng 
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/View_Admin/adminKH.php">
						<i class="align-middle" data-feather="user"></i> <span class="align-middle">Khách Hàng</span>
						</a>
					</li>
					
					<li class="sidebar-header">
						Quảng lý sản phẩm
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/View_Admin/themsanpham.php">
						<i class="align-middle" data-feather="arrow-up-circle"></i> <span class="align-middle">Thêm sản Phẩm</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
						<i class="align-middle" data-feather="list"></i> <span class="align-middle">Danh sách sản phẩm</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/View_Admin/khosanpham.php">
						<i class="align-middle" data-feather="database"></i> <span class="align-middle">Kho sản phẩm</span>
						</a>
					</li>
			

					<li class="sidebar-header">
						Quảng lý đơn hàng
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/View_Admin/adminDonHang.php">
                      <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Đơn hàng Chưa Xử Lý</span>
                     </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/View_Admin/adminDuyetDonHang.php">
                      <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Đơn hàng Đã Xác Nhận</span>
                     </a>
					</li>

					
				</ul>

		
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
				  <i class=" sidebar-toggle--icon hamburger align-self-center"></i>
				</a>
					<div class="navbar-collapse collapse">
						 <div class="navbar-nav navbar-align">
                            <?php
							if(isset($_COOKIE['admin_id'] , $_COOKIE['admin_name'])){
								$admin_name = $_COOKIE['admin_name'];
							}
							?>
								<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="data:image/png;base64,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" 
								class="avatar img-fluid rounded me-1" alt="avatar" /> <span class="text-dark"><?php echo $admin_name?></span>
								</a>
                             <?php

							 ?>
								<!-- tài khoảng admin -->
								<div class="dropdown-menu dropdown-menu-end">
									<a class="dropdown-item" href="/View_Admin/RegisterAdmin.html"><i class="align-middle me-1" data-feather="user"></i> Đăng Ký</a>
									<a class="dropdown-item" href="/View_Admin/admin.php"><i class="align-middle me-1" data-feather="pie-chart"></i> phân tích</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/Controller_Admin/xulylogoutAdmin.php">
										<i  class="align-middle" data-feather="power"></i>
										Log out
									</a>
								</div>
						 </div>
					</div>
			</nav>

				<div class="customer__container">
					<h1 class="customer__title">Quản lý sản phẩm của shop </h1>
					<table align="center" border="1px" cellspacing="0px" class="customer__table">
				
					<tr class="customer__table--navbar">
					<td class="customer__table--item" >Id</td>
					<td class="customer__table--item" >Tên Sản Phẩm</td>
					<td class="customer__table--item" >Hình Ảnh</td>
					<td class="customer__table--item" >Gái Cũ</td>
					<td class="customer__table--item" >Giá Mới</td>
                    <td class="customer__table--item" >Thương Hiệu</td>
					<td class="customer__table--item" >Quốc Gia</td>
					<td class="customer__table--item" >Giảm Giá</td>
					<td class="customer__table--item" >Kích cỡ</td>
					<td class="customer__table--item" >Hành Động</td>

					</tr>
					<?php
					 $conn = mysqli_connect("localhost","root","","MYPHAM");
					 $sql = " SELECT * FROM  SANPHAM ";
					 $result = mysqli_query($conn,$sql);
					 while($row = mysqli_fetch_array($result)){
					?>	
					<tr class="customer__table--body">
						<td  class="customer__table--body-item" ><?php echo $row['id']?></td>
						<td  class="customer__table--body-item" ><?php echo $row['title']?></td>
						<td  class=" customer__table--body-item">
                            <div class="customer__table--body-item__img" style="background-image: 
                            url(<?php echo $row['urlImg']?>);" ></div>
                        </td>
						<td  class="customer__table--body-item" ><?php echo $row['priceOld']?></td>
                        <td  class="customer__table--body-item" ><?php echo $row['priceNew']?></td>
						<td  class="customer__table--body-item" ><?php echo $row['brand']?></td>
						<td  class="customer__table--body-item" ><?php echo $row['nation']?></td>
						<td  class="customer__table--body-item" ><?php echo $row['discount']?></td>
						<td  class="customer__table--body-item" ><?php echo $row['size']?></td>
						 <td  class="customer__table--body-item" > 
							<!-- <a  href="themsanpham.php" class="customer__table--body-btn-cre" >Thêm</a> -->
						   <a href="/Controller_Admin/Suasanpham.php?idkh=<?php echo $row['id']?>"   class="customer__table--body-btn-upd" >Sửa</a>
							<a href="/Controller_Admin/Xoasanpham.php?idkh=<?php echo $row['id']?>" class="customer__table--body-btn-del">Xóa</a>
						 </td>
					</tr>
                     <?php
					 }
					 ?>
					</table>
				</div>
		</div>
	</div>

	<script src="/assets/javascript/app.js"></script>

</body>
</html>