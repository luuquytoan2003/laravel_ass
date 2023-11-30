<div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="home-v9-slider home-slider">
                                    <div class="slider-1" style="background-image: url(../assets/images/slider/home-v9-background.jpg);">
                                        <img class="img-1 " src="../assets/images/slider/home-v9-img-1.jpg" alt="">
                                        <img class="img-2" src="../assets/images/slider/home-v9-img-2.png" alt="">
                                        <img class="img-3" src="../assets/images/slider/home-v9-img-3.png" alt="">
                                        <img class="img-4" src="../assets/images/slider/home-v9-img-4.jpg" alt="">
                                        <div class="caption-button">
                                            <div class="button-left button">SHOP
                                                <span>Women</span>
                                            </div>
                                            <div class="button-right button">SHOP
                                                <span>men</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="section-products-tabs">
                                    <div class="section-products-tabs-wrap">
                                        <header class="section-header">
                                            <h2 class="section-title">Featured Products</h2>
                                            <ul role="tablist" class="nav justify-content-center">
                                                <li class="nav-item"><a class="nav-link active" href="#tab-59f89f09e80110" data-toggle="tab">All Glasses</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-59f89f09e80111" data-toggle="tab">Sunglasses</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-59f89f09e80112" data-toggle="tab">Eyeglasses</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-59f89f09e80113" data-toggle="tab">Special Collections</a></li>
                                            </ul>
                                        </header>
                                        <div class="tab-content">
                                            <div id="tab-59f89f09e80110" class="tab-pane active" role="tabpanel">
                                                <div class="products-carousel">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                <?php
                                                                    foreach(load_4_sanpham() as $pro_view):
                                                                        extract($pro_view);
                                                                ?>
                                                                <div class="product">
                                                                    <a href="index.php?action=chitietsanpham&id_sp=<?php echo $id_sp ?>" class="woocommerce-LoopProduct-link">
                                                                        <img src="../img/<?= explode(",",$image)[0] ?>" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"><?= $price_sale ?></span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title"><?= $name_sanpham?></h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="index.php?action=themgiohang" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach ?>
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                                
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-59f89f09e80111" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Barents</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Dino</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ara</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Apus Air</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Hubble</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Anselm</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Doria</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Auriga</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Scott</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Octans</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Nereide</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Canopo Wide</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-59f89f09e80112" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Octans</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Nereide</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ara</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Canopo Wide</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Barents</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Dino</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Hubble</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Apus Air</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Anselm</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Auriga</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Scott</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Doria</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-59f89f09e80113" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Auriga</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Nereide</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Hubble</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Scott</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Canopo Wide</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Apus Air</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Anselm</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Barents</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Octans</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ara</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Dino</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="../assets/images/glasses/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Doria</h2>
                                                                    </a>
                                                                    <div class="techmarket-product-rating">
                                                                        <div class="star-rating" title="Rated 0 out of 5">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(5)</span>
                                                                    </div>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                        </div>
                                        <!-- .tab-content -->
                                        <a href="index.php?action=shop" class="button">
                                            <i class="tm tm-free-return"></i>See More Products</a>
                                    </div>
                                    <!-- .section-products-tabs-wrap -->
                                </section>
                                <!-- .section-products-tabs -->
                                <div class="banner full-width-banner home-v9-full-banner stretch-full-width">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( ../assets/images/banner/9-2.jpg ); height: 637px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">Woods
                                                        <span>
                                                            <span>G21</span>
                                                            <span>
                                                                <span>Design By</span>
                                                                <br> Valentina Doe</span>
                                                        </span>
                                                    </h3>
                                                </div>
                                                <!-- .banner-info -->
                                                <span class="banner-action button">Get yours now
                                                    <i class="feature-icon d-flex ml-4 tm tm-long-arrow-right"></i>
                                                </span>
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .banner -->
                                <div class="banners techmarket-banner col-2-full-width-banner stretch-full-width">
                                    <div class="row">
                                        <div class="banner text-in-center">
                                            <a href="shop.html">
                                                <div style="background-color:#cedfe9; height:695px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">
                                                                <span>The</span>
                                                                <br>
                                                                <strong>Wooden Circle</strong>
                                                                <span>Collection</span>
                                                            </h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="banner-action button">View Collection
                                                            <i class="tm tm-long-arrow-right"></i>
                                                        </span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-center">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( ../assets/images/banner/9-1.jpg ); height: 695px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">&nbsp;</h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                    </div>
                                    <!-- .row -->
                                </div>
                                <!-- .banners -->
                                <div class="banner full-width-banner stretch-full-width help-banner">
                                    <a href="contact-v1.html">
                                        <div style="background-color:#eeeeee; height:495px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h4 class="pretitle">Get in Touch</h4>
                                                    <h3 class="title">How can we
                                                        <br>help you?</h3>
                                                    <h4 class="subtitle">Whether it be to add to your collection, that first special wristwatch or the restoration of a much loved heirloom we are here to help</h4>
                                                </div>
                                                <!-- .banner-info -->
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .banner -->
                                <section class="brands-carousel">
                                    <h2 class="sr-only">Brands Carousel</h2>
                                    <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="brands">
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>apple</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="../assets/images/brands/1.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>bosch</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="../assets/images/brands/2.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>cannon</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="../assets/images/brands/3.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>connect</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="../assets/images/brands/4.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>galaxy</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="../assets/images/brands/5.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>gopro</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="../assets/images/brands/6.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>handspot</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="../assets/images/brands/7.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>kinova</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="../assets/images/brands/8.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>nespresso</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="../assets/images/brands/9.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>samsung</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="../assets/images/brands/10.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>speedway</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="../assets/images/brands/11.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                            <div class="item">
                                                <a href="shop.html">
                                                    <figure>
                                                        <figcaption class="text-overlay">
                                                            <div class="info">
                                                                <h4>yoko</h4>
                                                            </div>
                                                            <!-- /.info -->
                                                        </figcaption>
                                                        <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="../assets/images/brands/12.png">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- .item -->
                                        </div>
                                    </div>
                                    <!-- .col-full -->
                                </section>
                                <!-- .brands-carousel -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->