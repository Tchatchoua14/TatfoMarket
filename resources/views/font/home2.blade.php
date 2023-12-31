@extends('font.master')
@section('title', 'home2')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
  <!--Body Content-->
  <div id="page-content" class="mt-5">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home2-default-banner1.jpg') }}" src="{{ asset('images/slideshow-banners/home2-default-banner1.jpg') }}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">Our New Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Save up to 50% Off</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home2-default-banner2.jpg') }}" src="{{ asset('images/slideshow-banners/home2-default-banner2.jpg') }}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                        <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
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
        <!--Weekly Bestseller-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Weekly Bestseller</h2>
                            <p>Our most popular products based on sales</p>
                        </div>
						<div class="productSlider grid-products">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image29.jpg') }}" src="{{ asset('images/product-images/product-image29.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image29-1.jpg') }}" src="{{ asset('images/product-images/product-image29-1.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image29.jpg') }}" alt="image" title="product">
                                        <!-- Variant Image-->
                                        <!-- product label -->
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start -->
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- countdown end -->

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
                                        <a href="product-layout-1.html">Edna Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                    
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image2.jpg') }}" src="{{ asset('images/product-images/product-image2.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image2-1.jpg') }}" src="{{ asset('images/product-images/product-image2-1.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image1.jpg') }}" alt="image" title="product">
                                        <!-- Variant Image-->
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
                                            <a class="wishlist add-to-wishlist" href="{{ route('wishlist') }}">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="{{ route('compare1') }}" title="Add to Compare">
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
                                        <a href="product-layout-1.html">Elastic Waist Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                    
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                   <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image30.jpg') }}" src="{{ asset('images/product-images/product-image30.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image30-1.jpg') }}" src="{{ asset('images/product-images/product-image30-1.jpg') }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image30.jpg') }}" alt="image" title="product">
                                        <!-- Variant Image-->
                                        <!-- product label -->
                                        <div class="product-labels rounded"><span class="lbl pr-label2">Hot</span></div>
                                        <!-- End product label -->
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
                                        <a href="product-layout-1.html">3/4 Sleeve Kimono Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                    
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image4.jpg') }}" src="{{ asset('images/product-images/product-image4.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image4-1.jpg') }}" src="{{ asset('images/product-images/product-image4-1.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image3.jpg') }}" alt="image" title="product">
                                        <!-- Variant Image-->
                                        <!-- product label -->
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
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
                                        <a href="product-layout-1.html">Cape Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$900.00</span>
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                    
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image24.jpg') }}" src="{{ asset('images/product-images/product-image24.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image24-1.jpg') }}" src="{{ asset('images/product-images/product-image24-1.jpg') }}" alt="image" title="product" />
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image24.jpg') }}" alt="image" title="product">
                                        <!-- Variant Image-->
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
                                        <a href="product-layout-1.html">Paper Dress</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                  
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--Weekly Bestseller-->
        <!--Parallax Section-->
        <div class="section">
            <div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="{{ asset('images/parallax-banners/parallax-banner.jpg') }}" alt="" />
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text left text-small font-bold">
                            <h2 class="h2 mega-title">Belle <br> The best choice for your store</h2>
                            <div class="rte-setting mega-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <a href="#" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Section-->
        <!--New Arrivals-->
        <div class="product-rows section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2">New Arrivals</h2>
                            <p>Grab these new items before they are gone!</p>
                        </div>
            		</div>
                </div>
	            <div class="grid-products">
                	<div class="row">
                        <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image31.jpg') }}" src="{{ asset('images/product-images/product-image31.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image31-1.jpg') }}" src="{{ asset('images/product-images/product-image31-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image31.jpg') }}" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->
                                
                                <!-- countdown start -->
                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                <!-- countdown end -->
    
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
                                    <a href="product-layout-1.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image25.jpg') }}" src="{{ asset('images/product-images/product-image25.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image25-1.jpg') }}" src="{{ asset('images/product-images/product-image25-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image25.jpg') }}" alt="image" title="product">
                                    <!-- Variant Image-->
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
                                    <a href="product-layout-1.html">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                               <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image28.jpg') }}" src="{{ asset('images/product-images/product-image28.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image28-1.jpg') }}" src="{{ asset('images/product-images/product-image28-1.jpg') }}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image28.jpg') }}" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl pr-label2">Hot</span></div>
                                    <!-- End product label -->
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
                                    <a href="product-layout-1.html">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image27.jpg') }}" src="{{ asset('images/product-images/product-image27.jpg') }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image27-1.jpg') }}" src="{{ asset('images/product-images/product-image27-1.jpg') }}" alt="image" title="product" />
                                <!-- End hover image -->
                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image27.jpg') }}" alt="image" title="product">
                                <!-- Variant Image-->
                                <!-- product label -->
                                <div class="product-labels rounded"><span class="lbl on-sale">Sale</span></div>
                                <!-- End product label -->
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
                                <a href="product-layout-1.html">Cape Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">$900.00</span>
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->
                            <!-- Color Variant -->
                            
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    </div>
                    <div class="row">
	                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image22.jpg') }}" src="{{ asset('images/product-images/product-image22.jpg') }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image22-1.jpg') }}" src="{{ asset('images/product-images/product-image22-1.jpg') }}" alt="image" title="product" />
                                <!-- End hover image -->
                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image22.jpg') }}" alt="image" title="product">
                                <!-- Variant Image-->
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
                                <a href="product-layout-1.html">Paper Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->
                            <!-- Color Variant -->
                           
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    	<div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <div class="product-image">
                                <!--start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image19.jpg') }}" src="{{ asset('images/product-images/product-image19.jpg') }}" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image19-1.jpg') }}" src="{{ asset('images/product-images/product-image19-1.jpg') }}" alt="image" title="product" />
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
                                    <a href="product-layout-1.html">Romary Dress</a>
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
                        <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image18.jpg') }}" src="{{ asset('images/product-images/product-image18.jpg') }}" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image18-1.jpg') }}" src="{{ asset('images/product-images/product-image18-1.jpg') }}" alt="image" title="product" />
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
                                    <a href="product-layout-1.html">Lima Shirt</a>
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
						<div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image26.jpg') }}" src="{{ asset('images/product-images/product-image26.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image26-1.jpg') }}" src="{{ asset('images/product-images/product-image26-1.jpg') }}" alt="image" title="product">
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
                                        <a class="wishlist add-to-wishlist" href="{{ route('wishlist') }}" title="Add to Wishlist">
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
                                    <a href="product-layout-1.html">Elastic Waist Dress</a>
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
                    	<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        	<a href="shop-left-sidebar.html" class="btn">View all</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>	
        <!--End Featured Product-->
        
        <!--Logo Slider-->
        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                        	<h2 class="h2">The Most Loved Brands</h2>
                    	</div>
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
 
@endsection