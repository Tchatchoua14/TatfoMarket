@extends('font.master')
@section('title', 'home11')
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
                        <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home11-grid-banner1.jpg') }}" src="{{ asset('images/slideshow-banners/home11-grid-banner1.jpg') }}" alt="Summer Hot Collection" title="Summer Hot Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                                <div class="wrap-caption right">
                                    <h2 class="h1 mega-title slideshow__title">Summer Hot Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">SALE up to 30% off</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home11-grid-banner2.jpg') }}" src="{{ asset('images/slideshow-banners/home11-grid-banner2.jpg') }}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                                <div class="wrap-caption left">
                                    <h2 class="h1 mega-title slideshow__title">Mid Season SAle</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Up to 70% off on selected item.</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        
        <!--Image Banners-->
    	<div class="section imgBanners pb-0">
        	<div class="imgBnrOuter">
            	<div class="container-fluid">
                	<div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">SHOP BY Category</h2>
                                <p>Shop the Nicest Deals on Best Prices in all category</p>
                            </div>
                            
                        </div>
                    </div>    
                	<div class="row img-grid-banner1">
                    	<div class="col-12 col-sm-12 col-md-12 col-lg-6 image-banner-1">
                        	<div class="inner topright">
                            	<a href="#">	
                               		<img data-src="{{ asset('images/collection/home11-grid-sm-banner1.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner1.jpg') }}" alt="Halloween Look" title="Halloween Look" class="blur-up lazyload" />
                                    <div class="ttl">
                                    	Shop <h5>Halloween Look</h5>
                                    </div>
                                </a>
                             </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 image-banner-2">
                        	<div class="row">
                            	<div class="col-12 col-sm-6 col-md-6 col-lg-6 image-banner-3">
                                	<div class="inner topright">
                                        <a href="#">	
                                            <img data-src="{{ asset('images/collection/home11-grid-sm-banner2.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner2.jpg') }}" alt="Heeled Boots" title="Heeled Boots" class="blur-up lazyload" />
                                            <div class="ttl">
                                                Shop <h5>Heeled Boots</h5>
                                            </div>
                                        </a>
                                    </div>
                            	</div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                	<div class="inner btmleft">
                                        <a href="#">	
                                            <img data-src="{{ asset('images/collection/home11-grid-sm-banner3.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner3.jpg') }}" alt="Caps" title="Caps" class="blur-up lazyload" />
                                            <div class="ttl">
                                                Shop Cool <h5>Caps</h5>
                                            </div>
                                        </a>
                                    </div>
                            	</div>   
                            </div>
                            <div class="row">
                            	<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                	<div class="inner center">
                                        <a href="#">	
                                            <img data-src="{{ asset('images/collection/home11-grid-sm-banner4.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner4.jpg') }}" alt="Sun Glasses, Shoes and more" title="Sun Glasses, Shoes and more" class="blur-up lazyload" />
                                            <div class="ttl">
                                                Hot Summer Collection <h5>Sun Glasses, Shoes and more</h5>
                                            </div>
                                        </a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row img-grid-banner2">
                    	<div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="inner topleft">
                                <a href="#">	
                                    <img data-src="{{ asset('images/collection/home11-grid-sm-banner5.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner5.jpg') }}" alt="Shop Jewelry" title="Shop Jewelry" class="blur-up lazyload" />
                                    <div class="ttl">
                                        All the Shiniest <h5>Shop Jewelry</h5>
                                    </div>
                                </a>
                             </div>
                         
                            <div class="inner topright">
                                <a href="#">	
                                    <img data-src="{{ asset('images/collection/home11-grid-sm-banner6.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner6.jpg') }}" alt="Heeled Boots" title="Heeled Boots" class="blur-up lazyload" />
                                    <div class="ttl">
                                        Every Little Things <h5>Shop Cosmetics</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 image-banner-2">
                            <div class="inner topleft">
                                <a href="#">	
                                    <img data-src="{{ asset('images/collection/home11-grid-sm-banner7.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner7.jpg') }}" alt="Caps" title="Caps" class="blur-up lazyload" />
                                    <div class="ttl">
                                        Elevate Every Look <h5>Shop Men's Clothing</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row img-grid-banner3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 image-banner-2">
                            <div class="inner center">
                                <a href="#">	
                                    <img data-src="{{ asset('images/collection/home11-grid-sm-banner8.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner8.jpg') }}" alt="Caps" title="Caps" class="blur-up lazyload" />
                                    <div class="ttl text-center">
                                        Shape Your look <h5>Shop Now</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="inner center">
                                <a href="#">	
                                    <img data-src="{{ asset('images/collection/home11-grid-sm-banner9.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner9.jpg') }}" alt="Shop Jewelry" title="Shop Jewelry" class="blur-up lazyload" />
                                    <div class="ttl">Shop Kids</div>
                                </a>
                             </div>
                         
                            <div class="inner topright">
                                <a href="#">	
                                    <img data-src="{{ asset('images/collection/home11-grid-sm-banner10.jpg') }}" src="{{ asset('images/collection/home11-grid-sm-banner10.jpg') }}" alt="Heeled Boots" title="Heeled Boots" class="blur-up lazyload" />
                                    <div class="ttl">
                                        Shop <h5>Kids Accessories</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Image Banners-->
        
        <!--New Arrivals-->
        <div class="product-rows section">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2">New Arrivals We Love</h2>
                        </div>
            		</div>
                </div>
	            <div class="productSlider-fullwidth grid-products grid-products-hover-btn">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image1.jpg') }}" src="{{ asset('images/product-images/product-image1.jpg') }}" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image1-1.jpg') }}" src="{{ asset('images/product-images/product-image1-1.jpg') }}" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image1.jpg') }}" alt="image" title="product">
                                <!-- Variant Image-->
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
                            <ul class="swatches">
                                <li class="swatch small rounded navy" rel="{{ asset('images/product-images/product-image-stw1.jpg') }}"></li>
                                <li class="swatch small rounded green" rel="{{ asset('images/product-images/product-image-stw1-1.jpg') }}"></li>
                                <li class="swatch small rounded gray" rel="{{ asset('images/product-images/product-image-stw1-2.jpg') }}"></li>
                                <li class="swatch small rounded aqua" rel="{{ asset('images/product-images/product-image-stw1-3.jpg') }}"></li>
                                <li class="swatch small rounded orange" rel="{{ asset('images/product-images/product-image-stw1-4.jpg') }}"></li>
                            </ul>
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
                            <ul class="swatches">
                                <li class="swatch small rounded black" rel="{{ asset('images/product-images/product-image2.jpg') }}"></li>
                                <li class="swatch small rounded navy" rel="{{ asset('images/product-images/product-image-swt2.jpg') }}"></li>
                                <li class="swatch small rounded purple" rel="{{ asset('images/product-images/product-image-swt2-1.jpg') }}"></li>
                                <li class="swatch small rounded teal" rel="{{ asset('images/product-images/product-image-swt2-2.jpg') }}"></li>
                            </ul>
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
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image3.jpg') }}" src="{{ asset('images/product-images/product-image3.jpg') }}" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image3-1.jpg') }}" src="{{ asset('images/product-images/product-image3-1.jpg') }}" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image3.jpg') }}" alt="image" title="product">
                                <!-- Variant Image-->
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
                            <ul class="swatches">
                                <li class="swatch small rounded gray" rel="{{ asset('images/product-images/product-image16.jpg') }}"></li>
                                <li class="swatch small rounded red" rel="{{ asset('images/product-images/product-image5.jpg') }}"></li>
                                <li class="swatch small rounded orange" rel="{{ asset('images/product-images/product-image5-1.jpg') }}"></li>
                                <li class="swatch small rounded yellow" rel="{{ asset('images/product-images/product-image17.jpg') }}"></li>
                            </ul>
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
                            <ul class="swatches">
                                <li class="swatch small rounded black" rel="{{ asset('images/product-images/cape-dress-2.jpg') }}"></li>
                                <li class="swatch small rounded maroon" rel="{{ asset('images/product-images/product-image4-1.jpg') }}"></li>
                                <li class="swatch small rounded navy" rel="{{ asset('images/product-images/product-image2.jpg') }}"></li>
                                <li class="swatch small rounded darkgreen" rel="{{ asset('images/product-images/product-image2-1.jpg') }}"></li>
                            </ul>
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
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image5.jpg') }}" src="{{ asset('images/product-images/product-image5.jpg') }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image5-1.jpg') }}" src="{{ asset('images/product-images/product-image5-1.jpg') }}" alt="image" title="product" />
                                <!-- End hover image -->
                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="{{ asset('images/product-images/product-image5.jpg') }}" alt="image" title="product">
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
                            <ul class="swatches">
                                <li class="swatch small rounded gray" rel="{{ asset('images/product-images/product-image16.jpg') }}"></li>
                                <li class="swatch small rounded red" rel="{{ asset('images/product-images/product-image5.jpg') }}"></li>
                                <li class="swatch small rounded orange" rel="{{ asset('images/product-images/product-image5-1.jpg') }}"></li>
                                <li class="swatch small rounded yellow" rel="{{ asset('images/product-images/product-image17.jpg') }}"></li>
                            </ul>
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
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image36.jpg') }}" src="{{ asset('images/product-images/product-image36.jpg') }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image36-1.jpg') }}" src="{{ asset('images/product-images/product-image36-1.jpg') }}" alt="image" title="product" />
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
                                <a href="product-layout-1.html">Balda Button Pant</a>
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
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image39.jpg') }}" src="{{ asset('images/product-images/product-image39.jpg') }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image39-1.jpg') }}" src="{{ asset('images/product-images/product-image39-1.jpg') }}" alt="image" title="product" />
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
                                <a href="product-layout-1.html">Block Button Up</a>
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
                </div>
           </div>
        </div>	
        <!--End Featured Product-->
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
</div> 
@endsection