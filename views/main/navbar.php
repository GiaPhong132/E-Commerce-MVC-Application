<?php
session_start();
if (isset($_SESSION['guest'])) {
    require_once('/xampp/htdocs/E-commerce/models/user.php');

    $data = User::get($_SESSION['guest']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shepo</title>
    <link rel="icon" href="../public/assets/img/logo/shopee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="/e_commerce/public/assets/css/base.css">
    <link rel="stylesheet" href="/e_commerce/public/assets/css/style.css">
    <link rel="stylesheet" href="/e_commerce/public/assets/css/grid.css">
    <link rel="stylesheet" href="/e_commerce/public/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
</head>

<body>
    <header class="header">
        <div class="grid wide">
            <!-- navbar -->
            <nav class="header__navbar hide-on-mobile-tablet">
                <ul class="header__nav-list">
                    <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Kênh Người Bán</li>
                    <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Trở thành Người bán Shepo</li>
                    <!-- qr code -->
                    <div class="header__qrcode">
                        <img src="./assets/img/qr/qr-code.png" class="header__qr">
                        <div class="header__apps">
                            <a href="#" class="header__app-link">
                                <img src="./assets/img/qr/app-store.png" class="header__app-img">
                            </a>
                            <a href="#" class="header__app-link">
                                <img src="./assets/img/qr/gg-play.png" class="header__app-img">
                            </a>
                            <a href="#" class="header__app-link">
                                <img src="./assets/img/qr/app-gallery.png" class="header__app-img">
                            </a>
                            <a href="#" class="header__app-link">
                                <img src="./assets/img/qr/ltp-img.png" class="header__app-img">
                            </a>
                        </div>
                    </div>
                    <li class="header__nav-item">
                        Kết nối
                        <a href="#" class="header__nav-icon-link">
                            <i class="header__nav-icon fab fa-facebook"></i>
                        </a>
                        <a href="#" class="header__nav-icon-link">
                            <i class="header__nav-icon fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                <ul class="header__nav-list">
                    <li class="header__nav-item header__show-note">
                        <a href="#" class="header__nav-item-link">
                            <i class="header__nav-icon far fa-bell"></i> Thông báo
                        </a>
                        <!-- thông báo -->
                        <div class="header__notifi">
                            <header class="header__notifi-header">
                                <h3>Thông Báo Mới Nhận</h3>
                            </header>
                            <ul class="header__notifi-list">
                                <li class="header__notifi-item">
                                    <a href="#" class="header__notifi-link">
                                        <img src="./assets/img/sp/casio.png" class="header__notifi-img">
                                        <div class="header__notifi-info">
                                            <div class="header__notifi-name">
                                                Casio fx 580 VN Plus
                                            </div>
                                            <div class="header__notifi-desc">
                                                Mua Casio 580 của LTP bao xịn, bao mượt, bao đẹp
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="header__notifi-item">
                                    <a href="#" class="header__notifi-link">
                                        <img src="/e_commerce/public/assets/img/sp/iphone.png" class="header__notifi-img">
                                        <div class="header__notifi-info">
                                            <div class="header__notifi-name">
                                                Điện Thoại iPhone 13 Pro 128GB - Hàng Nhập Khẩu
                                            </div>
                                            <div class="header__notifi-desc">
                                                3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="header__notifi-item">
                                    <a href="#" class="header__notifi-link">
                                        <img src="./assets/img/sp/iphone2.png" class="header__notifi-img">
                                        <div class="header__notifi-info">
                                            <div class="header__notifi-name">
                                                Apple iPhone 12 Pro Max 128GB
                                            </div>
                                            <div class="header__notifi-desc">
                                                iPhone 12 Pro Max. Màn hình Super Retina XDR 6.7 inch
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="header__notifi-item">
                                    <a href="#" class="header__notifi-link">
                                        <img src="./assets/img/sp/laptop.png" class="header__notifi-img">
                                        <div class="header__notifi-info">
                                            <div class="header__notifi-name">
                                                Laptop HP 650 g1 siêu khỏe bền
                                            </div>
                                            <div class="header__notifi-desc">
                                                Laptop siêu bền, HP 650 g1 siêu khỏe bền ssd 120gb 15,6inh FULL HD
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="header__notifi-item">
                                    <a href="#" class="header__notifi-link">
                                        <img src="./assets/img/sp/laptop2.png" class="header__notifi-img">
                                        <div class="header__notifi-info">
                                            <div class="header__notifi-name">
                                                Laptop thinkpad x240 chất mỏng nhẹ i5 4300u Ram 4gb Ssd 128gb
                                            </div>
                                            <div class="header__notifi-desc">
                                                HP 650 g1 chip M đời 4, cpu i5 4200M ram 4gb -8gb
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer class="header__notifi-footer">
                                <a href="#" class="header__notifi-footer-btn">Xem tất cả</a>
                            </footer>
                        </div>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-item-link">
                            <i class="header__nav-icon far fa-question-circle"></i> Hỗ trợ
                        </a>
                    </li>

                    <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                        <a href="index.php?page=main&controller=login&action=index" class="header__nav-item-link">Đăng nhập</a>
                    </li>

                    <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                        <a href="index.php?page=main&controller=register&action=index" class="header__nav-item-link">Đăng ký</a>
                    </li>

                    <!-- <li class="header__nav-item header__nav-user">
                            <img src="./assets/img/user.png" class="header__nav-user-avt">
                            <a href="#" class="header__nav-item-link header__nav-item--bold">Lục Thiên Phong</a>
                            <ul class="header__nav-user-menu">
                                <li class="header__nav-user-item">
                                    <a href="#">Tài khoản của tôi</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đơn mua</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đăng xuất</a>
                                </li>
                            </ul>
                        </li> -->
                </ul>
            </nav>
            <!-- search -->
            <div class="header__contain">
                <label for="mobile-search" class="header__mobile-search">
                    <i class="header__mobile-search-icon fas fa-search"></i>
                </label>
                <div class="header__logo">
                    <a href="./index.html" class="header__logo-link">
                        <img src="./assets/img/logo/logo-full-white.png" class="header__logo-img">
                    </a>
                </div>
                <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                <div class="header__search">
                    <div class="header__search-input-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm trên Shepo">
                        <div class="header__search-history">
                            <ul class="header__search-history-list">
                                <li class="header__search-history-item">
                                    <a href="#">Áo thun nam</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="#">Bánh quy</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="#">Mỹ phẩm cho nam</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="#">Iphone 13 Pro Max giá rẻ</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="#">Khô gà</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn header__search-btn">
                        <i class="header__search-btn-icon fas fa-search"></i>
                    </button>
                </div>
                <!-- header__cart--no-cart -->
                <!-- header__cart--has-cart -->
                <div class="header__cart header__cart--has-cart">
                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                    <div class="header__cart-count">3</div>

                    <div class="header__cart-list no-cart">
                        <img src="./assets/img/sp/no-cart.png" class="header__no-cart-img">
                        <p class="header__no-cart-text">Chưa có sản phẩm</p>
                    </div>

                    <div class="header__cart-list has-cart">
                        <h4 class="header__cart-heading">Sản phẩm đã chọn</h4>
                        <ul class="header__cart-list-item">
                            <li class="header__cart-item">
                                <img src="./assets/img/buy/1.PNG" class="header__cart-item-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-heading">
                                        <h3 class="header__cart-item-name">Logitech G Pro Wireless Superlight</h3>
                                        <p class="header__cart-item-price">2.000.000đ</p>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <p class="header__cart-item-number">x 2</p>
                                        <div class="header__cart-item-close">
                                            Xoá
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__cart-item">
                                <img src="./assets/img/buy/2.PNG" class="header__cart-item-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-heading">
                                        <h3 class="header__cart-item-name">Iphone 11 64GB</h3>
                                        <p class="header__cart-item-price">12.500.000đ</p>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <p class="header__cart-item-number">x 1</p>
                                        <div class="header__cart-item-close">
                                            Xoá
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="header__cart-item">
                                <img src="./assets/img/buy/3.PNG" class="header__cart-item-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-heading">
                                        <h3 class="header__cart-item-name">Iphone 11 Pro Max 256GB</h3>
                                        <p class="header__cart-item-price">15.800.000đ</p>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <p class="header__cart-item-number">x 1</p>
                                        <div class="header__cart-item-close">
                                            Xoá
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="header__cart-footer">
                            <a href="#" class="btn btn--primary header__cart-see-cart">Xem giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="header__sort-bar">
            <li class="header__sort-item">
                <a href="#" class="header__sort-link">Liên quan</a>
            </li>
            <li class="header__sort-item header__sort-item--active">
                <a href="#" class="header__sort-link">Mới nhất</a>
            </li>
            <li class="header__sort-item">
                <a href="#" class="header__sort-link">Bán chạy</a>
            </li>
            <li class="header__sort-item">
                <a href="#" class="header__sort-link">Giá</a>
            </li>
        </ul>
    </header>