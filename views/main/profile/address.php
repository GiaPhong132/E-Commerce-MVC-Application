<?php
require_once __DIR__ . '/../navbar.php';
?>

<div class="app">
    <!-- header -->

    <!-- Container -->
    <div class="container">
        <div class="grid wide">
            <div class="row sm-gutter">
                <div class="col l-2">
                    <div class="container-profile-list">
                        <div class="container-profile-list-header"></div>
                        <div class="container-profile-list-body">
                            <div class="container-profile-list-name">
                                <div class="container-profile-list-name-1">
                                    <i class="fa-solid fa-user container-profile-list-name-icon"></i>
                                </div>
                                <div class="container-profile-list-name-2">Tài khoản của tôi</div>
                            </div>
                            <div class="container-profile-list-name">
                                <div class="container-profile-list-name-3">
                                    <a href="profile.html" class="container-profile-list-name-5">
                                        <div class="container-profile-list-name-4">Hồ sơ</div>
                                    </a>
                                </div>
                            </div>
                            <div class="container-profile-list-name">
                                <div class="container-profile-list-name-3">
                                    <a href="#" class="container-profile-list-name-5">
                                        <div class="container-profile-list-name-4 container-profile-list-name-active">Địa chỉ</div>
                                    </a>
                                </div>
                            </div>
                            <div class="container-profile-list-name">
                                <div class="container-profile-list-name-3">
                                    <a href="#" class="container-profile-list-name-5">
                                        <div class="container-profile-list-name-4">Đổi mật khẩu</div>
                                    </a>
                                </div>
                            </div>
                            <div class="container-profile-list-name">
                                <div class="container-profile-list-name-1">
                                    <i class="fa-regular fa-clipboard container-profile-list-name-icon"></i>
                                </div>
                                <div class="container-profile-list-name-2">Đơn mua</div>
                            </div>
                            <div class="container-profile-list-name">
                                <div class="container-profile-list-name-1">
                                    <i class="fa-solid fa-bell container-profile-list-name-icon"></i>
                                </div>
                                <div class="container-profile-list-name-2">Thông báo</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-10">
                    <div class="container-profile">
                        <div class="container-address-header container-profile-header--separate">
                            <div class="container-address-header-1">Địa chỉ của tôi</div>
                            <!-- <input type="button" class="container-address-header-btn" value="Thêm địa chỉ mới"> -->
                        </div>
                        <div class="container-address-body">
                            <!-- <div class="container-address-body-header">Địa chỉ</div> -->
                        </div>
                        <div class="container-address-group">
                            <div class="container-address-group-header"></div>

                            <div class="container-address-group-body">
                                <div class="container-address-group-body-container">
                                    <div class="container-address-group-body-top">

                                        <form action="index.php?page=main&controller=profile&action=updateAddress" method="post" id="addressForm">
                                            <div class="container-address-group-body-left">
                                                <div class="container-address-group-body-name container-address-group-body-name--separate"><?php echo $data->fname . ' ' . $data->lname ?></div>
                                                <br>
                                                <div class="container-address-group-body-phone">
                                                    <input type="text" name="phone" value="<?php echo $data->phone ?>">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="container-address-group-body-infor">
                                        <div class="container-address-group-body-infor-address">
                                            <textarea name="address" id="addressForm" cols="50" rows="10"><?php echo $data->address ?></textarea>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary" style="background-color:cadetblue">Cập Nhật</button>
                                        </form>

                                    </div>
                                </div>

                            </div>

                            <div class="container-address-group-footer--separate-extra"></div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
        <!-- footer -->
    </div>







    <?php require_once __DIR__ . '/../footer.php';
