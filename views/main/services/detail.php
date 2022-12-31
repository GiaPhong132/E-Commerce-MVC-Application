<?php
require_once __DIR__ . '/../navbar.php';
?>

<div class="app">
    <!-- header -->

    <!--Container-->
    <?php
    echo
    '

        ';

    ?>
    <div class="container-product-site">
        <div class="grid wide">
            <div class="row sm-gutter">
                <div class="col l-12">
                    <div class="product-site-cost">
                        <div class="product-site-image">
                            <img src="/e_commerce/public/assets/img/products/<?php echo $product->id ?>.jfif" alt="Errors" class="product-site-infor-of-product">
                            <!-- <div class="product-site-list-img-product">
                                <img src="https://phongapple.vn/wp-content/uploads/2021/10/13tr.png" alt="" class="product-site-list-img-product-mini">
                                <img src="https://product.hstatic.net/1000063620/product/iphone-13-pro-max-green_d31c599a9e6c4d34a1e7ee67c03faa8a_1024x1024.jpg" alt="" class="product-site-list-img-product-mini">
                                <img src="https://product.hstatic.net/1000063620/product/iphone-13-pro-max-green_d31c599a9e6c4d34a1e7ee67c03faa8a_1024x1024.jpg" alt="" class="product-site-list-img-product-mini">
                                <img src="https://product.hstatic.net/1000063620/product/iphone-13-pro-max-green_d31c599a9e6c4d34a1e7ee67c03faa8a_1024x1024.jpg" alt="" class="product-site-list-img-product-mini">
                                <img src="https://images.fixjeiphone.nl/wp-content/uploads/2022/09/Refurbished-iPhone-13-mini-5.png" alt="" class="product-site-list-img-product-mini">
                            </div> -->
                            <!-- <div class="product-site-list-img-product-footer">
                                <div class="product-site-list-img-product-share product-site-list-img-product-share--separate">
                                    <div class="product-site-list-img-product-share-title">Chia sẻ:</div>
                                    <a href="" class="product-site--list-share"><i class="fa-brands fa-facebook-messenger product-site-list-img-product-share-icon product-site-list-img-product-share-icon-mess"></i></a>
                                    <a href="" class="product-site--list-share"><i class="fa-brands fa-facebook product-site-list-img-product-share-icon product-site-list-img-product-share-icon-facebook"></i></a>
                                    <a href="" class="product-site--list-share"><i class="fa-brands fa-pinterest product-site-list-img-product-share-icon product-site-list-img-product-share-icon-printerest"></i></a>
                                </div>
                                <div class="product-site-list-img-product-love">
                                    <div class=""><i class="fa-solid fa-heart product-site-list-img-product-love-icon"></i></div>
                                    <div class="product-site-list-img-product-love-title">Đã thích (<?php echo $product->reviews ?>k)</div>
                                </div>
                            </div> -->
                        </div>
                        <div class="product-site-buy">
                            <span class="product-site-buy-title--span"><?php echo $product->name ?></span>
                            <div class="product-site-rate ">
                                <div class="product-site-rate-and-star product-site-rate--separate">
                                    <div class="product-site-rating"><?php echo $count = $product->rating . '.' . rand(1, 9) ?></div>
                                    <div class="product-site-star">
                                        <?php
                                        for ($i = 0; $i < $count; $i++) {
                                            echo '
                                            <i class="fa-solid fa-star product-site-star-icon"></i>
                                            ';
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="product-site-evaluate product-site-rate--separate">
                                    <div class="product-site-evaluate--num"><?php echo $product->reviews ?></div>
                                    <div class="product-site-evaluate--name">Đánh giá</div>
                                </div>
                                <div class="product-site-sale-num">
                                    <div class="product-site-sale-num--num"><?php echo $product->sold ?><span>k</span></div>
                                    <div class="product-site-sale-num--name">Đã bán</div>
                                </div>
                            </div>
                            <div class="product-site-buy-price">
                                <div class="product-site-buy-price--1">đ</div>
                                <div class="product-site-buy-price--2"><?php echo $product->newPrice / 1000 ?><span>.000</span></div>
                            </div>
                            <div class="product-site-transport">
                                <div class="product-site-transport-name">Vận chuyển</div>
                                <div class="product-site-transport-icon"><i class="fa-solid fa-truck-fast"></i></div>
                                <div class="product-site-transport-infor">
                                    <div class="product-site-transport-title">
                                        <div class="product-site-transport-title-name product-site-transport-top">Vận chuyển tới</div>
                                        <div class="product-site-transport-title-name">Phí vận chuyển</div>
                                    </div>
                                    <div class="product-site-transport-infor-aap">
                                        <div class="product-site-transport-infor-address-and-price product-site-transport-top">Phường Linh Trung, Thành Phố Thủ Đức</div>
                                        <div class="product-site-transport-infor-address-and-price"><i class="fa-solid fa-dong-sign"></i><?php echo rand(14, 32) ?><span>.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-site-option">
                                <div class="product-site-option-color">
                                    <div class="product-site-option-color-name">Màu</div>
                                    <button class="btn product-site-option-btn">Xanh lá</button>
                                    <button class="btn product-site-option-btn">Xanh dương</button>
                                    <button class="btn product-site-option-btn">Đen</button>
                                    <button class="btn product-site-option-btn">Trắng</button>
                                </div>
                                <div class="product-site-option-quantity">
                                    <!-- <div class="product-site-option-quantity-title">Số lượng</div> -->
                                    <div class="product-site-option-quantity-icon">
                                        <!-- <input type="number" class="product-site-option-quantity-icon-num"> -->
                                        <div class="product-site-option-quantity-available"><?php echo $product->inStock ?> sản phẩm có sẵn</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-site-option-buy-or-addtocart">
                                <button class="btn-addtocart product-site-option-add-to-cart">
                                    <i class="fa-solid fa-cart-plus btn-addtocart-icon"></i>
                                    <a href="index.php?page=main&controller=product&action=getDetail&productKey=<?php echo $product->id ?>">
                                        <div class="product-site-option-addtocart-title">Thêm vào giỏ hàng</div>
                                    </a>
                                </button>
                                <button class="btn-product-site btn--primary-product-site">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-site-shop">
                        <div class="product-site-shop-avatar">
                            <img src="https://i.pinimg.com/236x/8d/b4/be/8db4beec56f88a7eb7ab0f4509011d70.jpg" alt="" class="product-site-shop-avatar-img">

                        </div>
                        <div class="product-site-shop-status product-site-shop-status--separate">
                            <div class="product-site-shop-status-1">fpt shop</div>
                            <div class="product-site-shop-status-2">Online <?php echo rand(1, 5) ?> giờ trước</div>
                            <div class="product-site-shop-status-3">
                                <button class="btn-mini-1 btn-mini-color">Chat ngay</button>
                                <button class="btn-mini-2">Xem shop</button>
                            </div>
                        </div>
                        <div class="product-site-shop-infor">

                            <div class="product-site-shop-infor-1">
                                <div class="product-site-shop-infor-1-1">
                                    <div class="product-site-shop-infor-label">Đánh giá</div>
                                    <div class="product-site-shop-infor-num"><?php echo $product->reviews  ?></div>
                                </div>
                                <div class="product-site-shop-infor-1-2">
                                    <div class="product-site-shop-infor-label">Sản phẩm</div>
                                    <div class="product-site-shop-infor-num"> <?php echo $product->inStock  ?></div>
                                </div>
                            </div>
                            <div class="product-site-shop-infor-1">
                                <div class="product-site-shop-infor-1-1">
                                    <div class="product-site-shop-infor-label">Tỉ lệ phản hồi</div>
                                    <div class="product-site-shop-infor-num">99%</div>
                                </div>
                                <div class="product-site-shop-infor-1-2">
                                    <div class="product-site-shop-infor-label">Thời gian phản hồi</div>
                                    <div class="product-site-shop-infor-num">Trong vài giờ</div>
                                </div>
                            </div>
                            <div class="product-site-shop-infor-1">
                                <div class="product-site-shop-infor-1-1">
                                    <div class="product-site-shop-infor-label">Tham gia</div>
                                    <div class="product-site-shop-infor-num">2 năm trước</div>
                                </div>
                                <div class="product-site-shop-infor-1-2">
                                    <div class="product-site-shop-infor-label">Người theo dõi</div>
                                    <div class="product-site-shop-infor-num"><?php echo rand(10, 80) . '.' . rand(1, 9) ?> k</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="product-site-infor">
                        <div class="product-site-infor-1">
                            <div class="product-site-infor-label">Chi tiết sản phẩm</div>
                            <div class="product-site-infor-detail">
                                <div class="product-site-infor-detail-1">
                                    <div class="product-site-infor-detail-name">Danh mục</div>
                                    <div class="product-site-infor-detail-name">Kho hàng</div>
                                    <div class="product-site-infor-detail-name">Gửi từ</div>
                                </div>
                                <div class="product-site-infor-detail-2">
                                    <div class="product-site-infor-detail-inf">Điện thoại</div>
                                    <div class="product-site-infor-detail-inf"><?php echo $product->inStock ?></div>
                                    <div class="product-site-infor-detail-inf">Quận Hoàn Kiếm, Hà Nội</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-site-infor-2">
                            <div class="product-site-infor-label">Mô tả sản phẩm</div>
                            <div class="product-site-infor-describle">
                                <div class="product-site-infor-describle-inf">iPhone 13</div>
                                <div class="product-site-infor-describle-inf">Hệ thống camera kép tiên tiến nhất từng có trên iPhone. Chip A15 Bionic thần tốc. Bước nhảy vọt về thời lượng pin. Thiết kế bền bỉ. Mạng 5G siêu nhanh. Cùng với màn hình Super Retina XDR sáng hơn.</div>
                                <div class="product-site-infor-describle-inf">Bộ sản phẩm bao gồm</div>
                                <div class="product-site-infor-describle-inf">1. Điện thoại</div>
                                <div class="product-site-infor-describle-inf">2. Dây sạc</div>
                                <div class="product-site-infor-describle-inf">Thông số kỹ thuật</div>
                                <div class="product-site-infor-describle-inf">Truy cập apple.com/iphone/compare để xem cấu hình đầy đủ.</div>
                            </div>
                        </div>

                    </div>
                    <!-- Comment -->
                    <div class="comment">
                        <div class="comment-box">
                            <div class="product-ratings">
                                <div class="product-ratings__header">
                                    <span class="product-ratings__header1">ĐÁNH GIÁ SẢN PHẨM</span>
                                </div>
                                <div class="product-rating-overview">
                                    <div class="product-rating-overview__briefing">
                                        <div class="product-rating-overview__score-wrapper">
                                            <span class="product-rating-overview__rating-score">4.9</span>
                                            <span class="product-rating-overview__rating-score-out-of"> trên 5 </span>
                                        </div>

                                    </div>
                                    <div class="product-rating-overview__filters">
                                        <div class="product-rating-overview__filter ">tất cả</div>
                                        <div class="product-rating-overview__filter">5 Sao (93)</div>
                                        <div class="product-rating-overview__filter">4 Sao (0)</div>
                                        <div class="product-rating-overview__filter">3 Sao (1)</div>
                                        <div class="product-rating-overview__filter">2 Sao (0)</div>
                                        <div class="product-rating-overview__filter">1 Sao (2)</div>
                                        <div class="product-rating-overview__filter ">Có Bình luận (58)</div>
                                        <div class="product-rating-overview__filter ">Có hình ảnh / video (54)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cmt-product-rating">
                                <div class="cmt-avatar">
                                    <img src="https://phongapple.vn/wp-content/uploads/2021/10/13tr.png" alt="" class="cmt-avatar">
                                </div>
                                <div class="cmt-product-rating__main">
                                    <div class="cmt-product-rating__author-name"> trangcute</div>
                                    <div class="cmt-product-rating__time "> 2022-12-18 22:07 | Phân loại hàng: Đen </div>
                                    <div class="cmt-info">
                                        <div style="margin-top: 0px;"><span class="_9Wyxc9">Chất liệu: </span>tốt</div>
                                        <div style="margin-top: 5px;"><span class="_9Wyxc9">Màu sắc: </span>đen</div>
                                        <div style="margin-top: 5px;">xinh lắm nha kâggsyauqiqiaiaiaiahbahaahajaiaiaisushsvdvsbsuaiwiquqi</div>
                                    </div>
                                    <div class="cmt-picture">
                                        <img src="https://phongapple.vn/wp-content/uploads/2021/10/13tr.png" alt="" class="cmt-pic">
                                        <img src="https://phongapple.vn/wp-content/uploads/2021/10/13tr.png" alt="" class="cmt-pic">
                                        <img src="https://phongapple.vn/wp-content/uploads/2021/10/13tr.png" alt="" class="cmt-pic">
                                        <img src="https://phongapple.vn/wp-content/uploads/2021/10/13tr.png" alt="" class="cmt-pic">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <?php require_once __DIR__ . '/../footer.php';
