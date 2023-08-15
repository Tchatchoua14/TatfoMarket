@extends('font.master')
@section('title')
@section('content')
 <!--Body Content-->
 <div id="page-content">
			<!--Home slider-->
            <div class="slideshow slideshow-wrapper pb-4">
                <div class="home-slideshow">
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload desktop-show" data-src="{{ asset('images/slideshow-banners/home3-banner.jpg') }}" src="{{ asset('images/slideshow-banners/home3-banner.jpg') }}" alt="There is Beauty in Simplycity" title="There is Beauty in Simplycity" />
                            <img class="blur-up lazyload mobile-show" data-src="{{ asset('images/slideshow-banners/home3-banner-mobile.jpg') }}" src="{{ asset('images/slideshow-banners/home3-banner-mobile.jpg') }}" alt="There is Beauty in Simplycity" title="There is Beauty in Simplycity" />
                            <div class="slideshow__text-wrap slideshow__overlay classic middle">
                                <div class="slideshow__text-content left">
                                    <div class="container">
                                        <div class="wrap-caption left">
                                            <h2 class="h1 mega-title slideshow__title">There is Beauty in Simplycity</h2>
                                            <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
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
            
            <!--Small Banners-->
            <div class="section imgBanners pt-0">
            	<div class="container">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="{{ asset('images/home3-small-banner1.jpg') }}" src="{{ asset('images/home3-small-banner1.jpg') }}" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $70<h5>Shoes Collection</h5></div>
                                </div>
                            </div>    	
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 pr-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="{{ asset('images/home3-small-banner2.jpg') }}" src="{{ asset('images/home3-small-banner2.jpg') }}" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $50<h5>Trendy Bags</h5></div>
                                </div>
                            </div>  
                            <div class="imgBnrOuter mt-4">
                                <div class="inner btmright">
                                    <img data-src="{{ asset('images/home3-small-banner3.jpg') }}" src="{{ asset('images/home3-small-banner3.jpg') }}" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $20<h5>ACCESSORIES</h5></div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!--End Small Banners-->
            
            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2 heading-font">Top Sellers</h2>
                            </div>
                            <div class="tabs-listing">
                                <ul class="tabs clearfix">
                                    <li class="active" rel="tab1">Women</li>
                                    <li rel="tab2">Men</li>
                                    <li rel="tab3">Sale</li>
                                </ul>
                                <div class="tab_container">
                                    <div id="tab1" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Edna Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image1.jpg') }}" src="{{ asset('images/product-images/product-image1.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image1-1.jpg') }}" src="{{ asset('images/product-images/product-image1-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                    
                                                    <!-- countdown start -->
                                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                                    <!-- countdown end -->
                                                </div>
                                                <!-- end product image -->
                                                <!-- Start product button -->
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="{{ route('whistlist') }}">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="old-price">$500.00</span>
                                                        <span class="price">$600.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                     <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Elastic Waist Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image2.jpg') }}" src="{{ asset('images/product-images/product-image2.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image2-1.jpg') }}" src="{{ asset('images/product-images/product-image2-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$748.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">3/4 Sleeve Kimono Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image3.jpg') }}" src="{{ asset('images/product-images/product-image3.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image3-1.jpg') }}" src="{{ asset('images/product-images/product-image3-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$550.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Cape Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image4.jpg') }}" src="{{ asset('images/product-images/product-image4.jpg') }}" alt="image" title="product" />
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image4-1.jpg') }}" src="{{ asset('images/product-images/product-image4-1.jpg') }}" alt="image" title="product" />
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels round"><span class="lbl on-sale">Sale</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="old-price">$900.00</span>
                                                        <span class="price">$788.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Paper Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image5.jpg') }}" src="{{ asset('images/product-images/product-image5.jpg') }}" alt="image" title="product" />
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image5-1.jpg') }}" src="{{ asset('images/product-images/product-image5-1.jpg') }}" alt="image" title="product" />
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$550.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Zipper Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image6.jpg') }}" src="{{ asset('images/product-images/product-image6.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image6-1.jpg') }}" src="{{ asset('images/product-images/product-image6-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels round"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$788.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Zipper Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image7.jpg') }}" src="{{ asset('images/product-images/product-image7.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image7-1.jpg') }}" src="{{ asset('images/product-images/product-image7-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$748.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Workers Shirt Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image8.jpg') }}" src="{{ asset('images/product-images/product-image8.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image8-1.jpg') }}" src="{{ asset('images/product-images/product-image8-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$238.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Watercolor Sport Jacket in Brown/Blue</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image9.jpg') }}" src="{{ asset('images/product-images/product-image9.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image9-1.jpg') }}" src="{{ asset('images/product-images/product-image9-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$348.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Washed Wool Blazer</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image10.jpg') }}" src="{{ asset('images/product-images/product-image10.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image10-1.jpg') }}" src="{{ asset('images/product-images/product-image10-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$1,078.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Azur Bracelet in Blue Azurite</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image11.jpg') }}" src="{{ asset('images/product-images/product-image11.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image11-1.jpg') }}" src="{{ asset('images/product-images/product-image11-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$168.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Bi-Goutte Earrings</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image12.jpg') }}" src="{{ asset('images/product-images/product-image12.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image12-1.jpg') }}" src="{{ asset('images/product-images/product-image12-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$58.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Ashton Necklace</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image13.jpg') }}" src="{{ asset('images/product-images/product-image13.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image13-1.jpg') }}" src="{{ asset('images/product-images/product-image13-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$228.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Ara Ring</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image14.jpg') }}" src="{{ asset('images/product-images/product-image14.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image14-1.jpg') }}" src="{{ asset('images/product-images/product-image14-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$198.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="product-layout-1.html">Ara Ring</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="product-layout-1.html">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image15.jpg') }}" src="{{ asset('images/product-images/product-image15.jpg') }}" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image15-1.jpg') }}" src="{{ asset('images/product-images/product-image15-1.jpg') }}" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->
                                                
                                                <div class="button-set button-style2">
                                                    <form class="variants add btn-style2" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$198.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!--Collection Tab slider-->
            
            <!--Feature Content-->
            <div class="section feature-content">
            	<div class="container">
                	<div class="row">
                    	<div class="feature-row">
                            <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                                <img src="{{ asset('images/fast-fashion_600x.jpg') }}" alt="Fast Fashion Only available at BElle" title="Fast Fashion Only available at BElle" />
                            </div>
                        	<div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                        		<div class="row-text">
                                    <h2 class="h2">Fast Fashion Only available at BElle</h2>
                                    <div class="rte-setting featured-row__subtext"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div>
                                    <a href="#" class="btn">Shop Now</a>
                          		</div>
                        	</div>
                      	</div>
                    </div>
                </div>
            </div>
            <!--Feature Content-->
            
            <!--Instagram Section-->
            <div class="section instagram-feed-section">
            	<div class="section-header text-center">
                    <h2 class="h2 heading-font">Follow us On Instagram</h2>
                    <p>@anniemxweb</p>
                </div>
                <!--Instagram ID-->
            	<div id="instafeed" class="imlow_resolution"></div>
                <!--End Instagram ID-->
            </div>
            <!--End Instagram Section-->
            
        </div>
        <!--End Body Content-->
@endsection
@section('script')
     <script>
		var userFeed = new Instafeed({
			get: 'user',
			userId: '8983165779',
			accessToken: '8983165779.1677ed0.f3242e4ff60b428a81c25d118e02f44f',
			resolution: 'low_resolution',
			sortBy: 'most-recent',
			limit: 8,
			template: '<div class="insta-img"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>',
		});
		userFeed.run();
	 </script>
@endsection