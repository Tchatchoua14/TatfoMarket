@extends('font.master')
@section('title', 'home7')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
    <!--Body Content-->
    <div id="page-content" class="mt-5">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide slideshow--medium">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('images/slideshow-banners/home7-banner1.jpg') }}" src="{{ asset('images/slideshow-banners/home7-banner1.jpg') }}" alt="Modern Sophistication" title="Modern Sophistication" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content classic left">
                            	<div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">Modern Sophistication</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Ecco Sharp comfort and innovation</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slideshow--medium">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('images/slideshow-banners/home7-banner2.jpg') }}" src="{{ asset('images/slideshow-banners/home7-banner2.jpg') }}" alt="New Season Styles" title="New Season Styles" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content classic middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">New Season Styles</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Break all boundaries with our new arrival footwears</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        
        <!--Shop the Latest & Greatest Shoes-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Shop the Latest &amp; Greatest Shoes</h2>
                            <p>Shop The most popular shoes from belle store</p>
                        </div>
                    </div>
            	</div>
                <div class="grid-products grid-products-hover-btn">
	                <div class="productSlider-style1">
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('images/product-images/home7-product1.jpg') }}" src="{{ asset('images/product-images/home7-product1.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('images/product-images/home7-product1-1.jpg') }}" src="{{ asset('images/product-images/home7-product1-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Camoscio Zip Heel</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('images/product-images/home7-product2.jpg') }}" src="{{ asset('images/product-images/home7-product2.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('images/product-images/home7-product2-1.jpg') }}" src="{{ asset('images/product-images/home7-product2-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Camoscio Heel</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('images/product-images/home7-product3.jpg') }}" src="{{ asset('images/product-images/home7-product3.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('images/product-images/home7-product3-1.jpg') }}" src="{{ asset('images/product-images/home7-product3-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Aqualina Sandal</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$471.51</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('images/product-images/home7-product4.jpg') }}" src="{{ asset('images/product-images/home7-product4.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('images/product-images/home7-product4-1.jpg') }}" src="{{ asset('images/product-images/home7-product4-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Glove Heel</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$629.55</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('images/product-images/home7-product5.jpg') }}" src="{{ asset('images/product-images/home7-product5.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('images/product-images/home7-product5-1.jpg') }}" src="{{ asset('images/product-images/home7-product5-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Aqualina Sandal</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$471.51</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('images/product-images/home7-product6.jpg') }}" src="{{ asset('images/product-images/home7-product6.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('images/product-images/home7-product6-1.jpg') }}" src="{{ asset('images/product-images/home7-product6-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Avalon Sandal</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$420.00</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Shop the Latest & Greatest Shoes-->
        
        <!--Logo Slider-->
        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                		<div class="logo-bar">
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo1.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo2.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo3.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo4.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo5.png') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/logo/brandlogo6.png') }}" alt="" title="" />
                    </div>
                </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
       
        <!--Trendy Collection-->
        <div class="section custom-content-style1">
        	<div class="container">
            	<div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Trendy Collection</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <h4 class="h3">
                                <a href="#">Warm layers, fall colors and trendy styles are here for fall!</a>   
                            </h4>
                            <div class="rte-setting"><p>UP TO 60% OFF </p></div>
                            <a class="btn" href="#">Shop Women's</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/shoes-collection1.jpg') }}" src="{{ asset('images/collection/shoes-collection1.jpg') }}" alt="" title="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/shoes-collection2.jpg') }}" src="{{ asset('images/collection/shoes-collection2.jpg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="custom-text text-center">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/shoes-collection3.jpg') }}" src="{{ asset('images/collection/shoes-collection3.jpg') }}" alt="" title="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <h4 class="h3">
                                <a href="#">Stay warm and look cool in fall styles for guys!</a>   
                            </h4>
                            <div class="rte-setting"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, velit...</p></div>
                            <a class="btn" href="#">Shop Women's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Trendy Collection-->
        
        <!--Three Column Products-->
        <div class="section three-column-pro">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Most Popular</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product1.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product2.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product3.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Aqualina Sandal</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Weekly Top Seller</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product4.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">White Sneaker</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product5.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Suede Loafers - Black/Blue</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product6.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Stiro Oxford in Slate</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Flash Sale</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product1.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product2.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{ asset('images/product-images/home7-product3.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Aqualina Sandal</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>    
        <!--End Three Column Products-->
        
    </div><!--End Body Content-->
@endsection
