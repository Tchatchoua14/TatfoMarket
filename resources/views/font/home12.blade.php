@extends('font.master')
@section('title')
@section('content')
   <!--Body Content-->
   <div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
            	<div class="slide slideshow--medium">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home12-category-banner1.jpg') }}" src="{{ asset('images/slideshow-banners/home12-category-banner1.jpg') }}" alt="Outfit of Today" title="Outfit of Today" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content classic left">
                            	<div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">Outfit of Today</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Lookbook ss 2018</span>
                                        <span class="btn">View Catelog</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slideshow--medium">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home12-category-banner2.jpg') }}" src="{{ asset('images/slideshow-banners/home12-category-banner2.jpg') }}" alt="Accessories" title="Accessories" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content classic left">
                            	<div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">Accessories</h2>
                                        <span class="mega-subtitle slideshow__subtitle">New Collection A-W ss18</span>
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
        
      	<!--Feature Content-->
        <div class="section feature-content">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/home12-category-bnr1.jpg') }}" src="{{ asset('images/collection/home12-category-bnr1.jpg') }}" alt="Hot hoodies jackets" title="Hot hoodies jackets" />
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                            <div class="row-text">
                                <h2 class="h2">Hot hoodies jackets</h2>
                                <p>Cover up in style with Hot Jackets now only $50</p>
                                <a href="#" class="btn">SHOP $50 Jackets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Content-->
        
        <!--Feature Content-->
        <div class="section feature-content">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--right text-right">
                            <div class="row-text">
                                <h2 class="h2">Shoes Collection</h2>
                                <p>Shoes we can't stop wearing!</p>
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/home12-category-bnr2.jpg') }}" src="{{ asset('images/collection/home12-category-bnr2.jpg') }}" alt="Shoes Collection" title="Shoes Collection" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Content-->
        
        <!--Shop these looks-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Shop these looks</h2>
                            <p>Shop from hundreds of collections for a fashionable look.</p>
                        </div>
						<div class="productSlider grid-products grid-products-hover-gry">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image7.jpg') }}" src="{{ asset('images/product-images/product-image7.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image7-1.jpg') }}" src="{{ asset('images/product-images/product-image7-1.jpg') }}" alt="image" title="product">
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
                                        <a href="product-layout-1.html">Block Button Up</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$600.00</span>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image24.jpg') }}" src="{{ asset('images/product-images/product-image24.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image24-1.jpg') }}" src="{{ asset('images/product-images/product-image24-1.jpg') }}" alt="image" title="product">
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
                                        <a href="product-layout-1.html">Cena Skirt</a>
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
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                   <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image33.jpg') }}" src="{{ asset('images/product-images/product-image33.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image33-1.jpg') }}" src="{{ asset('images/product-images/product-image33-1.jpg') }}" alt="image" title="product">
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
                                        <a href="product-layout-1.html">Balda Button Pant</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$350.00</span>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/product-image4-1.jpg') }}" src="{{ asset('images/product-images/product-image4-1.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/product-image4.jpg') }}" src="{{ asset('images/product-images/product-image4.jpg') }}" alt="image" title="product" />
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
                                        <a href="product-layout-1.html">Cape Dress</a>
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
                                        <span class="price">$450.00</span>
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
        <!--End Shop these looks-->
        
        <!--Feature Content-->
        <div class="section feature-content">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/home12-category-bnr3.jpg') }}" src="{{ asset('images/collection/home12-category-bnr3.jpg') }}" alt="Nuke New Arrivals" title="Nuke New Arrivals" />
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                            <div class="row-text">
                                <h2 class="h2">Nuke New Arrivals</h2>
                                <p>Fresh arrivals are here to take over your closet!</p>
                                <a href="#" class="btn">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Content-->
        
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
                                        <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/home7-product1.jpg') }}" src="{{ asset('images/product-images/home7-product1.jpg') }}" alt="" >
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/home7-product2.jpg') }}" src="{{ asset('images/product-images/home7-product2.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/home7-product3.jpg') }}" src="{{ asset('images/product-images/home7-product3.jpg') }}" alt=""></a> </div>
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
                                        <img class="grid-view-item__image" src="{{ asset('images/product-images/home7-product4.jpg') }}" alt="">
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
                                        <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/home7-product1.jpg') }}" src="{{ asset('images/product-images/home7-product1.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/home7-product2.jpg') }}" src="{{ asset('images/product-images/home7-product2.jpg') }}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/home7-product3.jpg') }}" src="{{ asset('images/product-images/home7-product3.jpg') }}" alt=""></a> </div>
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
        
        <!-- Instagram Section-->
        <div class="section instagram-feed-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2 heading-font">Belle On Instagram</h2>
                            <p>Phasellus lorem malesuada ligula pulvinar commodo maecenas suscipit auctom.</p>
                        </div>
                        <!--Instagram ID-->
                        <div id="instafeed" class="imlow_resolution"></div>
                        <!--End Instagram ID-->
                    </div>
                </div>
            </div>
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
			// template: '<div class="insta-img"><a href="link" target="_blank"><img src="image" /></a></div>',
		});
		userFeed.run();
	 </script>
@endsection