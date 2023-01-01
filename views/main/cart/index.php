<?php
require_once __DIR__ . '/../navbar.php';
?>

<div class="app">
    <!--Header-->
    <!-- <header class="header-login">
        <div class="grid wide">
            <div class="header__contain">
                <div class="header__contain-login">
                    <div class="header__logo">
                        <a href="index.php?page=main&controller=product&action=index" class="header__logo-link">
                            <img src="/e_commerce/public/assets/img/logo/logo-full-orange.png" class="header__logo-img-login">
                        </a>
                    </div>
                    <span class="header__label-login">Giỏ hàng</span>
                </div>
                <a href="#" class="header__help">Bạn cần giúp đỡ?</a>
            </div>
        </div>
    </header> -->
    <!--Container-->
    <div class="container-cart">
        <div class="grid wide">
            <div class="row sm-gutter">
                <div class="col l-11">
                    <div class="cart-page">
                        <div class="product-cart-container-box">
                            <div class="product-cart-container-turtorial">
                                <div class="product-cart-turtorial-list">
                                    <div class="product-cart-container-turtorial-checkbox">
                                        <i class="fa-solid fa-check product-cart-icon-btn"></i>
                                    </div>

                                    <div class="product-cart-list-name product-cart-list-name-p">Sản phẩm</div>
                                    <div class="product-cart-list-name">Đơn giá</div>
                                    <div class="product-cart-list-name">Số lượng</div>
                                    <div class="product-cart-list-name">Số tiền</div>
                                    <div class="product-cart-list-name">Thao tác</div>

                                </div>
                            </div>
                        </div>
                        <?php
                        $totalPrice = 0;
                        $totalAmount = 0;
                        foreach ($result as $row) {
                            $totalPrice += $row['newPrice'] * $row['amount'];
                            $totalAmount += $row['amount'];
                            echo '
                                                <div class="product-cart-container-box-p">
                                            <div class="product-cart-container-turtorial">
                                            <div class="product-cart-turtorial-list-p">
                                                <div class="product-cart-container-turtorial-checkbox">
                                                    <i class="fa-solid fa-check product-cart-icon-btn"></i>
                                                </div>
                                                <div class="product-cart-list-name product-cart-list-name-p">
                                                    <img src="/e_commerce/public/assets/img/products/' . $row['id'] . '.jfif" alt="" class="product-cart-img">
                                                    ' . $row['name'] . '
                                                </div>
                                                <div class="product-cart-list-name">
                                                    <div class="product-cart-list-price">đ</div>
                                                    ' . number_format($row['newPrice'], 0, '', '.') . '
                                                </div>
                                                <div class="product-cart-list-name product-cart-list-name-quantity">' . $row['amount'] . '</div>
                                                <div class="product-cart-list-name">
                                                    <div class="product-cart-list-price product-cart-list-price-sum">đ</div>
                                                    <div class="product-cart-list-price-sum-num">' . number_format($row['newPrice'] * $row['amount'], 0, '', '.') . '</div>
                                                </div>
                                                <div class="product-cart-list-name">
                                                    <div class="product-cart-list-act"><a href="index.php?page=main&controller=cart&action=delete&idDel=' . $row['id'] . '">Xóa</a></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                        ';
                        }
                        echo '
                                <div class="product-cart-container-box-footer">
                                    <div class="product-cart-container-turtorial">
                                        <div class="product-cart-turtorial-list-footer">
                                            <div class="product-cart-container-turtorial-checkbox">
                                                <i class="fa-solid fa-check product-cart-icon-btn"></i>
                                            </div>
                                            <div class="product-cart-footer-name">Chọn Tất Cả (' . $totalAmount . ')</div>
                                            <div class="product-cart-footer-name-price-sum">Tổng Thanh Toán (' . $totalAmount . ' sản phẩm)</div>
                                            <div class="product-cart-footer-price">
                                                <div class="product-cart-list-price product-cart-list-price-sum">đ</div>
                                                <div class="product-cart-footer-price-sum">' . $totalPrice . '</div>
                                            </div>
                                            <a href="index.php?page=main&controller=product&action=getPay" class="btn buy-btn"> Mua hàng</a>
                                        </div>

                                    </div>
                                </div>';

                        ?>

                    </div>
                </div>
                <div class="col l-1"></div>
            </div>
        </div>
    </div>
    <!-- Footer -->

</div>


<?php require_once __DIR__ . '/../footer.php';
