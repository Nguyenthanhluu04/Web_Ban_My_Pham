<?php
session_start(); // Bắt đầu session

// Hủy toàn bộ session
// session_unset();
// session_destroy();

// // Tạo session ID mới để ngăn chặn session fixation
// session_regenerate_id(true);


// Kiểm tra xem người dùng đã đăng nhập chưa để hủy cookie
if (isset($_COOKIE['customer_id'])) {
    // Hủy cookie 'customer_id' và 'customer_name'
    setcookie('customer_id', '', time() - 3600, '/');
    setcookie('customer_name', '', time() - 3600, '/');
}


// Điều hướng về trang đăng nhập hoặc trang chính
header("Location: /index.php");
exit();
// if (isset($_GET['logout'])) {
//     // include("xulylogin.php");
//     // exit();
// }


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    
    <title>Document</title>
</head>
<body>
     <!-- Login form -->
 <!-- <form action="xulylogin.php" method="POST" class="auth_form__login" id="login">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                            <span class="auth-form__switch-btn" id="moveRegister">Đăng ký</span>
                            </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" name="inputuser" class="auth-form__input" placeholder="Nhập Email của bạn">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" name="inputpass" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                            </div>
                           
                        </div>
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-fogot ">Quên mật khẩu</a>
                            <span class="auth-form__help-seperate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp ?</a>
                        </div>
                        <div class="auth-form__controls">
                            <span class="btn btn--back" id="come-back">TRỞ LẠI </span>
                           
                            <button class="btn btn--primary " id="btn-login">ĐĂNG NHẬP </button>
                            
                            
                        </div>
                        </div>
                            <div class="auth-form__socials ">
                                <a href="https://www.facebook.com/manh.luu.127648?mibextid=LQQJ4d
                                " class=" auth-form__socials--facebook btn btn--size-s btn--with-icon">
                                    <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                                    <span class="auth-form__socials-title">
                                        Kết nối với Facebook
                                    </span>      
                                </a>
                                <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                                    <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                    <span class="auth-form__socials-title">
                                        Kết nối với Google
                                    </span>
                                </a>
                        </div>
                    </form> 
            </div>
        </div> 
</body>
</html>  -->
