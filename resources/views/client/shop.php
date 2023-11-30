<div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="index.php?action=home">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Shop
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="shop-archive-header">
                                    <div class="jumbotron">
                                        <div class="jumbotron-img">
                                            <img width="416" height="283" alt="" src="assets/images/products/jumbo.jpg" class="jumbo-image alignright">
                                        </div>
                                        <div class="jumbotron-caption">
                                            <h3 class="jumbo-title">Virtual Reality Headsets</h3>
                                            <p class="jumbo-subtitle">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.
                                                <br>
                                                <br>Maecenas in sodales nisl. Pellentesque ac nibh mi. Ut lobortis odio nulla, congue rhoncus risus facilisis eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                <a href="#">read more <i class="tm tm-long-arrow-right"></i></a>
                                            </p>
                                        </div>
                                        <!-- .jumbotron-caption -->
                                    </div>
                                    <!-- .jumbotron -->
                                </div>
                                <!-- .shop-archive-header -->
                                <div class="shop-control-bar">
                                    <div class="handheld-sidebar-toggle">
                                        <button type="button" class="btn sidebar-toggler">
                                            <i class="fa fa-sliders"></i>
                                            <span>Filters</span>
                                        </button>
                                    </div>
                                    <!-- .handheld-sidebar-toggle -->
                                    <h1 class="woocommerce-products-header__title page-title">Shop</h1>
                                    <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                                <i class="tm tm-grid-small"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                                <i class="tm tm-grid"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                                                <i class="tm tm-listing-large"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                                <i class="tm tm-listing"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
                                                <i class="tm tm-listing-small"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- .shop-view-switcher -->
                                    <form class="form-techmarket-wc-ppp" method="POST">
                                        <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                            <option value="20">Show 20</option>
                                            <option value="40">Show 40</option>
                                            <option value="-1">Show All</option>
                                        </select>
                                        <input type="hidden" value="5" name="shop_columns">
                                        <input type="hidden" value="15" name="shop_per_page">
                                        <input type="hidden" value="right-sidebar" name="shop_layout">
                                    </form>
                                    <!-- .form-techmarket-wc-ppp -->
                                    <form method="get" class="woocommerce-ordering">
                                        <select class="orderby" name="orderby">
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option selected="selected" value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                        <input type="hidden" value="5" name="shop_columns">
                                        <input type="hidden" value="15" name="shop_per_page">
                                        <input type="hidden" value="right-sidebar" name="shop_layout">
                                    </form>
                                    <!-- .woocommerce-ordering -->
                                    <nav class="techmarket-advanced-pagination">
                                        <form class="form-adv-pagination" method="post">
                                            <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                        </form> of 5<a href="#" class="next page-numbers">→</a>
                                    </nav>
                                    <!-- .techmarket-advanced-pagination -->
                                </div>
                                <!-- .shop-control-bar -->
                                <?php
                                    $item_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                                    $page = !empty($_GET['page'])?$_GET['page']:1;
                                    $offset = ($page - 1 ) * $item_page;
                                    // 2-1 1 *5 5
                                    $record = load_all_sanpham();
                                    
                                    $record = count($record);
                                    // echo $item_page;die;
                                    $totalpage = ceil($record / $item_page);
                                    
                                ?>
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane active" role="tabpanel">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                                <?php foreach(load_sampham_phantrang($item_page,$offset) as $view):
                                                    extract($view);
                                                ?>
                                                <div class="product">

                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <!-- .yith-wcwl-add-to-wishlist -->
                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../img/<?= $image?>">
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span><?= $price?> VND</span>
                                                        </span>
                                                        <h2 class="woocommerce-loop-product__title"><?= $name_sanpham?></h2>
                                                    </a>
                                                    <!-- .woocommerce-LoopProduct-link -->
                                                    <div class="hover-area">
                                                        <a class="button" href="cart.html">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                    <!-- .hover-area -->
                                                </div>
                                                <?php endforeach ?>
                                                <!-- .product -->
                                                
                                                <!-- .product -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="grid-extended" class="tab-pane" role="tabpanel">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                            <?php foreach(load_sampham_phantrang($item_page,$offset) as $view):
                                                    extract($view);
                                                ?>
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <!-- .yith-wcwl-add-to-wishlist -->
                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../img/<?= $image?>">
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span><?= $price?></span>
                                                        </span>
                                                        <h2 class="woocommerce-loop-product__title"><?= $name_sanpham?></h2>
                                                    </a>
                                                    <!-- .woocommerce-LoopProduct-link -->
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(1)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                    <span class="sku_wrapper">SKU:
                                                        <span class="sku">5487FB8/13</span>
                                                    </span>
                                                    <div class="woocommerce-product-details__short-description">
                                                        <ul>
                                                            <li>Multimedia Speakers</li>
                                                            <li>120 watts peak</li>
                                                            <li>Front-facing subwoofer</li>
                                                            <li>Refresh Rate: 120Hz (Effective)</li>
                                                            <li>Backlight: LED</li>
                                                            <li>Smart Functionality: Yes, webOS 3.0</li>
                                                            <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                            <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                        </ul>
                                                    </div>
                                                    <!-- .woocommerce-product-details__short-description -->
                                                    <a class="button product_type_simple add_to_cart_button" href="cart.html">Add to cart</a>
                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                </div>
                                                <?php endforeach ?>
                                                <!-- .product -->
                                                
                                                <!-- .product -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="list-view-large" class="tab-pane" role="tabpanel">
                                        <div class="woocommerce columns-1">
                                            <div class="products">
                                            <?php foreach(load_sampham_phantrang($item_page,$offset) as $view):
                                                    extract($view);
                                                ?>
                                                <div class="product list-view-large ">
                                                    <div class="media">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../img/<?= $image?>">
                                                        <div class="media-body">
                                                            <div class="product-info">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                    <h2 class="woocommerce-loop-product__title"><?= $name_sanpham?></h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(1)</span>
                                                                    </div>
                                                                </a>
                                                                <!-- .woocommerce-LoopProduct-link -->
                                                                <div class="brand">
                                                                    <a href="#">
                                                                        <img alt="galaxy" src="assets/images/brands/5.png">
                                                                    </a>
                                                                </div>
                                                                <!-- .brand -->
                                                                <div class="woocommerce-product-details__short-description">
                                                                    <ul>
                                                                        <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                        <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .woocommerce-product-details__short-description -->
                                                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                                                            </div>
                                                            <!-- .product-info -->
                                                            <div class="product-actions">
                                                                <div class="availability">
                                                                    Availability:
                                                                    <p class="stock in-stock">1000 in stock</p>
                                                                </div>
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span><?= $price?> VND</span>
                                                                </span>
                                                                <!-- .price -->
                                                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                            </div>
                                                            <!-- .product-actions -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                                <?php endforeach ?>
                                                <!-- .product -->
                                                
                                                <!-- .product -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="list-view" class="tab-pane" role="tabpanel">
                                        <div class="woocommerce columns-1">
                                            <div class="products">
                                            <?php foreach(load_sampham_phantrang($item_page,$offset) as $view):
                                                    extract($view);
                                                ?>
                                                <div class="product list-view ">
                                                    <div class="media">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../img/<?= $image?>">
                                                        <div class="media-body">
                                                            <div class="product-info">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                    <h2 class="woocommerce-loop-product__title"><?= $name_sanpham?></h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(1)</span>
                                                                    </div>
                                                                </a>
                                                                <!-- .woocommerce-LoopProduct-link -->
                                                                <div class="brand">
                                                                    <a href="#">
                                                                        <img alt="galaxy" src="assets/images/brands/5.png">
                                                                    </a>
                                                                </div>
                                                                <!-- .brand -->
                                                                <div class="woocommerce-product-details__short-description">
                                                                    <ul>
                                                                        <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                        <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .woocommerce-product-details__short-description -->
                                                            </div>
                                                            <!-- .product-info -->
                                                            <div class="product-actions">
                                                                <div class="availability">
                                                                    Availability:
                                                                    <p class="stock in-stock">1000 in stock</p>
                                                                </div>
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span><?= $price?></span>
                                                                </span>
                                                                <!-- .price -->
                                                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                            </div>
                                                            <!-- .product-actions -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                                <?php endforeach ?>
                                                <!-- .product -->
                                                
                                                <!-- .product -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="list-view-small" class="tab-pane" role="tabpanel">
                                        <div class="woocommerce columns-1">
                                            <div class="products">
                                            <?php foreach(load_sampham_phantrang($item_page,$offset) as $view):
                                                    extract($view);
                                                ?>
                                                <div class="product list-view-small ">
                                                    <div class="media">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../img/<?= $image?>">
                                                        <div class="media-body">
                                                            <div class="product-info">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                    <h2 class="woocommerce-loop-product__title"><?= $name_sanpham?></h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(1)</span>
                                                                    </div>
                                                                </a>
                                                                <!-- .woocommerce-LoopProduct-link -->
                                                                <div class="woocommerce-product-details__short-description">
                                                                    <ul>
                                                                        <li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
                                                                        <li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
                                                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
                                                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- .woocommerce-product-details__short-description -->
                                                            </div>
                                                            <!-- .product-info -->
                                                            <div class="product-actions">
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span><?= $price?></span>
                                                                </span>
                                                                <!-- .price -->
                                                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                            </div>
                                                            <!-- .product-actions -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                                <?php endforeach ?>
                                                <!-- .product -->
                                                
                                                <!-- .product -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                </div>
                                <!-- .tab-content -->
                                <?php
                                    $show = 0; 
                                    
                                 ?>
                                <div class="shop-control-bar-bottom">
                                    <form class="form-techmarket-wc-ppp" method="POST">
                                        <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                            <option value="20">Show 20 <?php $show=20 ?></option>
                                            <option value="40">Show 40 <?php $show=40 ?></option>
                                            <option value="-1">Show All<?php $show=20 ?></option>
                                        </select>   
                                        <input type="hidden" value="5" name="shop_columns">
                                        <input type="hidden" value="15" name="shop_per_page">
                                        <input type="hidden" value="right-sidebar" name="shop_layout">
                                    </form>
                                    <!-- .form-techmarket-wc-ppp -->
                                    <p class="woocommerce-result-count">
                                        Showing 1&ndash;15 of <?=$record?> results
                                    </p>
                                    <!-- .woocommerce-result-count -->
                                    <nav class="woocommerce-pagination">
                                        <ul class="page-numbers">
                                            <?php
                                                for($i =1;$i<=$totalpage;$i++):
                                            ?>
                                            <li><a href="index.php?action=shop&per_page=5&page=<?= $i ?>" class="page-numbers"><?= $i ?></a></li>
                                            
                                            <?php endfor ?>
                                        </ul>
                                        <!-- .page-numbers -->
                                    </nav>
                                    <!-- .woocommerce-pagination -->
                                </div>
                                <!-- .shop-control-bar-bottom -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->

                        <!-- Phân trang danh muc -->
                        <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                            <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
                                <ul class="product-categories ">
                                    <li class="product_cat">
                                        <span>Browse Categories</span>
                                        <ul>
                                            <?php 
                                               foreach(load_all_danhmuc() as $view):
                                                extract($view); 
                                            ?>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span><?= $name_danhmuc?></a>
                                            </li>
                                            <?php endforeach?>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- lọc theo giá -->
                            <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                                <span class="gamma widget-title">Filters</span>
                                <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                                    <p>
                                        <span class="gamma widget-title">Filter by price</span>
                                        <div class="price_slider_amount">
                                            <input id="amount" type="text" placeholder="Min price" data-min="6" value="33" name="min_price" style="display: none;">
                                            <button class="button" type="submit">Filter</button>
                                        </div>
                                        <div id="slider-range" class="price_slider"></div>
                                </div>
                                <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-2">
                                    <span class="gamma widget-title">Brands</span>
                                    <ul>
                                        <li class="wc-layered-nav-term ">
                                            <a href="#">apple</a>
                                            <span class="count">(2)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">bosch</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">cannon</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">connect</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">galaxy</a>
                                            <span class="count">(3)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">gopro</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">kinova</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">samsung</a>
                                            <span class="count">(1)</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce widget_layered_nav -->
                                <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
                                    <span class="gamma widget-title">Color</span>
                                    <ul>
                                        <li class="wc-layered-nav-term "><a href="#">Black</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Blue</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Green</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Red</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Green</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Red</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                                            <span class="count">(5)</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce widget_layered_nav -->
                            </div>
                            <div class="widget widget_techmarket_products_carousel_widget">
                                <section id="single-sidebar-carousel" class="section-products-carousel">
                                    <header class="section-header">
                                        <h2 class="section-title">Latest Products</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#single-sidebar-carousel .custom-slick-nav&quot;}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products">
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-products-carousel -->
                            </div>
                            <!-- .widget_techmarket_products_carousel_widget -->
                        </div>
                        <!-- #secondary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->
            <div class="col-full">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="assets/images/brands/7.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="assets/images/brands/8.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="assets/images/brands/9.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="assets/images/brands/10.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="assets/images/brands/11.png">
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
                                        <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="assets/images/brands/12.png">
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
            <!-- .col-full -->