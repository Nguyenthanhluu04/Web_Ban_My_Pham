<?php
session_start();
$customer_id = $_COOKIE['customer_id'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TL-Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/grid.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<div class="app">
    <header class="header">
    <div class="grid">
      <nav class="header__navbar">
       <ul class="header__navbar-list">
        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item-separate">
            Vào cửa hàng trong ứng dụng TL-shop
            <!-- QR code -->
            <div class="header__qr">
                <a href=""> <img src="/assets/img/img-QR.png" alt="QR Code" class="header__qr-img"></a>
               <div class="header__qr-apps">
                <a class="header__qr-link" href=""> <img src="/assets/img/img-ggplay.png" alt="Google play" class="header__qr-download-img"></a>
                <a class="header__qr-link" href=""> <img src="/assets/img/ing-appstore.png" alt="App store" class="header__qr-download-img"></a>
            </div>
            </div>
        </li>
        <li class="header__navbar-item">
           <span class="header__navbar-item-title--no-pointer"> Kết Nối</span>
           <a href="https://www.facebook.com/manh.luu.127648?mibextid=LQQJ4d
           " class="header__navbar-icon-link" >
            <i class=" header__navbar-icon fa-brands fa-facebook"></i>
           </a>
          
           <a href="" class="header__navbar-icon-link" >
            <i class=" header__navbar-icon fa-brands fa-instagram"></i>
           </a>
        </li>
     </ul>
      <ul class="header__navbar-list">
        <li class=" header__navbar-icon header__navbar-item header__navbar-item--has-notify">
          
            <a href="" class="header__navbar-item-link">
                <i class=" header__navbar-icon far fa-bell"></i>
                Thông Báo
            </a>
            <!-- header-notify -->
            <div class="header__notify">
                <header class="header__notify-header">
                    <h3>Thông Báo Mới Nhận</h3>
                </header>
                <ul class="header__notify-list">
                    <li class="header__notify-item">
                        <a href="" class="header__notify-link">
                          <img src="data:image/jpeg;base64,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" alt="Ảnh mỹ phẩm Ohui chính hãng" class="header__notify-img">
                          <div class="header__notify-info">
                            <span class="header__notify-name">Ohui giảm giá cực sốc toàn bộ mỹ phẩm chỉ còn 599.000 vnd</span>
                            <span class="header__notify-descriotion">Chương trình khuyến mãi chỉ diễn ra từ ngày 20-4 cho đến 30-4</span>

                          </div>
                        </a>
                    </li>
                    <li class="header__notify-item">
                        <a href="" class="header__notify-link">
                          <img src="https://cdn.vuahanghieu.com/unsafe/0x0/left/top/smart/filters:quality(90)/https://cdn.vuahanghieu.com/unsafe/823x0/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/news/2020/07/bo-my-pham-ohui-gia-bao-nhieu-top-10-set-ohui-ban-chay-nhat-tren-thi-truong-14072020151956.jpg" alt="Ảnh mỹ phẩm Ohui chính hãng" class="header__notify-img">
                          <div class="header__notify-info">
                            <span class="header__notify-name">SALE SỐC! 70% bộ dưỡng Ohui The First tái tạo trẻ hóa da </span>
                            <span class="header__notify-descriotion"> giá chỉ còn 375.000vnd(giá gốc 1.250.000nvd)</span>

                          </div>
                        </a>
                    </li>
                    <li class="header__notify-item">
                        <a href="" class="header__notify-link">
                          <img src="https://i0.wp.com/shopmyphamohuiwhoo.com/images/shopmyphamohuiwhoocom/2019/03/%E1%BA%A3nh-1-8.png" alt="Ảnh mỹ phẩm Ohui chính hãng" class="header__notify-img">
                          <div class="header__notify-info">
                            <span class="header__notify-name"> Ohui chính thức ra mặt mộ dưỡng da</span>
                            <span class="header__notify-descriotion">khuyến mãi chỉ còn 50%</span>

                          </div>
                        </a>
                    </li>
                </ul>
                <footer class="header__notify-footer ">
                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                </footer>

            </div>
        </li>
        <li class=" header__navbar-icon header__navbar-item">                  
            <a href="" class="header__navbar-item-link">      
                <i class=" header__navbar-icon fa-solid fa-circle-question"></i>
                Trợ Giúp
            </a>
        </li>
        <div class="modal" id="modal_1" >
            <div class="modal__overlay" id="overlay"></div>
                <div class="modal__body"> 
                    <!-- Register form -->
                    <div class="auth-form__register" id="register" action="xulylogin.php" method="POST">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                            <span class="auth-form__switch-btn" id="moveLogin">Đăng nhập</span>
                            </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" placeholder="Nhập Email của bạn">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>
                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">
                                Bằng việc đăng ký. bạn đã đồng ý với TL-shop về
                                <a href="" class="auth-form__text-link">Điều khoảng dịch vụ</a> &
                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                            </p>
                        </div>
                        <div class="auth-form__controls">
                            <span class="btn btn--back" id="come-back__register">TRỞ LẠI </span>
                            <button class="btn btn--primary ">ĐĂNG KÝ </button>
                        </div>
                        </div>
                            <div class="auth-form__socials ">
                                <a href="" class=" auth-form__socials--facebook btn btn--size-s btn--with-icon">
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
                    </div>
        
                    <!-- Login form -->
                    <form action="xulylogin.php" method="POST" class="auth_form__login" id="login">
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
                            <!-- <button class="btn btn--back" id="come-back">TRỞ LẠI </button> -->
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
       
       

        <script src="/assets/javascript/login.js"></script>

            <li class="header__navbar-item header__navbar-user">
                    <?php
                    // Lấy giá trị của cookie 'customer_id'
                    if(isset($_COOKIE['customer_id'] , $_COOKIE['customer_name'])) {
                        $customer_name = $_COOKIE['customer_name'];
                        echo '<img src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-260nw-1913928688.jpg" alt="" class="header__navbar-user-img ">';
                        echo '<span class="header__navbar-user-name">' . $customer_name.'</span>';
                        }
                    ?>
                <ul class="header__navbar-user-menu">
                    <li class="header__navbar-user-item">
                        <a href="">Tài khoản của tôi</a>
                    </li>
                    <li class="header__navbar-user-item">
                        <a href="/View/diachi.php">Địa chỉ của tôi</a>
                    </li>
                    <li class="header__navbar-user-item">
                        <a href="/View/donMua.php">Đơn mua</a>
                    </li>
                    <li class="header__navbar-user-item header__navbar-user-item--separate ">
                        <a href="/Controller/xulylogout.php?logout=true">Đăng xuất</a>
                    </li>
                </ul>
        </li>
        </ul>
       </nav>
       <div class="header-with-search">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                 
                <!-- <svg viewBox="0 0 192 65" class="header__logo-img">
                    <g fill-rule="evenodd">                
                        <path fill="#fff" d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459"
                        ></path>
                       
                    </g>
                </svg> -->
               <img src="/assets/img/logobeauty.png" alt="anhlogo" class="header__logo-img">

            </a>
            </div>
         <div class="header__search">
            <div class="header__search-input-swap">
                <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm trong shop">
                <!-- search history -->
                <div class="header__search-history">
                    <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                    <ul class="header__search-history-list">
                        <li class="header__search-history-item">
                            <a href="">
                                Kem dưỡng da chính hãng
                            </a>
                        </li>
                        <li class="header__search-history-item">
                            <a href="">
                                Son môi chính hãng
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__search-select">
                <span class="header__search-select-lable">Trong Shop</span>
                <i class=" header__search-select-icon fa-solid fa-chevron-down"></i>
            <ul class="header__search-option">
                <li class="header__search-option-item header__search-option-item--active">
                    <span>Trong shop</span>
                    <i class="fa-solid fa-check"></i>
                </li>
                <li class="header__search-option-item ">
                    <span>Ngoài shop</span>
                    <i class="fa-solid fa-check"></i>
                </li>
            </ul>
            </div>
         <button class="header__search-btn">
            <i class=" header__search-btn-icon fa-solid fa-magnifying-glass"></i>
         </button>
         </div>
        <!-- cart layout -->
            <div class="header__cart">   
                    <div  class="header__cart-swap">               
                        <i class=" header__cart-icon fa-sharp fas fa-cart-shopping"></i>
                                <?php
                                    $ok=1;
                                    
                                    if(isset($_SESSION['cart'])){                
                                       foreach($_SESSION['cart'] as $k=>$v){
                                            if(!empty($v)){
                                            $ok=2;
                                            }
                                        }
                                    }
                                    if ($ok != 2){                                         
                                    ?>
                                   <span class="header__cart-swap-notice">0</span>
                                    <!-- no cart : header__cart-list-no-cart  (them header__cart-list-no-cart
                                        vao header__cart-list de chuyen ve no cart )-->
                                    <div class="header__cart-list header__cart-list-no-cart  ">
                                        <img src="/assets/img/no_cart.png" alt="no-cart-img" class=" header__cart-list-no-cart-img">
                                        <span class="header__cart-list-no-cart-msg">
                                            Chưa có sản phẩm
                                        </span>
                                    </div>
                                    <?php         
                                      }else{
                                        $items = $_SESSION['cart'][$customer_id] ?? []; 
                                    ?>
                                        <span class="header__cart-swap-notice"><?php echo count($items)?></span>
                                        <div class="header__cart-list  ">
                                                <img src="/assets/img/no_cart.png" alt="no-cart-img" class=" header__cart-list-no-cart-img">
                                                <span class="header__cart-list-no-cart-msg">
                                                    Chưa có sản phẩm
                                                </span>
                                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                    <?php
                                    foreach($_SESSION['cart'][$customer_id] ?? [] as $product_id =>$value){ 
                                        $item[]=$product_id; // mảng chứa id sản phẩm
                                    }
                                    if (!empty($item)) { 
                                        $str=implode(",",$item); // chuyển từ mảng thành chuỗi
                                        $conn = mysqli_connect("localhost","root","","MYPHAM");
                                        $sql = " SELECT * FROM  SANPHAM WHERE id IN ($str)"; // lấy giá trị của hàng có id trong biến $str
                                        $result = mysqli_query($conn,$sql); 
                                        while($row = mysqli_fetch_array($result)){
                                    
                                    ?>        
                                    <a href="giohang.php" class="header__cart-list-item__link">                 
                                        <ul class="header__cart-list-item">                           
                                            <li class="header__cart-item">
                                                <img src="<?php echo $row['urlImg']?>" alt="" class="header__cart-img">
                                                <div class="header__cart-item-info">
                                                            <div class="header__cart-item-head">
                                                                <h5 class="header__cart-item-name"><?php echo $row['title']?></h5>
                                                                <div class="header__cart-item-price-wrap">
                                                                    <span class="header__cart-item-price"><?php echo $row['priceNew'].'đ'?></span>
                                                                    <!-- <span class="header__cart-item-multiply">x</span>
                                                                    <span class="header__cart-item-qnt">2</span> -->
                                                                </div>
                                                            </div>
                                                            <div class="header__cart-item-body">
                                                                <span class="header__cart-item-description">
                                                                    Phân loại hàng: chính hãng
                                                                </span>
                                                                <!-- <span class="header__cart-item-remove">Xóa</span> -->
                                                               <a href="xoagiohang.php?productid=<?php echo $row['id']?>"  class="header__cart-item-remove">Xóa</a>

                                                            </div>
                                                </div>  
                                            </li>                                        
                                        </ul>
                                        </a>  
                                        <?php
                                            }

                                        }
                                        ?>  
                                        <a class=" header__cart-view btn btn--primary" href="giohang.php">Xem giỏ hàng</a>
                            </div>  
                            <?php
                            
                            }
                            ?>   
                                
                    </div>
         </div> 
     </div>
 </div>

    </header>
 <div class="app__container">
  
    <!-- chi tiết sản phẩm -->

                         <?php 
                            $conn = mysqli_connect("localhost","root","","MYPHAM");  
                            // $sql = "SELECT * , ((priceOld - priceNew) / priceOld * 100) AS priceDiscount FROM CHITIETSANPHAM WHERE idsp =".$_GET['idsp'];
                            $sql = "SELECT * , ((priceOld - priceNew) / priceOld * 100) AS priceDiscount FROM SANPHAM WHERE id =".$_GET['idsp'];
                            $result = mysqli_query($conn,$sql);                                           
                            while($row = mysqli_fetch_array($result)){
                            ?>   
                           <div class="detail__body">         
                            <div class="detail__container" id="detail-id">
                               <div class="detail__img" id="detail__img-id" style="background-image: url(<?php echo $row['urlImg']?>);">
                               </div>
                               <div class="detail__content">
                                    <h2 class="detail__name" id="detail__name-id">
                                    <?php echo $row['title']?>
                                    </h2>
                                 <div class="detail__infor">
                                        <div class="detail__infor-percentStar">
                                            <span class="detail__infor-percent">5</span>
                                                <div class="detail__infor-star">
                                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold  fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold  fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold  fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold  fa-solid fa-star"></i>
                                                    </div>
                                        </div>
                                       <div class="detail__infor-Evaluate">
                                        <span class="detail__infor-Evaluate__number" id="detail__infor-Evaluate__number-id"><?php echo $row['evaluate']?></span>
                                        <span class="detail__infor-Evaluate__letter">Đánh Giá</span>
                                       </div>
                                       <div class="detail__infor-sold">
                                        <span class="detail__infor-sold__number" id="detail__infor-sold__number-id"><?php echo $row['sold']?> </span>
                                        <span class="detail__infor-sold__letter">Đã Bán</span>
                                        
                                       </div>
                                    </div>
                                    <div class="detail__price">
                                        <span class="detail__price-old" id="detail__price-old-id"><?php echo $row['priceOld'].'đ'?></span>
                                        <span class="detail__price-curent" id="detail__price-curent-id"><?php echo $row['priceNew'].'đ'?></span>
                                        <span class="detail__price-sale" id="detail__price-sale-id"><?php echo intval($row['priceDiscount']).'% GIẢM'?></span>
                                    </div>
                                    <div class="detail__shopDiscounts">
                                        <span class="detail__title">Mã Giảm của Shop</span>
                                       <ul class="detail__shopDiscounts-list"> 
                                        <li class="detail__shopDiscounts-item" id="detail__shopDiscounts-item-id"><?php echo 'Giảm '. $row['discount'].'k'?></li>
                                     
                                      </ul>
                                    </div>
                                    <div class="detail__deal">
                                        <span class="detail__deal-title">Deal sốc</span>
                                        <span class="detail__deal-item">Mua kèm Deal Sốc</span>
                                    </div>
                                        <div class="detail__classify">
                                            <span class="detail__classify-title">Kích Cỡ</span>
                                            <ul class="detail__classify-list"> 
                                                <li class="detail__classify-item">
                                                    <div class="detail__classify-item__content">
                                                    <div class="detail__classify-item-img" id="detail__classify-item-img-id" style="background-image: url(<?php echo $row['urlImg']?>);">
                                                </div>
                                                <span class="detail__classify-item-letter" id="detail__classify-item-letter-id"> <?php echo 'Kích Cỡ -'.$row['size']?></span>
                                                </div>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                         <div class="detail__quantity">
                                            <span class="detail__quantity-title">Số Lượng</span>
                                            <div class="detail__quantity-container">        
                                            <div class="detail__quantity-content">
                                                <button class="detail__quantity-content__minus" onclick="decreaseQuantity()"><i class="fa-solid fa-minus detail__quantity-content__minus-icon" ></i></button>
                                                <span class="detail__quantity-content__show" id="quantity-id">1</span>
                                                <button class="detail__quantity-content__add" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>          
                                            </div>    
                                        </div> 
                                        <span class="detail__quantity-product"> <?php echo $row['available'].' sản phẩm có sẵn'?></span>                            
                                         </div>
                                            <form class="detail__select" id="btn-addcartid" method="POST">
                                                <a href="/Controller/themgiohang.php?item=<?php echo $row['id']?>" name="addedCart" id="added-id" class="detail__select-addCart" >
                                                    <i class="fa-solid fa-cart-shopping detail__select-addCart-icon" ></i>
                                                    Thêm Vào Giỏ Hàng
                                                  </a>   
                                               <a  href="/Controller/muangay.php?item=<?php echo $row['id']?>" name="buyNow" class="detail__select-buy">Mua Ngay</a>
                                            </form>
                                    </div>
                                  
                             </div>
                             <?php
                            }                                             
                             ?>
                        </div>
                    
                        <div class="evaluateContainer">
                        <?php 
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        if(isset($_COOKIE['customer_id'])){
                         $customer_name = $_COOKIE['customer_name'];
                        }
                        ?>
                            <div class="evaluateForm">
                            <h1 class="evaluatecontainer__title">Đánh giá Sản phẩm</h1>
                            <?php 
                                $conn = mysqli_connect("localhost","root","","MYPHAM");
                                $sql="SELECT * FROM binhluan WHERE idsp = " . $_GET['idsp'] . " ORDER BY ngayBL DESC";
                                $kq = mysqli_query($conn,$sql);
                                echo '<div id="dsbinhluan">';
                                while($row = mysqli_fetch_array($kq)){     
                                    ?>                                   
                                   <div class="showComment">
                                   <div class="showComment__box">
                                   <span class="showComment__name"><?php echo $row["tenKH"] ?></span>
                                   <span class="showComment__date"><?php echo $row["ngayBL"] ?></span>
                                   </div>
                                   <div class="showComment__content"><?php echo $row["noidung"] ?></div>
                                   </div>
                                   <?php
                                }  
                                echo '</div>';         
                              ?>
                                <?php
                                  if(isset($_COOKIE['customer_id'])){
                                ?>
                                    <div class="evaluateContent">
                                    <input type="hidden" id="idsp" name="idsp" value="<?php echo $_GET['idsp']; ?>" >
                                    <input type="hidden" id="ten" name="tenKH" value="<?php echo  $customer_name ?>" >
                                    <input type="hidden" id ="date" name="ngayBL" value="<?php echo date("d-m-y H:i:s");?>">
                                    <textarea class="evaluateBox" id="noidung" cols="50" rows="2" placeholder="Đánh giá sản phẩm"></textarea>
                                        <button class="evaluateEnter" id="gui" ><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                             <?php
                              }
                              ?>
                         </div>
                        </div>
                     
     <script>
         $("#gui").click(function(){
            $.ajax({
                method: "post",
                url: '/Controller/thembinhluan.php',
                data: {idsp: $('#idsp').val(), ten: $('#ten').val(), noidung: $('#noidung').val(), date: $('#date').val()}
            })
            .done(function (data){
                $('#dsbinhluan').append(
                                  ' <div class="showComment">' +
                                  '<div class="showComment__box">' +
                                   '<span class="showComment__name">'+ $('#ten').val()+'</span>' +
                                   ' <span class="showComment__date">'+$('#date').val()+'</span>'+
                                   '</div>' +
                                  ' <div class="showComment__content">'+$('#noidung').val()+'</div>' +
                                  '</div>'
                );
               
                $('#noidung').val('');
            })
            .fail(function (data){
            });
        });
    </script>
    <!-- <form class="modal__added-cart" id="added-cart-id" >
            <div class="modal__added-cart-body"> 
              <div class="Show__added-cart">
              <i class=" Show__added-cart__icon fa-solid fa-circle-check"></i>
                <span class="Show__added-cart__msg">Sản phẩm đã được thêm vào giỏ hàng</span>
              </div>
            </div>
    </form> -->
    
                        <script src="/assets/javascript/login.js"></script>
<footer class="footer">
  <div class="grid">
    <div class="row">        
        <div class="col l-3 m-6 c-12">
            <div class="footer-content">
                <div class="">
                <h3 class="footer-heading">CHĂM SÓC KHÁCH HÀNG</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">
                            Trung tâm trợ giúp
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">
                        TL-SHOP Mall
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">
                        Hướng dẫn mua hàng
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="col l-3 m-6 c-12">
            <div class="footer-content">
                    <div class="">
                        <h3 class="footer-heading">VỀ TL-SHOP</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    Giới thiệu về TL-shop
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                Tuyển dụng
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                điều khoản TL-shop
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="col l-3 m-6 c-12">
            <div class="footer-content">
                    <div class="">
                    <h3 class="footer-heading">DANH MỤC</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                                kem dưỡng da mặt
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                            kem dưỡng ẩm
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                            Son môi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col l-3 m-6 c-12">
            <div class="footer-content">
                <div class="">
                    <h3 class="footer-heading">THEO DÕI TL-SHOP</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                            <i class="footer-item__link-icon fa-brands fa-facebook"></i>    
                                Facebook
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                                <i class="footer-item__link-icon fa-brands fa-instagram"></i> 
                            fa-instagram
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                                <i class=" footer-item__link-icon fa-brands fa-linkedin"></i>
                            Linkedln
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="col l-3 m-6 c-12">
            <h3 class="footer-heading">VÀO TL-SHOP TRÊN ỨNG DỤNG</h3>
            <div class="footer-dowload">
                <img src="/assets/img/img-QR.png" alt="img qr" class="footer-dowload-qr">
                <div class="footer-dowload-apps">
                    <img src="/assets/img/img-ggplay.png" alt=" google chplay" class="footer-dowload-apps-img">
                  <img src="/assets/img/ing-appstore.png" alt="app store" class="footer-dowload-apps-img">
                </div>
            </div>
        </div> -->
    </div>  
  </div>
  <div class="footer__bottom">
    <div class="grid">
        <div class="foooter-info">
            <ul class="footer-infor-list">
                <li class="footer-infor-item">
                    <a href="" class="footer-infor-item__link">
                        CHÍNH SÁCH BẢO MẬT
                    </a>
                </li>
                <li class="footer-infor-item">
                    <a href="" class="footer-infor-item__link">
                        QUY CHẾ HOẠT ĐỘNG
                    </a>
                </li>
                <li class="footer-infor-item">
                    <a href="" class="footer-infor-item__link">
                        CHÍNH SÁCH VẬN CHUYỂN
                    </a>
                </li>
                <li class="footer-infor-item">
                    <a href="" class="footer-infor-item__link">
                        CHÍNH SÁCH TRẢ HÀNG VÀ HOÀNG TIỀN
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-infor__logo">
            <img src="data:image/png;base64,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" alt="" class="foooter-info-img">
            <span class="footer-infor__logo-text">Công ty TNHH TL-shop</span>
        </div>
        <div class="footer-infor__Address">
            <span class="footer-infor__Address-item">
            Địa chỉ: Tứ chánh , phong sơn , phong điền , thừa thiên Huế
            </span>
            <span class="footer-infor__Address-item">
            Số điện thoại: 0355506752
            </span>
            <span class="footer-infor__Address-item">
            &reg;2023-Bản quyền thuộc về công ty TL-shop    
            </span>
        </div>
    
    </div>
  </div>
    </footer>
</div>
                 
</body>
</html>
       