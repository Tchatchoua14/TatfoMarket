@extends('font.master')
@section('title')
@section('content')
   <!--Body Content-->
   <div id="page-content">
    	<!--Image Banners-->
    	<div class="section imgBanners">
        	<div class="imgBnrOuter">
            	<div class="container-fluid">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-12 col-lg-6 pl-0 image-banner-1">
                        	<div class="inner topleft">
                            	<a href="#">	
                               		<img src="{{ asset('images/collection/image-banner-home15-1.jpg') }}" alt="200+ NEW ARRIVALS" title="200+ NEW ARRIVALS" class="blur-up lazyload" />
                                    <div class="ttl">
                                    	<h3>200+ NEW ARRIVALS</h3> Discover the latest designer and modern furniture and accessories from around the world. <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                                    </div>
                                </a>
                             </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 pr-0 image-banner-2">
                        	<div class="row">
                            	<div class="col-12 col-sm-6 col-md-6 col-lg-6 image-banner-3">
                                	<div class="inner topleft">
                                        <a href="#">	
                                            <img src="{{ asset('images/collection/image-banner-home15-2.jpg') }}" alt="DINNER TABLE" title="DINNER TABLE" class="blur-up lazyload" />
                                            <div class="ttl">
                                                <h5>DINNER TABLE</h5> <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                            	</div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                	<div class="inner topleft">
                                        <a href="#">	
                                            <img src="{{ asset('images/collection/image-banner-home15-3.jpg') }}" alt="PENDANT LIGHT" title="PENDANT LIGHT" class="blur-up lazyload" />
                                            <div class="ttl">
                                                <h5>PENDANT LIGHT</h5> <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                            	</div>   
                            </div>
                            <div class="row">
                            	<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                	<div class="inner topleft">
                                        <a href="#">	
                                            <img src="{{ asset('images/collection/image-banner-home15-4.jpg') }}" alt="200+ NEW ARRIVALS" title="200+ NEW ARRIVALS" class="blur-up lazyload" />
                                            <div class="ttl">
                                                <h5> MID-SUMMER SALE</h5> Up to 50% off <b>Explore Now </b><i class="anm anm-long-arrow-right"></i>
                                            </div>
                                        </a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Image Banners-->
        
        <!--Custom Image Banner-->
    	<div class="section imgBanners">
        	<div class="container-fluid">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                	<a href="#">
                    	<img src="{{ asset('images/collection/image-banner-home15-5.jpg') }}" alt="Save Big On Popular Designs" title="Save Big On Popular Designs" class="blur-up lazyload" />
                    </a>
                </div>
            </div>
        </div>
        <!--Custom Image Banner-->
        
        <!--Hand-picked Items-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Hand-picked Items</h2>
                            <p>Furniture should always be comfortable.<br>And always have a piece of art that you made somewhere in the home.</p>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="container-fluid">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="grid-products">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product1.jpg') }}" src="{{ asset('images/product-images/home15-product1.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product1-1.jpg') }}" src="{{ asset('images/product-images/home15-product1-1.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
            
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Chalkboard Side Table</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">$500.00</span>
                                            <span class="price">$600.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product1-1.jpg') }}" src="{{ asset('images/product-images/home15-product1-1.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product2-1.jpg') }}" src="{{ asset('images/product-images/home15-product2-1.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
            
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
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
                                    <!-- end product image -->
            
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Table Small</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$748.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                       <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product3.jpg') }}" src="{{ asset('images/product-images/home15-product3.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product1-2.jpg') }}" src="{{ asset('images/product-images/home15-product1-2.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
            
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
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
                                    <!-- end product image -->
            
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Lounge Chair</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$550.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product4.jpg') }}" src="{{ asset('images/product-images/home15-product4.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product4-1.jpg') }}" src="{{ asset('images/product-images/home15-product4-1.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
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
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html">Wall Clock</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$900.00</span>
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                                <!-- End product details -->
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product2-1.jpg') }}" src="{{ asset('images/product-images/home15-product2-1.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product1-2.jpg') }}" src="{{ asset('images/product-images/home15-product1-2.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
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
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html">Rochelle Lounge Chair</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                                <!-- End product details -->
                            </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <div class="product-image">
                                        <!--start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product5.jpg') }}" src="{{ asset('images/product-images/home15-product5.jpg') }}" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product5-1.jpg') }}" src="{{ asset('images/product-images/home15-product5-1.jpg') }}" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                            <!-- Start product button -->
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End product button -->
                                    </div>
                                    <!--End start product image -->
                                        
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Pendent Hanging Ceiling Lamp</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$348.60</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product6.jpg') }}" src="{{ asset('images/product-images/home15-product6.jpg') }}" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product6-1.jpg') }}" src="{{ asset('images/product-images/home15-product6-1.jpg') }}" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End product button -->
                                     </div>
                                     <!--End start product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Bottle Set</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$698.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                    
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product7.jpg') }}" src="{{ asset('images/product-images/home15-product7.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product7-1.jpg') }}" src="{{ asset('images/product-images/home15-product7-1.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a> 
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End product button -->
                                    </div>
                                    <!-- End start product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Hanging Light Dublin</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$748.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product4-1.jpg') }}" src="{{ asset('images/product-images/home15-product4-1.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product4-1.jpg') }}" src="{{ asset('images/product-images/home15-product4-1.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
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
                                <!-- end product image -->
        
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html">Rochelle Lounge Chair</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                </div>
                                <!-- End product details -->
                            </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <div class="product-image">
                                        <!--start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product5-1.jpg') }}" src="{{ asset('images/product-images/home15-product5-1.jpg') }}" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product5-1.jpg') }}" src="{{ asset('images/product-images/home15-product5-1.jpg') }}" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                            <!-- Start product button -->
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End product button -->
                                    </div>
                                    <!--End start product image -->
                                        
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Pendent Hanging Ceiling Lamp</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$348.60</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product6-1.jpg') }}" src="{{ asset('images/product-images/home15-product6-1.jpg') }}" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product6-1.jpg') }}" src="{{ asset('images/product-images/home15-product6-1.jpg') }}" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End product button -->
                                     </div>
                                     <!--End start product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Bottle Set</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$698.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                    
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product-layout-1.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/home15-product7-1.jpg') }}" src="{{ asset('images/product-images/home15-product7-1.jpg') }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/home15-product7-1.jpg') }}" src="{{ asset('images/product-images/home15-product7-1.jpg') }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a> 
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End product button -->
                                    </div>
                                    <!-- End start product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="product-layout-1.html">Hanging Light Dublin</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$748.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                		</div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--End Hand-picked Items-->
        
        <!--Home LookBook Section-->
        <div class="section home-lookbook">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
                    	<img src="{{ asset('images/collection/home15-lookbook1.jpg') }}" alt="" title="" />
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
                    	<img src="{{ asset('images/collection/home15-lookbook2.jpg') }}" alt="" title="" />
                    </div>
                </div>
                <div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center custom-text">
                    	<p class="mb-4">Your home should be a story of who you are, and be a collection of what you love. A table, a chair, a bowl of fruit and a violin; what else does a man need to be happy?</p>
                        <a class="btn" href="#">View Lookbook</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home LookBook Section-->
        
        <!--Store Information-->
        <div class="section store-information">
        	<div class="container-fluid">
            	<div class="row">
            		<ul class="display-table store-info">
              <li class="display-table-cell"> <i class="anm anm-truck-l" aria-hidden="true"></i>
                <h5>Free Shipping</h5>
                <span class="sub-text">
                Free shipping on all US order
                </span> </li>
              <li class="display-table-cell"> <i class="anm anm-phone-l" aria-hidden="true"></i>
                <h5>Online Support 24/7</h5>
                <span class="sub-text">
                Support online 24 hours a day
                </span> </li>
              <li class="display-table-cell"> <i class="anm anm-money-bill-ar" aria-hidden="true"></i>
                <h5>Money Return</h5>
                <span class="sub-text">
                Back guarantee under 7 days
                </span> </li>
              <li class="display-table-cell"> <i class="anm anm-gift-l" aria-hidden="true"></i>
                <h5>Member Discount</h5>
                <span class="sub-text">
                On every order over $100.00
                </span>
               </li>
            </ul>
            	</div>
            </div>
        </div>
        <!--End Store Information-->
    </div>
    <!--End Body Content-->
@endsection
@section('script')
    <script>
        	/*--------------------------------------
			Promotion / Notification Cookie Bar 
		  -------------------------------------- */
		  if(Cookies.get('promotion') != 'true') {   
			 $(".notification-bar").show();         
		  }
		  $(".close-announcement").on('click',function() {
			$(".notification-bar").slideUp();  
			Cookies.set('promotion', 'true', { expires: 1});  
			return false;
		  });
	</script>
    <!--End For Newsletter Popup-->
@endsection 