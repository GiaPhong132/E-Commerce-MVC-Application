<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div data="${item.id}" class="col l-2-4 m-3 c-6 home-product-item">
        <a class="home-product-item-link" href="#">
            <div class="home-product-item__img" style="background-image: url(./assets/img/home/${item.id}.PNG);"></div>
            <div class="home-product-item__info">
                <h4 class="home-product-item__name">${item.name}</h4>
                <div class="home-product-item__price">
                    <p class="home-product-item__price-old">${item.oldPrice}đ</p>
                    <p class="home-product-item__price-new">${item.newPrice}đ</p>
                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                </div>
                <div class="home-product-item__footer">
                    <div class="home-product-item__save">
                        <input type="checkbox" id="heart-save-${item.id}">
                        <label for="heart-save-${item.id}" class="far fa-heart"></label>
                    </div>
                    <div class="home-product-item__rating-star">
                        <i class="star-checked far fa-star"></i>
                        <i class="star-checked far fa-star"></i>
                        <i class="star-checked far fa-star"></i>
                        <i class="star-checked far fa-star"></i>
                        <i class="star-uncheck far fa-star"></i>
                    </div>
                    <div class="home-product-item__saled">Đã bán ${item.saled}</div>
                </div>
                <div class="home-product-item__origin">${item.origin}</div>
                <div class="home-product-item__favourite">
                    Yêu thích
                </div>
                <div class="home-product-item__sale-off">
                    <div class="home-product-item__sale-off-value">${item.saleOff}%</div>
                    <div class="home-product-item__sale-off-label">GIẢM</div>
                </div>
            </div>
            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
        </a>
    </div>`;
</body>

</html>