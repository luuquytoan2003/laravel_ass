<?php


if (isset($_SESSION['username'])) {
    ?>
    <a href="../admin/index.php">Vao trang admin</a>
    <br>
    <a href="?action=dangxuat">dang xuat</a>
    <?php
}else{
    echo '
    <div id="content" class="site-content">
                    <div class="col-full">
                        <div class="row">
                            <nav class="woocommerce-breadcrumb">
                                <a href="home-v1.html">Home</a>
                                <span class="delimiter">
                                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                                </span>My Account
                            </nav>
                            <!-- .woocommerce-breadcrumb -->
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main">
                                    <div class="type-page hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce">
                                                <div class="customer-login-form">
                                                    <span class="or-text">or</span>
                                                    <div id="customer_login" class="u-columns col2-set">
                                                        <div class="u-column1 col-1">
                                                            <h2>Login</h2>
                                                            <form method="post" class="woocomerce-form woocommerce-form-login login">
                                                                <p class="before-login-text">
                                                                    Vestibulum lacus magna, faucibus vitae dui eget, aliquam fringilla. In et commodo elit. Class aptent taciti sociosqu ad litora.
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="username">Username or email address
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input type="text" required  class="input-text" name="username" id="username" value="" />
                                                                    <?php echo $erro ?>
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="password">Password
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input class="input-text" required type="password" name="password" id="password" />
                                                                    <?php echo $erro ?>
                                                                </p>
                                                                <p class="form-row">
                                                                    <input class="woocommerce-Button button" type="submit" value="Login" name="login">
                                                                    <label for="rememberme" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                                                    </label>
                                                                </p>
                                                                <p class="woocommerce-LostPassword lost_password">
                                                                    <a href="#">Lost your password?</a>
                                                                </p>
                                                            </form>
                                                            <!-- .woocommerce-form-login -->
                                                        </div>
                                                        <!-- .col-1 -->
                                                        <div class="u-column2 col-2">
                                                            <h2>Register</h2>
                                                            <form class="register" action="?action=dangky" method="post">
                                                                <p class="before-register-text">
                                                                    Create new account today to reap the benefits of a personalized shopping experience. Praesent placerat, est sed aliquet finibus.
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="reg_email">Tên đăng nhập
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input type="text" required value="" id="reg_email" name="new_name" class="woocommerce-Input woocommerce-Input--text input-text">
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="reg_email">Email
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input  type="email" value="" required id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text">
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="reg_email">Số điện thoại
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input type="number" value="" required id="reg_email" name="sdt" class="woocommerce-Input woocommerce-Input--text input-text">
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="reg_email">Địa chỉ
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input type="text" required value="" id="reg_email" name="address" class="woocommerce-Input woocommerce-Input--text input-text">
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="reg_password">Mật khẩu
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <input type="password" id="reg_password" name="new_password" class="woocommerce-Input woocommerce-Input--text input-text">
                                                                </p>
                                                                <p class="form-row form-row-wide">
                                                                    <label for="reg_password">Nhập lại mật khẩu
                                                                        <span class="">*</span>
                                                                    </label>
                                                                    <input type="password" id="reg_password" name="again_password" required class="woocommerce-Input woocommerce-Input--text input-text">
                                                                </p>
                                                                <input type="hidden" value="0" name="phan_quyen">
                                                                <p class="form-row">
                                                                    <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                                                                </p>
                                                                
                                                            </form>
                                                            <!-- .register -->
                                                        </div>
                                                        <!-- .col-2 -->
                                                    </div>
                                                    <!-- .col2-set -->
                                                </div>
                                                <!-- .customer-login-form -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .entry-content -->
                                    </div>
                                    <!-- .hentry -->
                                </main>
                                <!-- #main -->
                            </div>
                            <!-- #primary -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- #content -->';
}
?>
