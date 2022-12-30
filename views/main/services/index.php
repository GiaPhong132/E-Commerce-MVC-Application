<?php
require_once("/xampp/htdocs/E_commerce/views/main/navbar.php");
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
                            <div id="list-product" class="row sm-gutter"></div>



                            <!--  -->
                            <div id="list-product" class="row sm-gutter">
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/2.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">300.000đ</p>
                                                <p class="home-product-item__price-new">250.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/3.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">150.000đ</p>
                                                <p class="home-product-item__price-new">180.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">30%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/4.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">350.000đ</p>
                                                <p class="home-product-item__price-new">400.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 2,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/5.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">270.000đ</p>
                                                <p class="home-product-item__price-new">300.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/6.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">160.000đ</p>
                                                <p class="home-product-item__price-new">220.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 2,3k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">25%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/7.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">195.000đ</p>
                                                <p class="home-product-item__price-new">250.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">15%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/8.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">360.000đ</p>
                                                <p class="home-product-item__price-new">420.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,9k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/9.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">130.000đ</p>
                                                <p class="home-product-item__price-new">170.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/10.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/11.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/12.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/13.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/14.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/15.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/16.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">180.000đ</p>
                                                <p class="home-product-item__price-new">200.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/17.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Jack BNC lò xo cho dây tín hiệu đồng trục camera</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">170.000đ</p>
                                                <p class="home-product-item__price-new">210.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">30%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/18.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Pin TCbest AA và AAA cho chuột không dây và điều khiển giao ngẫu nhiên</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">50.000đ</p>
                                                <p class="home-product-item__price-new">70.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 5,6k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">10%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/19.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Màn Hình Máy Tính 24 inch/19inch AOC,Màn Hình 75HZ Full HD 1920*1080</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">2.100.000đ</p>
                                                <p class="home-product-item__price-new">3.000.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">36%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/20.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Webcam Máy Tính-Latop-Có Mic Full HD-Camera</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">350.000đ</p>
                                                <p class="home-product-item__price-new">400.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 2,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(/E_commerce/public/assets/img/home/21.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Loa máy tính để bàn,loa vi tính MC D - 221 SUPER BASS</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">270.000đ</p>
                                                <p class="home-product-item__price-new">300.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">25%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/22.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Loa SIÊU TRẦM (SUB BASS): 8W, cường độ âm thanh >80dB</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">160.000đ</p>
                                                <p class="home-product-item__price-new">185.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 2,3k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">23%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/23.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Bàn Phím Gaming Có Led 7 Màu-Bàn Phím G21 Kèm Chuột-Lót Chuột</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">195.000đ</p>
                                                <p class="home-product-item__price-new">230.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">15%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/24.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Bàn phím Gaming, Keyboard T-WOLF TF20 Led 7 màu USB</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">360.000đ</p>
                                                <p class="home-product-item__price-new">420.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 1,9k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/home/25.PNG);"></div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">CHUỘT KHÔNG DÂY T- WOLF Q13 CHUỘT GAMING</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">135.000đ</p>
                                                <p class="home-product-item__price-new">170.000đ</p>
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
                                                <div class="home-product-item__saled">Đã bán 3,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                            </div>




                            <!--  -->
                        </div>
                        <!-- pagination -->
                        <ul class="pagination home-product-pagination">
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                    <div class="row sm-gutter main-footer-info">
                        <div class="col l-2-4 m-4 ">
                            <h3 class="footer__heading">CHĂM SÓC KHÁCH HÀNG</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Trung Tâm Trợ Giúp</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Hướng Dẫn Mua Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Hướng Dẫn Bán Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Thanh Toán</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Vận Chuyển</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Trả Hàng & Hoàn Tiền</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chăm Sóc Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Sách Bảo Mật</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 ">
                            <h3 class="footer__heading">VỀ SHOPEE</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Giới Thiệu Về Shepo</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Tuyển Dụng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Điều Khoản Shepo</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Sách Bảo Mật</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Kênh Người Bán</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Liên Hệ Với Truyền Thông</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4  pay-and-ship">
                            <div>
                                <h3 class="footer__heading">THANH TOÁN</h3>
                                <div class="footer-sale-ship">
                                    <img src="./assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/2.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/3.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/4.PNG" class="footer-item-sale-ship">
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 ">
                            <h3 class="footer__heading">THEO DÕI CHÚNG TÔI</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-fb">
                                        <i class="footer-item-icon fa-brands fa-facebook"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-is">
                                        <i class="footer-item-icon fab fa-instagram-square"></i> Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-li">
                                        <i class="footer-item-icon fa-brands fa-linkedin"></i> LinkedIn
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-8 ">
                            <h3 class="footer__heading">TẢI ỨNG DỤNG SHEPO</h3>
                            <div class="footer-download">
                                <a href="#" class="footer-download-link">
                                    <img src="./assets/img/qr/qr-code.png" class="footer-download-qr">
                                </a>
                                <div class="footer-download-app">
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/gg-play.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/app-store.png" class="footer-download-app-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- modal -->
    <div class="modal">
        <div class="modal__body">
            <!-- authen signin-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <div class="auth-form__switch-btn">Đăng nhập</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__policy">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đồng ý với Shoppee về
                            <a href="#" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="#" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>k
                </div>
                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Google
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- script js -->
    <!-- <script src="./assets/js/product.js"></script> -->
</body>

</html>