<?php
 
?>
<div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="home-v1.html">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><a href="product-category.html">TV & Video</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><?php echo $ctsp['name_sanpham'] ?>
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="product">
                                    <div class="single-product-wrapper">
                                        <div class="product-images-wrapper thumb-count-4">
                                            <span class="onsale">-
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span><?php echo $ctsp['price_sale'] ?></span>
                                            </span>
                                            <!-- .onsale -->
                                            <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                                <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                        <figure class="woocommerce-product-gallery__wrapper ">
                                                            
                                                            <?php foreach(explode(",",$ctsp['image']) as $key => $value): ?>
                                                                <div data-thumb="assets/images/products/sm-card-3.jpg" class="woocommerce-product-gallery__image">
                                                                <a href="assets/images/products/big-card-2.jpg" tabindex="-1">
                                                                    <img width="600" height="600" src="../img/<?= $value ?>" class="attachment-shop_single size-shop_single" alt="">
                                                                </a>
                                                            </div>
                                                            <?php endforeach ?>
                                                            
                                                           
                                                        </figure>
                                                    </div>
                                                    <!-- .woocommerce-product-gallery -->
                                                </div>
                                                <!-- .techmarket-single-product-gallery-images -->
                                                <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                                    <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                        
                                                        <?php foreach(explode(",",$ctsp['image']) as $key => $value): ?>
                                                            <figure data-thumb="assets/images/products/sm-card-3.jpg" class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="../img/<?= $value ?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                        </figure>
                                                            <?php endforeach ?>
                                                    </figure>
                                                    <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                                </div>
                                                <!-- .techmarket-single-product-gallery-thumbnails -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery -->
                                        </div>
                                        <!-- .product-images-wrapper -->
                                        <div class="summary entry-summary">
                                            <div class="single-product-header">
                                                <h1 class="product_title entry-title"><?php echo $ctsp['name_sanpham'] ?></h1>
                                                <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a>
                                            </div>
                                            <!-- .single-product-header -->
                                            <div class="single-product-meta">
                                                <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag" href="product-category.html"><?php echo $ctsp['name_danhmuc'] ?></a>
                                                    </span>
                                                    <span class="sku_wrapper">ID DM:
                                                        <span class="sku"><?php echo $ctsp['id_dm'] ?></span>
                                                    </span>
                                                </div>
                                                <div class="product-label">
                                                    <div class="ribbon label green-label">
                                                        <span>A+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .single-product-meta -->
                                            <div class="rating-and-sharing-wrapper">
                                                <div class="woocommerce-product-rating">
                                                    <div class="star-rating">
                                                        <span style="width:100%">Rated
                                                            <strong class="rating">5.00</strong> out of 5 based on
                                                            <span class="rating">1</span> customer rating</span>
                                                    </div>
                                                    <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                                </div>
                                            </div>
                                            <!-- .rating-and-sharing-wrapper -->
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    
                                                   
                                                    <?php foreach(explode(",",$ctsp['chi_tiet_sp']) as $key => $value): ?>
                                                        <li> <?= $value ?> </li>
                                                            <?php endforeach ?>
                                                </ul>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                        </div>
                                        <!-- .entry-summary -->
                                        <div class="product-actions-wrapper">
                                            <div class="product-actions">
                                                <div class="availability">
                                                    Availability:
                                                    <p class="stock in-stock"><?php echo $ctsp['so_luong'] ?> stock</p>
                                                </div>
                                                <!-- .availability -->
                                                <div class="additional-info">
                                                    <i class="tm tm-free-delivery"></i>Item with
                                                    <strong>Free Delivery</strong>
                                                </div>
                                                <!-- .additional-info -->
                                                <p class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>2457.00</span>
                                                </p>
                                                <!-- .price -->
                                                <form class="variations_form cart">
                                                    <table class="variations">
                                                        <tbody>
                                                            <tr>
                                                                <td class="label">
                                                                    <label for="pa_screen-size">Screen Size</label>
                                                                </td>
                                                                <td class="value">
                                                                    <select data-show_option_none="yes" data-attribute_name="attribute_pa_screen-size" name="attribute_pa_screen-size" class="" id="pa_screen-size">
                                                                        <option value="">Choose an option</option>
                                                                        <option value="45-inch" class="attached enabled">45 Inch</option>
                                                                        <option value="60-inch" class="attached enabled">60 Inch</option>
                                                                    </select>
                                                                    <a href="#" class="reset_variations" style="visibility: hidden;">Clear</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="single_variation_wrap">
                                                        <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                            <div class="quantity">
                                                                <label for="quantity-input">Quantity</label>
                                                                <input id="quantity-input" type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                            </div>
                                                            <button class="single_add_to_cart_button button alt wc-variation-selection-needed" type="submit">Add to cart</button>
                                                            <input type="hidden" value="2471" name="add-to-cart">
                                                            <input type="hidden" value="2471" name="product_id">
                                                            <input type="hidden" value="0" class="variation_id" name="variation_id">
                                                        </div>
                                                    </div>
                                                    <!-- .single_variation_wrap -->
                                                </form>
                                                <!-- .variations_form -->
                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                            </div>
                                            <!-- .product-actions -->
                                        </div>
                                        <!-- .product-actions-wrapper -->
                                    </div>
                                    <!-- .single-product-wrapper -->
                                    <div class="techmarket-tabs techmarket-tabs-wrapper wc-tabs-wrapper">
                                        <div id="tab-accessories" class="techmarket-tab">
                                            <div class="tab-content">
                                                <ul role="tablist" class="nav tm-tabs">
                                                    <li class="accessories_tab active">
                                                        <a href="#tab-accessories">Accessories</a>
                                                    </li>
                                                    <li class="description_tab">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab">
                                                        <a href="#tab-reviews">Reviews (1)</a>
                                                    </li>
                                                </ul>
                                                <!-- /.ec-tabs -->
                                                <div class="accessories">
                                                    <div class="accessories-wrapper">
                                                        <div class="accessories-product columns-4">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../assets/images/products/14.jpg">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span>
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>997.00</span>
                                                                            </ins>
                                                                        </span>
                                                                        <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <?php foreach(explode(",",$ctsp['image']) as $key => $value): ?>
                                                                    <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../img/<?= $value ?>">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span>
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>997.00</span>
                                                                            </ins>
                                                                        </span>
                                                                        <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach ?>
                                                               
                                                                
                                                            </div>
                                                            <!-- /.products -->
                                                        </div>
                                                        <!-- .row -->
                                                        <div class="accessories-product-total-price">
                                                            <div class="total-price">
                                                                <span class="total-price-html price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>1,666.94
                                                                    </span>
                                                                </span>
                                                                <!-- .total-price-html -->
                                                                <span>Bundle Price for Selected items</span>
                                                            </div>
                                                            <!-- .total-price -->
                                                            <div class="accessories-add-all-to-cart">
                                                                <button class="button btn btn-primary add-all-to-cart" type="button">Add Bundle to cart</button>
                                                            </div>
                                                            <!-- .accessories-add-all-to-cart -->
                                                        </div>
                                                        <!-- .accessories-product-total-price -->
                                                    </div>
                                                    <!-- .accessories-wrapper -->
                                                </div>
                                                <!-- .accessories -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .techmarket-tab -->
                                        <div id="tab-description" class="techmarket-tab">
                                            <div class="tab-content">
                                                <ul role="tablist" class="nav tm-tabs">
                                                    <li class="accessories_tab">
                                                        <a href="#tab-accessories">Accessories</a>
                                                    </li>
                                                    <li class="description_tab active">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab">
                                                        <a href="#tab-reviews">Reviews (1)</a>
                                                    </li>
                                                </ul>
                                                <!-- /.ec-tabs -->
                                                <h2>Description</h2>
                                                <h1 style="text-align: center;">Exceptional color. Authentic images.</h1>
                                                <p style="text-align: center;max-width: 1160px;margin: auto auto 60px;">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                <div style="text-align: center;">
                                                    <iframe width="854" height="480" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/K5OGs8a3vlM?ecver=1"></iframe>
                                                </div>
                                                <div class="outer-wrap">
                                                    <div class="content-info">
                                                        <h1 style="text-align: left;">Dynamic brightness
                                                            <br> reveals hidden details</h1>
                                                        <p style="text-align: left;">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus
                                                            <br> scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit.
                                                            <br> Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                    </div>
                                                    <!-- .content-info -->
                                                    <div class="image-info">
                                                        <img src="../assets/images/products/des1.png" alt="">
                                                    </div>
                                                    <!-- .image-info -->
                                                </div>
                                                <!-- .outer-wrap -->
                                                <div class="outer-wrap">
                                                    <div class="image-info">
                                                        <img src="../assets/images/products/des2.png" class="alignnone" alt="">
                                                    </div>
                                                    <!-- .image-info -->
                                                    <div class="content-info">
                                                        <h1 style="text-align: right;">An incredible view,
                                                            <br> wherever you sit</h1>
                                                        <p style="text-align: right;">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus
                                                            <br> scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                    </div>
                                                    <!-- .content-info -->
                                                </div>
                                                <!-- .outer-wrap -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .techmarket-tab -->
                                        <div id="tab-specification" class="techmarket-tab">
                                            
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .techmarket-tab -->
                                        <div id="tab-reviews" class="techmarket-tab">
                                            <div class="tab-content">
                                                <ul role="tablist" class="nav tm-tabs">
                                                    <li class="accessories_tab">
                                                        <a href="#tab-accessories">Accessories</a>
                                                    </li>
                                                    <li class="description_tab">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab active">
                                                        <a href="#tab-reviews">Reviews (1)</a>
                                                    </li>
                                                </ul>
                                                <!-- /.ec-tabs -->
                                                <div class="techmarket-advanced-reviews" id="reviews">
                                                    <div class="advanced-review row">
                                                        <div class="advanced-review-rating">
                                                            <h2 class="based-title">Review (1)</h2>
                                                            <div class="avg-rating">
                                                                <span class="avg-rating-number">5.0</span>
                                                                <div title="Rated 5.0 out of 5" class="star-rating">
                                                                    <span style="width:100%"></span>
                                                                </div>
                                                            </div>
                                                            <!-- /.avg-rating -->
                                                            <div class="rating-histogram">
                                                                <div class="rating-bar">
                                                                    <div title="Rated 5 out of 5" class="star-rating">
                                                                        <span style="width:100%"></span>
                                                                    </div>
                                                                    <div class="rating-count">1</div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span class="rating-percentage" style="width:100%"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div title="Rated 4 out of 5" class="star-rating">
                                                                        <span style="width:80%"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div title="Rated 3 out of 5" class="star-rating">
                                                                        <span style="width:60%"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div title="Rated 2 out of 5" class="star-rating">
                                                                        <span style="width:40%"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="rating-bar">
                                                                    <div title="Rated 1 out of 5" class="star-rating">
                                                                        <span style="width:20%"></span>
                                                                    </div>
                                                                    <div class="rating-count zero">0</div>
                                                                    <div class="rating-percentage-bar">
                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.rating-histogram -->
                                                        </div>
                                                        <!-- /.advanced-review-rating -->
                                                        <div class="advanced-review-comment">
                                                            <div id="review_form_wrapper">
                                                                <div id="review_form">
                                                                    <div class="comment-respond" id="respond">
                                                                        <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                                        <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                                                                            <div class="comment-form-rating">
                                                                                <label>Danh gia cua ban</label>
                                                                                <p class="stars">
                                                                                    <span><a href="#" class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span>
                                                                                </p>
                                                                            </div>
                                                                            <p class="comment-form-comment">
                                                                                <label for="comment">Your Review</label>
                                                                                <textarea aria-required="true" rows="8" cols="45" name="comment-content" id="comment"></textarea>
                                                                            </p>
                                                                            <p class="comment-form-author">
                                        <input value="<?php $cmt['id_bl'] ?>" type="hidden" name="id_bl">
                                        <input type="hidden" name="name_user" value="<?php echo $_SESSION['username'] ?>">                                        <label for="author">Name
                                                                                    <span class="required">*</span>
                                                                                </label>
                                                                                <input type="text" aria-required="true" size="30" value="" name="nguoidung_binhluan" id="author">
                                                                            </p>
                                                                            <p class="comment-form-email">
                                                                                <label for="email">Email
                                                                                    <span class="required">*</span>
                                                                                </label>
                                                                                <input type="text" aria-required="true" size="30" value="" name="email_nguoi_bl" id="email">
                                                                            </p>
                                                                            <p class="form-submit">
                                                                                <input type="submit" value="Add Review" class="submit" id="submit" name="submit">
                                                                                <input type="hidden" id="comment_post_ID" value="185" name="comment_post_ID">
                                                                                <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                                                            </p>
                                                                        </form>
                                                                        <!-- /.comment-form -->
                                                                    </div>
                                                                    <!-- /.comment-respond -->
                                                                </div>
                                                                <!-- /#review_form -->
                                                            </div>
                                                            <!-- /#review_form_wrapper -->
                                                        </div>
                                                        <!-- /.advanced-review-comment -->
                                                    </div>
                                                    <!-- /.advanced-review -->
                                                    <div id="comments">
                                                        <ol class="commentlist">
                                                            <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                                <div class="comment_container" id="comment-83">
                                                                    <div class="comment-text">
                                                                        <div class="star-rating">
                                                                            <span style="width:100%">Rated
                                                                                <strong class="rating">5</strong> out of 5</span>
                                                                        </div>
                                                                        <?php foreach($cmt as $value) : ?>
                                                                          <p class="meta">
                                                                            <strong itemprop="author" class="woocommerce-review__author"><?= $value['name'] ?></strong>
                                                                            <span class="woocommerce-review__dash">&ndash;</span>
                                                                            <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished" class="woocommerce-review__published-date">June 21, 2017</time>
                                                                        </p>
                                                                        <div class="description">
                                                                            <p>Wow great product</p>
                                                                        </div>
                                                                        <?php endforeach ?>                                      <!-- /.description -->
                                                                    </div>
                                                                    <!-- /.comment-text -->
                                                                </div>
                                                                <!-- /.comment_container -->
                                                            </li>
                                                            <!-- /.comment -->
                                                        </ol>
                                                        <!-- /.commentlist -->
                                                    </div>
                                                    <!-- /#comments -->
                                                </div>
                                                <!-- /.techmarket-advanced-reviews -->
                                            </div>
                                            <!-- .tab-content -->
                                        </div>
                                        <!-- .techmarket-tab -->
                                    </div>
                                    <!-- .techmarket-tabs -->
                                    <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <section class="related">
                                            <header class="section-header">
                                                <h2 class="section-title">Related products</h2>
                                                <nav class="custom-slick-nav"></nav>
                                            </header>
                                            <!-- .section-header -->
                                            <div class="products">
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 399.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <span class="onsale">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                        </span>
                                                        <img src="../assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
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
                                                        <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 262.81</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <span class="onsale">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                        </span>
                                                        <img src="../assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> 262.81</span>
                                                            </ins>
                                                            <del>
                                                                <span class="amount">399.00</span>
                                                            </del>
                                                            <span class="amount"> </span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <span class="onsale">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                        </span>
                                                        <img src="../assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
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
                                                        <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="../assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                                <!-- /.product-outer -->
                                            </div>
                                        </section>
                                        <!-- .single-product-wrapper -->
                                    </div>
                                    <!-- .tm-related-products-carousel -->
                                    <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                                        <header class="section-header">
                                            <h2 class="section-title">Recently viewed products</h2>
                                            <nav class="custom-slick-nav"></nav>
                                        </header>
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-1.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Unlocked Android 6″ Inch 4.4.2 Dual Core</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $800</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-6.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $600</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-5.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $800</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="../assets/images/products/card-2.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $500</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Headset 3D Glasses VR for Android</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                    </div>
                                                </div>
                                                <!-- .woocommerce -->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->
                                    </section>
                                    <!-- .section-landscape-products-carousel -->
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
                                </div>
                                <!-- .product -->
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