@extends('font.master')
@section('title', 'home')
@section('content1')
<!--Search Form Drawer-->
<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
</div>
<!--End Search Form Drawer-->
@endsection
@section('content2')
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{route('home')}}">
                    	<img src="{{ asset('images/logo.svg') }}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                        @if (Route::has('login'))
                         @auth 
                         @if (Auth::user()->role=="user")
                        <li class="lvl1 parent dropdown"><a href="#">MY ACCOUNT<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">

                                                         
                                                        <li><a href="{{route('profile.edit')}}" class="site-nav">PROFILE </a></li>
                                                        <li><a href="" class="site-nav">MY ORDERS</a></li>
                                                        <li><a href="" class="site-nav">MY TRANSACTION</a></li>
                                                        <li><a href="{{ route('logout') }}" class="text-uppercase" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                        
                               </ul>
                            </li>
                            @endif
                            @endauth
                             @endif
                            <li class="lvl1 parent megamenu"><a href="#">HOME <i class="anm anm-angle-down-l"></i></a>
                                <div class="megamenu style1">
                                    <ul class="grid mmWrapper">
                                        <li class="grid__item large-up--one-whole">
                                            <ul class="grid">
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Home Group 1</a>
                                                    <ul class="subLinks">
                                                      <li class="lvl-2"><a href="{{route('home3')}}" class="site-nav lvl-2">Home 1 - Classic</a></li>
                                                      <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">Home 2 - Default</a></li>
                                                      <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">Home 15 - Furniture <span class="lbl nm_label1">New</span></a></li>
                                                      <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">Home 3 - Boxed</a></li>
                                                      <li class="lvl-2"><a href="{{route('home6')}}" class="site-nav lvl-2">Home 4 - Fullwidth</a></li>
                                                      <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">Home 5 - Cosmetic</a></li>
                                                    </ul>
                                                  </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Home Group 2</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">Home 8 - Jewellery</a></li>
                                                        <li class="lvl-2"><a href="{{route('home9')}}" class="site-nav lvl-2">Home 9 - Parallax</a></li>
                                                        <li class="lvl-2"><a href="{{route('home10')}}" class="site-nav lvl-2">Home 10 - Minimal</a></li>
                                                        <li class="lvl-2"><a href="{{route('home11')}}" class="site-nav lvl-2">Home 11 - Grid</a></li>
                                                        <li class="lvl-2"><a href="{{route('home14')}}" class="site-nav lvl-2">Home 14 - Bags <span class="lbl nm_label1">New</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New Sections</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home11')}}" class="site-nav lvl-2">Image Gallery</a></li>
                                                        <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">Featured Product</a></li>
                                                        <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">Columns with Items</a></li>
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">Text columns with images</a></li>
                                                        <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">Products Carousel</a></li>
                                                        <li class="lvl-2"><a href="{{route('home9')}}" class="site-nav lvl-2">Parallax Banner</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New Features</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home13')}}" class="site-nav lvl-2">Top Information Bar <span class="lbl nm_label1">New</span></a></li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="{{ asset('images/megamenu-bg2.jpg') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">CATEGORIES<i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            <li><a href="{{route('home11')}}" class="site-nav">FASHION <span class="lbl nm_label1">New</span></a></li>
                            <li><a href="{{route('home5')}}" class="site-nav">COSMETIC</a></li>
                            <li><a href="{{route('home14')}}" class="site-nav">BAG<span class="lbl nm_label1">Sale</span></a>
                            </li>
                            <li><a href="{{route('home15')}}" class="site-nav">ACCESSORIES</a>
                            </li>
                            <li><a href="{{route('home7')}}" class="site-nav">SHOES <span class="lbl nm_label1">Popular</span></a></li>
                            <li><a href="{{route('home8')}}" class="site-nav">JEWELLRY</a></li>
                          </ul>
                          </li>
                 
                          <li class="lvl1 parent dropdown"><a href="#">BLOG <i class="anm anm-angle-down-l"></i></a>
                        <ul class="dropdown">
                        <li><a href="{{route('home3')}}" class="site-nav">Gridview</a></li>
                        <li><a href="{{route('home7')}}" class="site-nav">Article</a></li>
                        <li><a href="#" class="site-nav">Cart Page <i class="anm anm-angle-right-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{route('cart1')}}" class="site-nav">Cart Variant1</a></li>
                                <li><a href="{{route('cart')}}" class="site-nav">Cart Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-angle-right-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{route('compare2')}}" class="site-nav">Compare Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">404</a></li>
                        </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">SETTINGS <i class="anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{route('about')}}" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                                <li><a href="{{route('contact')}}" class="site-nav">Contact Us</a></li>
                                <li><a href="{{route('register')}}" class="site-nav">Administration</a></li>
                            </ul>
                        </li>
                        </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('images/logo.svg') }}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="#;" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="{{ asset('images/product-images/cape-dress-1.jpg') }}" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">$59.00</span>
                                            </div>
                                         </div>
									</div>
                                </li>
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="{{ asset('images/product-images/cape-dress-2.jpg') }}" alt="Elastic Waist Dress - Black / Small" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                        <div class="variant-cart">Gray / XXL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       	<div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="{{ route('cart') }}" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="{{ route('checkout') }}" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header--> 
@endsection
@section('content')
  <!--Body Content-->
  <div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('images/slideshow-banners/belle-banner1.jpg') }}" src="{{ asset('images/slideshow-banners/belle-banner1.jpg') }}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Shop Our New Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or modern. We have you covered</span>
                                        <a href="{{ route('collection') }}"><span class="btn">Shop now</span></a> 
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('images/slideshow-banners/belle-banner2.jpg') }}" src="{{ asset('images/slideshow-banners/belle-banner2.jpg') }}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Summer Bikini Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
                                    <a href="{{ route('collection') }}"><span class="btn">Shop now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        <!--Collection Tab slider-->
        <div class="tab-slider-product section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">New Arrivals</h2>
                            <p>Browse the huge variety of our products</p>
                        </div>
                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="tab1">Women</li>
                                <li rel="tab2">Men</li>
                                <li rel="tab3">Sale</li>
                            </ul>
                            <div class="tab_container">
                       
        
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                    @foreach($products as $product)
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                 <!-- start product image -->  
                                                <a href="{{route('produit-layout')}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" id="" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="{{$product->image1}}" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="{{$product->image2}}" title="product">
                                                    <!-- End hover image -->
                                                     <!-- product label -->
                                                     @if($product->id==4)
                                                     <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                     @elseif($product->id==5)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                     @elseif($product->id==6)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">Sale</span></div>
                                                     @elseif($product->id==7)
                                                     <div class="product-labels"><span class="lbl pr-label1">Popular</span></div>
                                                     @elseif($product->id==8)
                                                     <div class="product-labels"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">Hot</span></div>
                                                     @else
                                                     @endif
                                                   
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                        		<div class="saleTime desktop" data-countdown="{{ $product->updated_at->format('d/m/Y')}}"> </div>
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                <form class="variants add" action="{{ route('cart') }}" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
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
                                                    <a href="short-description.html">{{$product->title}}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">{{$product->price}}FCFA</span>
                                                    <span class="price">{{$product->priceReduction}}FCFA</span>
                                                </div>
                                                <!-- End product price -->
                                                
                                                <div class="product-review">
                                               
                                       @if($product->id==4)
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                        @elseif($product->id==5)
                                        <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            @elseif($product->id==6)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>

                                            @elseif($product->id==7)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @elseif($product->id==8)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @else
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            @endif





                                                </div>
                                                <!-- Variant -->
                                                @if($product->id==4)
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant1.jpg') }}" id="im1" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant2.jpg') }}" id="im2" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3.jpg') }}" id="im3" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant4.jpg') }}" id="im4" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant5.jpg') }}" id="im5" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant6.jpg') }}" id="im6" alt="image" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                                @elseif($product->id==5)
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant2-1.jpg') }}" id="za2" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant2-2.jpg') }}" id="za3" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant2-3.jpg') }}" id="za4" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant2-4.jpg') }}" id="za5" alt="image" /></li>
                                                </ul>
                                                @elseif($product->id==6)
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-1.jpg') }}" id="za8" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-2.jpg') }}" id="za9" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-3.jpg') }}" id="za10" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-4.jpg') }}" id="za11" alt="image" /></li>
                                                </ul>
                                                @elseif($product->id==7)
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant4-1.jpg') }}" id="za13" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant4-2.jpg') }}" id="za14" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant4-3.jpg') }}" id="za15" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant4-4.jpg') }}" id="za17" alt="image" /></li>
                                                </ul>
                                                @elseif($product->id==8)
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-1.jpg') }}" id="zz1" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-4.jpg') }}" id="zz2" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-3.jpg') }}" id="zz3" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{ asset('images/product-images/variant3-4.jpg') }}" id="zz4" alt="image" /></li>
                                                </ul>
                                                @else
                                                @endif

                                            </div>
                                            <!-- End product details -->
                                         
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="tab2" class="tab_content grid-products">
                                    <div class="productSlider">
                                    @foreach($product1 as $product)
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                 <!-- start product image -->  
                                                <a href="{{route('produit-layout')}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" id="" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="{{$product->image1}}" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="{{$product->image2}}" title="product">
                                                    <!-- End hover image -->
                                                     <!-- product label -->
                                                     @if($product->id==11)
                                                     <div class="product-labels rectangular"><span class="lbl on-sale">-25%</span> <span class="lbl pr-label1">new</span></div>
                                                     @elseif($product->id==9)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                     @elseif($product->id==13)
                                                     <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                     @elseif($product->id==12)
                                                     <div class="product-labels rounded"><span class="lbl pr-label1">Popular</span></div>
                                                     @elseif($product->id==10)
                                                     <div class="product-labels"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">Hot</span></div>
                                                     @else
                                                     @endif
                                                   
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                        		<div class="saleTime desktop" data-countdown="{{$product->created_at}}"></div>
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                <form class="variants add" action="{{ route('cart') }}" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
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
                                                    <a href="short-description.html">{{$product->title}}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">{{$product->price}}FCFA</span>
                                                    <span class="price">{{$product->priceReduction}}FCFA</span>
                                                </div>
                                                <!-- End product price -->
                                                
                                                <div class="product-review">
                                               
                                       @if($product->id==14)
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                        @elseif($product->id==15)
                                        <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                 <i class="font-13 fa fa-star"></i>
                                            @elseif($product->id==16)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>

                                            @elseif($product->id==17)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @elseif($product->id==18)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @else
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            @endif





                                                </div>
                                           

                                            </div>
                                            <!-- End product details -->
                                         
                                        </div>
                                        @endforeach
                                    </div>
                                </div>                              
                                <div id="tab3" class="tab_content grid-products">
                                    <div class="productSlider">
                                    @foreach($product2 as $product)
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                 <!-- start product image -->  
                                                <a href="{{route('produit-layout')}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" id="" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="{{$product->image1}}" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="{{$product->image2}}" title="product">
                                                    <!-- End hover image -->
                                                     <!-- product label -->
                                                     @if($product->id==18)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                     @elseif($product->id==14)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                     @elseif($product->id==15)
                                                     <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                     @elseif($product->id==16)
                                                     <div class="product-labels"><span class="lbl pr-label1">Popular</span></div>
                                                     @elseif($product->id==17)
                                                     <div class="product-labels"><span class="lbl on-sale">-50%</span><span class="lbl pr-label2">Hot</span></div>
                                                     @else
                                                     @endif
                                                   
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                        		<div class="saleTime desktop" data-countdown="{{$product->created_at}}"></div>
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                <form class="variants add" action="{{ route('cart') }}" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
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
                                                    <a href="short-description.html">{{$product->title}}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">{{$product->price}}FCFA</span>
                                                    <span class="price">{{$product->priceReduction}}FCFA</span>
                                                </div>
                                                <!-- End product price -->
                                                
                                                <div class="product-review">
                                               
                                       @if($product->id==4)
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                        @elseif($product->id==5)
                                        <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            @elseif($product->id==6)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>

                                            @elseif($product->id==7)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @elseif($product->id==8)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @else
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            @endif





                                                </div>
                                           

                                            </div>
                                            <!-- End product details -->
                                         
                                        </div>
                                        @endforeach
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--Collection Tab slider-->
        
        <!--Collection Box slider-->
        <div class="collection-box section">
        	<div class="container-fluid">
				<div class="collection-grid">
                        <div class="collection-grid-item">
                            <a href="{{route('home11')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/fashion.jpg') }}" src="{{ asset('images/collection/fashion.jpg') }}" alt="Fashion" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Fashion</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home5')}}" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="{{ asset('images/collection/cosmetic.jpg') }}" src="{{ asset('images/collection/cosmetic.jpg') }}" alt="Cosmetic"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="{{route('home14')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/bag.jpg') }}" src="{{ asset('images/collection/bag.jpg') }}" alt="Bag" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Bag</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home15')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/accessories.jpg') }}" src="{{ asset('images/collection/accessories.jpg') }}" alt="Accessories" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home7')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/shoes.jpg') }}" src="{{ asset('images/collection/shoes.jpg') }}" alt="Shoes" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home8')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/jewellry.jpg') }}" src="{{ asset('images/collection/jewellry.jpg') }}" alt="Jewellry" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Jewellry</h3>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        
        <!--Logo Slider-->
        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">OUR BRANDS</h2>
                        </div>
                		<div class="logo-bar">
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/brand1.PNG') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/brand2.PNG') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/brand3.PNG') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/brand4.PNG') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/brand5.PNG') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/brand6.PNG') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b1.jpg') }}"  alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b2.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b3.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b4.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b5.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b6.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/marque/b7.jpg') }}" alt="" title="" />
                    </div>
                    
                </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
        
        <!--Featured Product-->
        <div class="product-rows section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2">Featured collection</h2>
                            <p>Our most popular products based on sales</p>
                        </div>
            		</div>
                </div>
                <div class="grid-products">
	                <div class="row">
                    @foreach($product3 as $product)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-accordion.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                                     @if($product->id==19)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-10%</span> <span class="lbl pr-label1">new</span></div>
                                                     @elseif($product->id==20)
                                                     <div class="product-labels"><span class="lbl on-sale">Popular</span><span class="lbl pr-label2">-50%</span></div>
                                                     @elseif($product->id==21)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                     @elseif($product->id==22)
                                                     <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                     @elseif($product->id==25)
                                                     <div class="product-labels"><span class="lbl pr-label1">Popular</span></div>
                                                     @elseif($product->id==26)
                                                     <div class="product-labels"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">Hot</span></div>
                                                     @else
                                                     @endif
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                   
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">{{$product->price}}FCFA</span>
                                        <span class="price">{{$product->priceReduction}}FCFA</span>
                                    </div>
                                    <!-- End product price -->
                                        
                                    <div class="product-review">
                                               
                                               @if($product->id==19)
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                
                                                @elseif($product->id==20)
                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    @elseif($product->id==22)
                                                    <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
        
                                                    @elseif($product->id==25)
                                                    <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                
                                                    @elseif($product->id==26)
                                                    <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                
                                                    @else
                                                    <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    @endif
        
        
        
        
        
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
                                <!-- Variant -->
                                <!-- End Variant -->
                                <!-- End product details -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                               </form>
                            </div>
                           
                        </div>
                    @endforeach
                	</div>
                </div>




                




           </div>
        </div>	
        <!--End Featured Product-->
        


        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">OUR PARTNERS</h2>
                        </div>
                		<div class="logo-bar">
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-1.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-2.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-3.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-4.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-5.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-6.jpg') }}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-7.jpg') }}"  alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{ asset('images/partenaire/vendor-8.jpg') }}" alt="" title="" />
                    </div>
                    
                </div>
                	</div>
                </div>
            </div>
        </div>

        <!--Latest Blog-->
        <div class="latest-blog section pt-0">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
      						<h2 class="h2">Latest From our Blog</h2>
					    </div>
            		</div>
                </div>
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="blog-left-sidebar.html" class="article__grid-image">
              					<img src="{{ asset('images/blog/post-img1.jpg') }}" alt="It's all about how you wear" title="It's all about how you wear" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="blog-left-sidebar.html">It's all about how you wear</a>
                                    </h2>
                                    <span class="article__date">May 02, 2023</span>
                                    <div class="rte article__grid-excerpt">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="blog-left-sidebar.html" class="article__grid-image">
              					<img src="{{ asset('images/blog/post-img2.jpg') }}" alt="27 Days of Spring Fashion Recap" title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                    </h2>
                                    <span class="article__date">May 22, 2023</span>
                                    <div class="rte article__grid-excerpt">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Latest Blog-->
        
        <!--Store Feature-->
        <div class="store-feature section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<ul class="display-table store-info">
                        	<li class="display-table-cell">
                            	<i class="icon anm anm-truck-l"></i>
                            	<h5>Free Shipping &amp; Return</h5>
                            	<span class="sub-text">Free shipping on all US orders</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5>Money Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5>Online Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                        	</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
    </div>
    <!--End Body Content-->

    @endsection 