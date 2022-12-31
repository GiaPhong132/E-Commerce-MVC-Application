<?php
require_once(__DIR__ . "/../navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- main -->
    <div class="app">
        <!-- header -->

        <!-- container -->
        <div class="container">
            <div class="grid wide">
                <div class="row sm-gutter">



                    <?php
                    if ($result->num_rows > 0) {
                        echo '
                                <div class="col l-2 m-0 ">
                                        <!-- category -->
                                        <nav class="category">
                                            <h3 class="category__heading">
                                                <i class="category__heading-icon fa-solid fa-list"></i> Danh Mục
                                            </h3>
                                            <ul class="category-list">
                                                <li class="category-item category-item-active">
                                                    <a href="#" class="category-item-link">Khác</a>
                                                </li>
                                                <li class="category-item category-item-active">
                                                    <a href="#" class="category-item-link">Iphone</a>
                                                </li>
                                                <li class="category-item category-item-active">
                                                    <a href="#" class="category-item-link">Xiaomi</a>
                                                </li>
                                                <li class="category-item category-item-active">
                                                    <a href="#" class="category-item-link">Samsung</a>
                                                </li>
                                                <li class="category-item category-item-active">
                                                    <a href="#" class="category-item-link">Oppo</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col l-10 m-12">
                                        <!-- home filter -->

                                        <div class="home-filter hide-on-mobile-tablet">
                                            <div class="home-filter-control">
                                                <p class="home-filter-title">Sắp xếp theo</p>
                                                <button class="btn btn--primary home-filter-btn">Phổ biến</button>
                                                <button class="btn home-filter-btn">Mới nhất</button>
                                                <button class="btn home-filter-btn">Bán chạy</button>
                                                <div class="btn home-filter-sort">
                                                    <p class="home-filter-sort-btn">Giá</p>
                                                    <i class="fas fa-sort-amount-down-alt"></i>
                                                    <ul class="home-filter-sort-list">
                                                        <li>
                                                            <a href="#" class="home-filter-sort-item-link">
                                                                Giảm dần
                                                                <i class="fas fa-sort-amount-down-alt"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="home-filter-sort-item-link">
                                                                Tăng dần
                                                                <i class="fas fa-sort-amount-up-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="home-filter-page">
                                                <div class="home-filter-page-number">
                                                    <p class="home-filter-page-now">1</p>
                                                    /8
                                                </div>
                                                <div class="home-filter-page-control">
                                                    <a href="#" class="home-filter-page-btn home-filter-page-btn--disable">
                                                        <i class="fas fa-angle-left"></i>
                                                    </a>
                                                    <a href="#" class="home-filter-page-btn">
                                                        <i class="fas fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- home product -->
                                        <div class="home-product">
                                            <div id="list-product" class="row sm-gutter">
                        ';
                        foreach ($result as $row)
                            echo '
                                        <div class="col l-2-4 m-3 c-6 home-product-item">
                                             <a class="home-product-item-link" href="index.php?page=main&controller=product&action=getDetail&productKey=' . $row['id'] . '">
                                        <div class="home-product-item__img" style="background-image: url(/e_commerce/public/assets/img/products/' . $row['id'] . '.jfif);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">' . $row['name'] . '</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">' . $row['oldPrice'] / 1000 . '.000đ</p>
                                                <p class="home-product-item__price-new">' . $row['newPrice'] / 1000 . '.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán ' . $row['sold'] . 'k</div>
                                            </div>
                                            <div class="home-product-item__origin">' . $row['origin'] . '</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">' . $row['saleOff'] . '%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                        </a>
                                    </div>

                                ';
                    } else {
                        echo '<div class="shopee-search-empty-result-section"><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/a60759ad1dabe909c46a817ecbf71878.png" class="shopee-search-empty-result-section__icon"><div class="shopee-search-empty-result-section__title">Không tìm thấy kết quả nào</div><div class="shopee-search-empty-result-section__hint">Hãy thử sử dụng các từ khóa chung chung hơn</div></div>';
                    }

                    ?>
                </div>
            </div>




            <!--  -->
        </div>
        <!-- pagination -->
        <!-- <ul class="pagination home-product-pagination">
            <li class="pagination-item">
                <a href="#" class="pagination-item-link pagination-item-link--disable">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
            <li class="pagination-item pagination-item--active">
                <a href="#" class="pagination-item-link">1</a>
            </li>
            <li class="pagination-item">
                <a href="#" class="pagination-item-link">2</a>
            </li>
            <li class="pagination-item">
                <a href="#" class="pagination-item-link">3</a>
            </li>
            <li class="pagination-item">
                <a class="pagination-item-link pagination-item-link--disable">. . .</a>
            </li>
            <li class="pagination-item">
                <a href="#" class="pagination-item-link">8</a>
            </li>
            <li class="pagination-item">
                <a href="#" class="pagination-item-link">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
        </ul> -->
    </div>
    </div>
    </div>
    </div>

    <?php require_once __DIR__ . '/../footer.php';
