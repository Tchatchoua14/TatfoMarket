@extends('font.master')
@section('title', 'home13')
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
                        <img class="blur-up lazyload desktop-show" data-src="{{ asset('images/slideshow-banners/home13-auto-parts-bnr1.jpg') }}" src="{{ asset('images/slideshow-banners/home13-auto-parts-bnr1.jpg') }}" alt="The Perfect Theme for Your Auto Parts Business" title="The Perfect Theme for Your Auto Parts Business" />
                        <img class="blur-up lazyload mobile-show" data-src="{{ asset('images/slideshow-banners/home13-auto-parts-bnr1-mobile.jpg') }}" src="{{ asset('images/slideshow-banners/home13-auto-parts-bnr1-mobile.jpg') }}" alt="The Perfect Theme for Your Auto Parts Business" title="The Perfect Theme for Your Auto Parts Business" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                            	<div class="container">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">The Perfect Template for Your Auto Parts Business</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Build the perfect Store with Belle for auto parts stores</span>
                                        <span class="btn">Purchase now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        
        <!--Our benefits will change the way you buy parts-->
        <div class="section featured-content pb-0">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                            <h2 class="h2">Our benefits will change the way you buy parts.</h2>
                            <p>Order with confidence!</p>
                        </div>
                    </div>
                </div>
                <div class="row list-items">
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload" data-src="{{ asset('images/warranty.png') }}" src="{{ asset('images/warranty.png') }}" alt="Warranty" title="Warranty" />
                        <h3 class="h4">Warranty</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload" data-src="{{ asset('images/return.png') }}" src="{{ asset('images/return.png') }}" alt="Easy Returns" title="Easy Returns" />
                        <h3 class="h4">Easy Returns</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload" data-src="{{ asset('images/dollar.png') }}" src="{{ asset('images/dollar.png') }}" alt="Competitive Prices" title="Competitive Prices" />
                        <h3 class="h4">Competitive Prices</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload" data-src="{{ asset('images/reliable.png') }}" src="{{ asset('images/reliable.png') }}" alt="Reliability" title="Reliability" />
                        <h3 class="h4">Reliability</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload" data-src="{{ asset('images/truck.png') }}" src="{{ asset('images/truck.png') }}" alt="Fast Delivery" title="Fast Delivery" />
                        <h3 class="h4">Fast Delivery</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload" data-src="{{ asset('images/lock.png') }}" src="{{ asset('images/lock.png') }}" alt="Security" title="Security" />
                        <h3 class="h4">Security</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Our benefits will change the way you buy parts-->
        
        <!--Collection Box slider-->
        <div class="collection-box fadeIn section">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                            <h2 class="h2">What are you looking for?</h2>
                            <p>Solutions for a better driving experience</p>
                        </div>
                    </div>
                </div>
				<div class="collection-grid-4item">
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/home13-autoparts1.jpg') }}" src="{{ asset('images/collection/home13-autoparts1.jpg') }}" alt="Performance Parts" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Performance Parts</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/home13-autoparts5.jpg') }}" src="{{ asset('images/collection/home13-autoparts5.jpg') }}" alt="Shoes" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/home13-autoparts2.jpg') }}" src="{{ asset('images/collection/home13-autoparts2.jpg') }}" alt="Body Parts" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Body Parts</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/home13-autoparts4.jpg') }}" src="{{ asset('images/collection/home13-autoparts4.jpg') }}" alt="Accessories" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item blur-up lazyloaded">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/home13-autoparts3.jpg') }}" src="{{ asset('images/collection/home13-autoparts3.jpg') }}" alt="Tools &amp; Equipment" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Tools &amp; Equipment</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/home13-autoparts6.jpg') }}" src="{{ asset('images/collection/home13-autoparts6.jpg') }}" alt="Tools" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Tools</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        
        <!--Popular Categories-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                            <h2 class="h2">Popular Categories</h2>
                            <p>Replacement parts and More...</p>
                        </div>
                    </div>
                </div>
                <div class="categories-list-items">
                	<div class="row">
                    	<div class="col-12">
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img1.jpg') }}" src="{{ asset('images/autoparts/categories-img1.jpg') }}" alt="Tools & Garage" title="Tools & Garage"></a>
                                <h4><a href="#">Tools &amp; Garage </a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Code Readers</a></li>
                                        <li><a href="#">Garage Accessories</a></li>
                                        <li><a href="#">Mobile Electronics</a></li>
                                        <li><a href="#">Videos &amp; Software</a></li>
                                        <li><a href="#">Tools and Components</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img2.jpg') }}" src="{{ asset('images/autoparts/categories-img2.jpg') }}" alt="Exterior Accessories" title="Exterior Accessories"></a>
                                <h4><a href="#">Exterior Accessories</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Bumpers &amp; Components</a></li>
                                        <li><a href="#">Car Covers</a></li>
                                        <li><a href="#">Fog Lights &amp; Accessories</a></li>
                                        <li><a href="#">Grilles &amp; Components</a></li>
                                        <li><a href="#">Hoods &amp; Components</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img3.jpg') }}" src="{{ asset('images/autoparts/categories-img3.jpg') }}" alt="Body Parts &amp; Mirrors" title="Body Parts &amp; Mirrors"></a>
                                <h4><a href="#">Body Parts &amp; Mirrors</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Bumpers &amp; Components</a></li>
                                        <li><a href="#">Car Covers</a></li>
                                        <li><a href="#">Grilles &amp; Components</a></li>
                                        <li><a href="#">Hoods &amp; Components</a></li>
                                        <li><a href="#">Mirrors &amp; Components</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img4.jpg') }}" src="{{ asset('images/autoparts/categories-img4.jpg') }}" alt="Interior Accessories" title="Interior Accessories"></a>
                                <h4><a href="#">Interior Accessories</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Carpet Kits</a></li>
                                        <li><a href="#">Dash &amp; Accessories</a></li>
                                        <li><a href="#">Floor Mats &amp; Liners</a></li>
                                        <li><a href="#">Seats &amp; Accessories</a></li>
                                        <li><a href="#">Switches &amp; Components</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-12">
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img5.jpg') }}" src="{{ asset('images/autoparts/categories-img5.jpg') }}" alt="Headlights &amp; Lighting" title="Headlights &amp; Lighting"></a>
                                <h4><a href="#">Headlights &amp; Lighting</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Fog Lights &amp; Accessories</a></li>
                                        <li><a href="#">Headlights &amp; Accessories</a></li>
                                        <li><a href="#">Switches &amp; Components</a></li>
                                        <li><a href="#">Tail Lights &amp; Accessories</a></li>
                                        <li><a href="#">Turn Signals &amp; Other Lights</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img6.jpg') }}" src="{{ asset('images/autoparts/categories-img6.jpg') }}" alt="Exhaust System" title="Exhaust System"></a>
                                <h4><a href="#">Exhaust System</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Catalytic Converter</a></li>
                                        <li><a href="#">Exhaust End Silencers</a></li>
                                        <li><a href="#">Exhaust Middle Silencers</a></li>
                                        <li><a href="#">Particulate Filter</a></li>
                                        <li><a href="#">Exhaust End Silencers</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img7.jpg') }}" src="{{ asset('images/autoparts/categories-img7.jpg') }}" alt="Brakes, Suspension &amp; Steering" title="Brakes, Suspension &amp; Steering"></a>
                                <h4><a href="#">Brakes, Suspension &amp; Steering</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Shocks &amp; Components</a></li>
                                        <li><a href="#">Wheel Hubs and Components</a></li>
                                        <li><a href="#">Brake Discs &amp; Calipers</a></li>
                                        <li><a href="#">Control Arms &amp; Components</a></li>
                                        <li><a href="#">Lowering &amp; Lifting Kits</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                            <div class="categories-item">
                                <a href="#" class="thumb"><img class="primary blur-up lazyload" data-src="{{ asset('images/autoparts/categories-img8.jpg') }}" src="{{ asset('images/autoparts/categories-img8.jpg') }}" alt="Engine &amp; Drivetrain" title="Engine &amp; Drivetrain"></a>
                                <h4><a href="#">Engine &amp; Drivetrain</a></h4>
                                <div class="rte-setting">
                                    <ul>
                                        <li><a href="#">Catalytic Converters</a></li>
                                        <li><a href="#">Exhaust Systems</a></li>
                                        <li><a href="#">Fuel Systems</a></li>
                                        <li><a href="#">Heating, Air Conditioning</a></li>
                                        <li><a href="#">Radiators, Fans, Cooling Systems</a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn no-border">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Popular Categories-->
        
        <!--Parallax Section-->
        <div class="section">
            <div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img blur-up" src="{{ asset('images/parallax-banners/home13-car-parts.jpg') }}" alt="" />
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text  center text-small font-regular">       
          					<h2 class="h2 mega-title">Outstanding selection, service and delivery to our customers is our top priority</h2>
          					<div class="rte-setting mega-subtitle">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</div>
          					<a href="#" class="btn">Contact Us Now</a>
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
                            <h2 class="h2">Hot new releases</h2>
                        </div>
            		</div>
                </div>
	            <div class="grid-products grid-products-hover-btn">
                	<div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img1.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img1.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img1-1.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img1-1.jpg') }}" alt="image" title="product">
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
                                    <a href="product-layout-1.html">8 Tons Powerful Car Auto Tow Rope Trailer Rope</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$79.43</span>
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
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img2.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img2.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img2-1.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img2-1.jpg') }}" alt="image" title="product">
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
                                    <a href="product-layout-1.html">Air Pressure Gauge Heavy Duty Best For Car</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$26.48</span>
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
                                    <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img3.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img3.jpg') }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img3-1.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img3-1.jpg') }}" alt="image" title="product">
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
                                    <a href="product-layout-1.html">Air Pump MTB Motorcycle Car Basketball Bike</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$79.43</span>
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
                                <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img4.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img4.jpg') }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/auto-parts-p-img4-1.jpg') }}" src="{{ asset('images/product-images/auto-parts-p-img4-1.jpg') }}" alt="image" title="product" />
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
                                <a href="product-layout-1.html">Honeywell Move Pure Car Air Purifier</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$105.90</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    </div>
                </div>
           </div>
        </div>	
        <!--End Featured Product-->
        
        <!--Testimonial Slider-->
        <div class="section testimonial-slider">
        	<div class="container">
                <div class="quote-wraper">
                    <!--Testimonial Slider Title-->
                    <div class="section-header text-center">
                        <h2 class="h2">Customer Reviews</h2>          
                    </div>
                    <!--End Testimonial Slider Title-->
                    <!--Testimonial Slider Items-->
                    <div class="quotes-slider">
                    	<div class="quotes-slide">
                            <blockquote class="quotes-slider__text text-center">             
                              <div class="rte-setting"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
                              <p class="authour">Happy Customer</p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide">
                            <blockquote class="quotes-slider__text text-center">             
                              <div class="rte-setting"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p></div>
                              <p class="authour">Happy Customer</p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide">
                            <blockquote class="quotes-slider__text text-center">             
                              <div class="rte-setting"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
                              <p class="authour">Happy Customer</p>
                            </blockquote>
                        </div>
                    </div>
                    <!--Testimonial Slider Items-->
                </div>
            </div>
        </div>
        <!--End Testimonial Slider-->
        
        <!--Logo Slider-->
        <div class="section logo-section pb-0">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                            <h2 class="h2">POPULAR CAR MAKERS</h2>
                            <p>all car brands</p>
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
    <!--End For Newsletter Popup-->
@endsection 