<?php
session_start();
if (isset($_SESSION['guest'])) {
    require_once('/xampp/htdocs/E_commerce/models/user.php');

    $data = User::get($_SESSION['guest']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Shope - Bách Khoa - HCMUT</title> -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/E_commerce/public/images/icons/favicon_01.png" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <!-- Nếu ko chạy đc drop down thì đặt hoặc bỏ comment cái này -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


    <!-- icon -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <!-- <link href="/E_commerce/public/plugins/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <!-- themify icon -->
    <link rel="stylesheet" href="/E_commerce/public/plugins/themify-icons/themify-icons.css">
    <!-- Owl Carousel -->
    <link href="/E_commerce/public/plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Theme -->
    <link href="/E_commerce/public/plugins/owl-carousel/assets/owl.theme.green.min.css" rel="stylesheet" media="screen">
    <!-- Fancy Box -->
    <link href="/E_commerce/public/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="/E_commerce/public/plugins/aos/aos.css">

    <!-- CSS -->
    <link href="/E_commerce/public/css/layout/navbar.css" rel="stylesheet">
    <link href="/E_commerce/public/css/layout/footer.css" rel="stylesheet">
    <link href="/E_commerce/public/css/layout/hero.css" rel="stylesheet">
    <link href="/E_commerce/public/css/layout/product.css" rel="stylesheet">
    <link href="/E_commerce/public/css/layout/timeline.css" rel="stylesheet">
    <link href="/E_commerce/public/css/layout/profile.css" rel="stylesheet">
    <title>Shepo</title>
    <link rel="icon" href="../public/assets/img/logo/shopee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="/E_commerce/public/assets/css/base.css">
    <link rel="stylesheet" href="/E_commerce/public/assets/css/style.css">
    <link rel="stylesheet" href="/E_commerce/public/assets/css/grid.css">
    <link rel="stylesheet" href="/E_commerce/public/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
</head>

<body>
    <header class="header">
        <div class="grid wide">
            <!-- navbar -->

            <?php
            if (isset($_SESSION['guest'])) {
                echo '
                  <nav class="header__navbar hide-on-mobile-tablet" style="float:right">
                         <div class="avatar" style="padding-top:10px;">
                             <li class="header__nav-item header__nav-user">
                             <img src="/e_commerce/' . $data->profile_photo . '" class="header__nav-user-avt">
                                <a href="#" class="header__nav-item-link header__nav-item--bold">' . $_SESSION['guest'] . '</a>
                                <ul class="header__nav-user-menu">
                                    <li class="header__nav-user-item">
                                        <a href="index.php?page=main&controller=profile&action=index">Tài khoản của tôi</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="#">Đơn mua</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="index.php?page=main&controller=login&action=logout">Đăng xuất</a>
                                    </li>
                                </ul>
                            </li>
                         </div>
                     </nav>

                ';
            } else {
                echo '
                    <nav class="header__navbar hide-on-mobile-tablet" style="float: right;">
                        <ul class="header__nav-list">
                            <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                                <a href="index.php?page=main&controller=login&action=index" class="header__nav-item-link">Đăng nhập</a>
                            </li>

                            <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                                <a href="index.php?page=main&controller=register&action=index" class="header__nav-item-link">Đăng ký</a>
                            </li>
                        </ul>
                    </nav>
                    ';
            }

            ?>




            <br>
            <br>
            <!-- search -->
            <div class="header__contain" style="height: 75px;">
                <label for="mobile-search" class="header__mobile-search">
                    <i class="header__mobile-search-icon fas fa-search"></i>
                </label>
                <div class="header__logo">
                    <a href="index.php?page=main&controller=product&action=index" class="header__logo-link">
                        <img src="/E_commerce/public/assets/img/logo/logo-full-white.png" class="header__logo-img">
                    </a>
                </div>
                <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                <div class="header__search">
                    <div class=" header__search-input-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm trên Shepo">
                        <div class="header__search-history">

                        </div>
                    </div>
                    <button class="btn header__search-btn">
                        <i class="header__search-btn-icon fas fa-search"></i>
                    </button>
                </div>
                <!-- header__cart--no-cart -->
                <!-- header__cart--has-cart -->
                <div class="header__cart header__cart--has-cart">
                    <a href="index.php?page=main&controller=cart&action=index">
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                    </a>
                    <div class="header__cart-count">3</div>

                    <div class="header__cart-list no-cart">
                        <img src="/e_commerce/public/assets/img/sp/no-cart.png" class="header__no-cart-img">
                        <p class="header__no-cart-text">Chưa có sản phẩm</p>
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