@extends('font.master')
@section('title')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
  <!--Body Content-->
  <div id="page-content" class="mt-5">
    	<!--Image Banners-->
    	<div class="section imgBanners">
        	<div class="imgBnrOuter">
            	<div class="container">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="inner">
                            	<a href="#">	
                               		<img data-src="{{ asset('images/slideshow-banners/home14-bags-bnr1.jpg') }}" src="{{ asset('images/slideshow-banners/home14-bags-bnr1.jpg') }}" alt="" title="" class="blur-up lazyload" />
                                </a>
                             </div>
                             <div class="custom-text text-center">
                                <h4 class="h3"><a href="#"> Discover the latest bag collections and a constantly growing assortment at BELLE</a></h4>
                                <div class="rte-setting">
                                <p>You know best what makes your perfect bag, so BELLE offers a wide selection for every taste! Choose your favourite <a href="https://www.wardow.com/en/leather-bags">leather bag</a> with matching purse from over 120 brands!</p>
                                </div>
                                <br>
                                <a class="btn" href="#">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Image Banners-->
        
        <!--Featured Column-->
        <div class="section featured-column">
        	<div class="container">
                <div class="row">
                	<!--Featured Item-->
                	 <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                     	<p>
                           <a href="#">   
                              <img data-src="{{ asset('images/collection/home14-bags-sm-banner1.jpg') }}" src="{{ asset('images/collection/home14-bags-sm-banner1.jpg') }}" alt="New in !" class="blur-up lazyload">
                           </a> 
                        </p>
                        <h3 class="h4"><a href="#">New in !</a></h3>
                        <div class="rte-setting"><p>Wallet and small leaather goods</p></div>
                        <a href="#" class="btn no-border">Discover</a>
                     </div>
                     <!--End Featured Item-->
                     <!--Featured Item-->
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                     	<p>
                           <a href="#">   
                              <img data-src="{{ asset('images/collection/home14-bags-sm-banner2.jpg') }}" src="{{ asset('images/collection/home14-bags-sm-banner2.jpg') }}" alt="My Valentine" class="blur-up lazyload">
                           </a> 
                        </p>
                        <h3 class="h4"><a href="#">My Valentine</a></h3>
                        <div class="rte-setting"><p>Gift ideas for him to personalize</p></div>
                        <a href="#" class="btn no-border">Discover</a>
                     </div>
                     <!--End Featured Item-->
                     <!--Featured Item-->
                     <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                     	<p>
                           <a href="#">   
                              <img data-src="{{ asset('images/collection/home14-bags-sm-banner3.jpg') }}" src="{{ asset('images/collection/home14-bags-sm-banner3.jpg') }}" alt="Gift ideas" class="blur-up lazyload">
                           </a> 
                        </p>
                        <h3 class="h4"><a href="#">Gift ideas</a></h3>
                        <div class="rte-setting"><p>An exceptional gift</p></div>
                        <a href="#" class="btn no-border">Discover</a>
                     </div>
                     <!--End Featured Item-->
                </div>
            </div>
        </div>
        <!--End Featured Column-->
        
        <!--Featured Column-->
        <div class="section featured-column">
        	<div class="container">
                <div class="row">
                	<!--Featured Item-->
                	 <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
                     	<p>
                           <a href="#">   
                              <img data-src="{{ asset('images/collection/home14-bags-sm-banner4.jpg') }}" src="{{ asset('images/collection/home14-bags-sm-banner4.jpg') }}" alt="ICONICS Bag" class="blur-up lazyload">
                           </a> 
                        </p>
                        <h3 class="h4"><a href="#">ICONICS Bag</a></h3>
                        <div class="rte-setting"><p>Timeless and modern the must-have Lancel</p></div>
                        <a href="#" class="btn no-border">Discover More</a>
                     </div>
                     <!--End Featured Item-->
                     <!--Featured Item-->
                     <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
                     	<p>
                           <a href="#">   
                              <img data-src="{{ asset('images/collection/home14-bags-sm-banner5.jpg') }}" src="{{ asset('images/collection/home14-bags-sm-banner5.jpg') }}" alt="Pop around the world" class="blur-up lazyload">
                           </a> 
                        </p>
                        <h3 class="h4"><a href="#">Pop around the world</a></h3>
                        <div class="rte-setting"><p>Soft and lightweight material wallets for women</p></div>
                        <a href="#" class="btn no-border">Discover More</a>
                     </div>
                     <!--End Featured Item-->
                </div>
            </div>
        </div>
        <!--End Featured Column-->
        
        <!--Parallax Section-->
        <div class="section">
            <div class="hero hero--small hero__overlay bg-size">
            	<img class="bg-img blur-up" src="{{ asset('images/parallax-banners/home14-bags-parallax.jpg') }}" alt="" />
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text  center text-small font-regular">       
          					<h2 class="h2 mega-title">Sale, March 9th to April 19th 2019</h2>
          					<div class="rte-setting mega-subtitle">-10% extra from two purchased products * - see conditions</div>
          					<a href="#" class="btn">Shop Now</a>
      					</div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Section-->
        
        <!--Bestselling Bags-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Bestselling Bags</h2>
                        </div>
						<div class="productSlider grid-products grid-products-hover-btn">
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img1.jpg') }}" src="{{ asset('images/product-images/bags-p-img1.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img1-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img1-1.jpg') }}" alt="image" title="product">
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
                                        <a href="product-layout-1.html">Woven Oversized Tote in Red Stripe</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$663.07</span>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img2.jpg') }}" src="{{ asset('images/product-images/bags-p-img2.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img2-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img2-1.jpg') }}" alt="image" title="product">
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
                                        <a href="product-layout-1.html">Wool Shoulder Pouch in Black/White</a>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img3.jpg') }}" src="{{ asset('images/product-images/bags-p-img3.jpg') }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img3-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img3-1.jpg') }}" alt="image" title="product">
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
                                        <a href="product-layout-1.html">Tenda Bag</a>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img4.jpg') }}" src="{{ asset('images/product-images/bags-p-img4.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img4-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img4-1.jpg') }}" alt="image" title="product" />
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
                                        <a href="product-layout-1.html">Ink Splatter Shoulder Bag in Mustard/Blue</a>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img5.jpg') }}" src="{{ asset('images/product-images/bags-p-img5.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img5-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img5-1.jpg') }}" alt="image" title="product" />
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
                                        <a href="product-layout-1.html">Roxanne Leather Clutch in Black</a>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img6.jpg') }}" src="{{ asset('images/product-images/bags-p-img6.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img6-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img6-1.jpg') }}" alt="image" title="product" />
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
                                        <a href="product-layout-1.html">Pretty Grooming Bag</a>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img7.jpg') }}" src="{{ asset('images/product-images/bags-p-img7.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img7-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img7-1.jpg') }}" alt="image" title="product" />
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
                                        <a href="product-layout-1.html">Oscar Luggage Tag in Rose</a>
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
                                        <img class="primary blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img8.jpg') }}" src="{{ asset('images/product-images/bags-p-img8.jpg') }}" alt="image" title="product" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset('images/product-images/bags-p-img8-1.jpg') }}" src="{{ asset('images/product-images/bags-p-img8-1.jpg') }}" alt="image" title="product" />
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
                                        <a href="product-layout-1.html">Pretty Grooming Bag</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$2,034.00</span>
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
        <!--End Bestselling Bags-->
        
        <div class="section video-section">
        	<div class="container">
            	<div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="video-wrapper">
                            <iframe src="http://player.vimeo.com/video/187978982?byline=0&amp;portrait=0&amp;badge=0" allowfullscreen="" width="850" height="480"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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