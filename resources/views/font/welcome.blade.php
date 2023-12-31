@extends('font.master')
@section('title', 'welcome')
@section('content1')
<!--Search Form Drawer-->
<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="{{route('search')}}">
                @csrf
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
                    	<img src="{{ asset('images/logo.svg') }}" alt="TatfoMarket" title="TatfoMarket.com" />
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
                        <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.nav0') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">

                                                         
                                                        <li><a href="{{route('compte')}}" class="site-nav">{{ __('message.home.profile') }}</a></li>
                                                        <li><a href="" class="site-nav">{{ __('message.home.order') }}</a></li>
                                                        <li><a href="" class="site-nav">Créer un coupon</a></li>
                                                        <li><a href="" class="site-nav">{{ __('message.home.transaction') }}</a></li>
                                                        <li><a href="{{ route('logout') }}" class="text-uppercase" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('message.home.logout') }}</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                        
                               </ul>
                            </li>
                            @endif
                            @endauth
                             @endif
                            <li class="lvl1 parent megamenu"><a href="#">{{ __('message.home.nav11') }}<i class="anm anm-angle-down-l"></i></a>
                                <div class="megamenu style1">
                                    <ul class="grid mmWrapper">
                                        <li class="grid__item large-up--one-whole">
                                            <ul class="grid">
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.nav11') }} {{ __('message.home.group') }} 1</a>
                                                    <ul class="subLinks">
                                                      <li class="lvl-2"><a href="{{route('welcome')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 1 - {{ __('message.home.home1') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 2 - {{ __('message.home.home2') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 15 - {{ __('message.home.home3') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                      <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 3 - {{ __('message.home.boxed') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 4 - {{ __('message.home.home4') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 5 - {{ __('message.home.home5') }}</a></li>
                                                    </ul>
                                                  </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.nav11') }} {{ __('message.home.group') }} 2</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 8 - {{ __('message.home.jewellery') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 9 - {{ __('message.home.parallax') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home13')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 10 - {{ __('message.home.minimal') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home11')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 11 - {{ __('message.home.grid') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home14')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 14 - {{ __('message.home.bags') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.sec0') }}</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home11')}}" class="site-nav lvl-2">{{ __('message.home.sec1') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">{{ __('message.home.sec2') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.sec3') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.sec4') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">{{ __('message.home.sec5') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.sec7') }}</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.shop8') }}</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home13')}}" class="site-nav lvl-2">{{ __('message.home.top') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="{{ asset('images/megamenu-bg2.jpg') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.nav2') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('home11')}}" class="site-nav">{{ __('message.home.fashion') }}<span class="lbl nm_label1">{{ __('message.home.new') }} </span></a></li>
                                    <li><a href="{{route('home5')}}" class="site-nav">{{ __('message.home.home5') }}</a></li>
                                    <li><a href="{{route('home14')}}" class="site-nav">{{ __('message.home.bags') }}<span class="lbl nm_label1">{{ __('message.home.SALE') }}</span></a>
                                    </li>
                                    <li><a href="{{route('home15')}}" class="site-nav">{{ __('message.home.ass') }}</a>
                                    </li>
                                    <li><a href="{{route('home7')}}" class="site-nav">{{ __('message.home.shoes') }}<span class="lbl nm_label1">{{ __('message.home.popular') }} </span></a></li>
                                    <li><a href="{{route('home8')}}" class="site-nav">{{ __('message.home.jewellery1') }}</a></li>
                                </ul>
                            </li>                  
                            <li class="lvl1 parent dropdown"><a href="#">BLOG <i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                <li><a href="{{route('home13')}}" class="site-nav">{{ __('message.home.var4') }}</a></li>
                                <li><a href="{{route('home7')}}" class="site-nav">Article</a></li>
                                <li><a href="#" class="site-nav">{{ __('message.home.var3') }}<i class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="" class="site-nav">{{ __('message.home.var1') }}</a></li>
                                        <li><a href="" class="site-nav">{{ __('message.home.var2') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="compare-variant1.html" class="site-nav">{{ __('message.home.compare') }} <i class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="" class="site-nav">{{ __('message.home.compare1') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">404</a></li>
                                </ul>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.var5') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('about')}}" class="site-nav">{{ __('message.home.var7') }} <span class="lbl nm_label1">New</span> </a></li>
                                    <li><a href="{{route('contact.create')}}" class="site-nav">{{ __('message.home.var8') }} </a></li>
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
                            <img src="{{ asset('images/logo.svg') }}" alt="TatfoMarket" title="TatfoMarket" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="#;" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{ Cart::getTotalQuantity() }}</span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                            @foreach ($cartItems as $item)
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="{{ asset('/images/product-images/'.$item->attributes->image1) }}" alt="{{ $item->name }}" title="{{ $item->name }}" />
                                    </a>
                                    <div class="product-details">
                                         <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="remove" style="border:none;"><i class="anm anm-times-l" aria-hidden="true"></i></button>
                                            </form>
                                     
                                        <a class="pName" href="#">{{ $item->name }}</a>
                                      
                                        <div class="variant-cart"> BLACK / XL</div>
                                        <div class="variant-cart">{{ $item->price }}</div>
                    
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <form action="{{ route('cart.update') }}" method="POST" class="justify-content-around">
                                                        @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}" >
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="20" class="px-1" style="width:80px;" />   
                                                <button type="submit" name="update" class=""><i class="fa fa-refresh"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="variant-cart">{{ number_format($item->quantity * $item->price, 2, ',', ' ') }}</div>
									</div>
                                </li>
                            @endforeach
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">{{ Cart::getSubTotal() }} FCFA</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="{{ route('cart.list') }}" class="btn btn-secondary btn--small">View Cart</a>
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
                                        <h2 class="h1 mega-title slideshow__title">{{ __('message.home.shop1') }}</h2>
                                        <span class="mega-subtitle slideshow__subtitle">{{ __('message.home.shop2') }}</span>
                                        <a href="{{ route('collection') }}"><span class="btn">{{ __('message.home.shop') }}</span></a> 
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
                                    <h2 class="h1 mega-title slideshow__title">{{ __('message.home.carroul') }}</h2>
                                    <span class="mega-subtitle slideshow__subtitle">{{ __('message.home.carol') }}</span>
                                    <a href="{{ route('collection') }}"><span class="btn">{{ __('message.home.shop') }}</span></a>
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
                            <h2 class="h2">{{ __('message.home.arrival') }}</h2>
                            <p>{{ __('message.home.shop3') }}</p>
                        </div>
                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="tab1">{{ __('message.home.women') }}</li>
                                <li rel="tab2">{{ __('message.home.men') }}</li>
                                <li rel="tab3">{{ __('message.home.SALE') }}</li>
                            </ul>
                            <div class="tab_container">
                       
        
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                    @foreach($products as $product)
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                 <!-- start product image -->  
                                                <a href="{{route('product.edit1',$product->id)}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" id="" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="{{$product->image1}}" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="{{$product->image2}}" title="product">
                                                    <!-- End hover image -->
                                                     <!-- product label -->
                                                     @if($product->id==4)
                                                     <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==5)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==6)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==7)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==8)
                                                     <div class="product-labels"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @else
                                                     @endif
                                                   
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                        		<div class="saleTime desktop" data-countdown="{{ $product->updated_at->format('D H:i:s')}}">{{ $product->updated_at->format('D H:i:s')}}</div>
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                @if ($product->stock > 0)
                                                <form  class="variants add" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                            <input type="hidden" value="{{ $product->image1 }}"  name="image1">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-addto-cart" tabindex="0" type="submit">{{ __('message.home.panier1') }}</button>
                                                 </form>
                                                @endif 
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
                                                <a href="{{route('payment1', $product)}}" class="btn">{{ __('message.home.buy') }}</a>
                                                <div class="product-name">
                                                    <a href="short-description.html">{{$product->name}}</a>
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
                                                <a href="{{route('product.edit1',$product->id)}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" id="" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="{{$product->image1}}" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="{{$product->image2}}" title="product">
                                                    <!-- End hover image -->
                                                     <!-- product label -->
                                                     @if($product->id==11)
                                                     <div class="product-labels rectangular"><span class="lbl on-sale">-25%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==9)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==13)
                                                     <div class="product-labels"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==12)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==10)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @else
                                                     @endif
                                                   
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                   <!-- countdown start -->
                                        		<div class="saleTime desktop" data-countdown="{{ $product->updated_at->format('D H:i:s')}}">{{ $product->updated_at->format('D H:i:s')}}</div>
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                @if ($product->stock > 0)
                                                <form  class="variants add" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                            <input type="hidden" value="{{ $product->image1 }}"  name="image1">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-addto-cart" tabindex="0" type="submit">{{ __('message.home.panier1') }}</button>
                                                 </form>
                                                @endif 
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
                                                <a href="{{route('payment1', $product)}}" class="btn">{{ __('message.home.buy') }}</a>
                                                <div class="product-name">
                                                    <a href="short-description.html">{{$product->name}}</a>
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
                                                <a href="{{route('product.edit1',$product->id)}}">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" id="" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="{{$product->image1}}" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="{{$product->image2}}" title="product">
                                                    <!-- End hover image -->
                                                     <!-- product label -->
                                                     @if($product->id==18)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==14)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==15)
                                                     <div class="product-labels"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==16)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==17)
                                                     <div class="product-labels"><span class="lbl on-sale">-50%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @else
                                                     @endif
                                                   
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                                <div class="saleTime desktop" data-countdown="{{ $product->updated_at->format('D H:i:s')}}">{{ $product->updated_at->format('D H:i:s')}}</div>
                                        		<!-- countdown end -->
        
                                                <!-- Start product button -->
                                                <form  class="variants add" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                            <input type="hidden" value="{{ $product->image1 }}"  name="image1">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-addto-cart" tabindex="0" type="submit">{{ __('message.home.panier1') }}</button>
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
                                                <a href="{{route('payment1', $product)}}" class="btn">{{ __('message.home.buy') }}</a>
                                                <div class="product-name">
                                                    <a href="short-description.html">{{$product->name}}</a>
                                                </div>
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
                                            @elseif($product->id==21)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>

                                            @elseif($product->id==22)
                                            <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                        
                                            @elseif($product->id==23)
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
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{ __('message.home.fashion') }}</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home5')}}" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="{{ asset('images/collection/cosmetic.jpg') }}" src="{{ asset('images/collection/cosmetic.jpg') }}" alt="Cosmetic"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{ __('message.home.home5') }}</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="{{route('home14')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/bag.jpg') }}" src="{{ asset('images/collection/bag.jpg') }}" alt="Bag" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{ __('message.home.bags') }}</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home15')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/accessories.jpg') }}" src="{{ asset('images/collection/accessories.jpg') }}" alt="Accessories" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{ __('message.home.ass') }}</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home7')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/shoes.jpg') }}" src="{{ asset('images/collection/shoes.jpg') }}" alt="Shoes" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{ __('message.home.shoes') }}</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="{{route('home8')}}" class="collection-grid-item__link">
                                <img data-src="{{ asset('images/collection/jewellry.jpg') }}" src="{{ asset('images/collection/jewellry.jpg') }}" alt="Jewellry" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">{{ __('message.home.jewellery') }}</h3>
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
                            <h2 class="h2">{{ __('message.home.pa3') }}</h2>
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
                            <h2 class="h2">{{ __('message.home.pa') }}</h2>
                            <p>{{ __('message.home.pa1') }}</p>
                        </div>
            		</div>
                </div>
                <div class="grid-products">
	                <div class="row">
                    @foreach($product3 as $product)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="{{route('product.edit1',$product->id)}}" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label --> 
                                                     @if($product->id==19)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-10%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==20)
                                                     <div class="product-labels"><span class="lbl on-sale">{{ __('message.home.popular') }}</span><span class="lbl pr-label2">-50%</span></div>
                                                     @elseif($product->id==21)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==22)
                                                     <div class="product-labels"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==25)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==26)
                                                     <div class="product-labels"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @else
                                                     @endif
                                    <!-- End product label --> 
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <a href="{{route('payment1', $product)}}" class="btn">{{ __('message.home.buy') }}</a>
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
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="{{ route('wishlist') }}">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="{{route('compare1')}}" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                            
                    
                               <form  class="variants add" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                            <input type="hidden" value="{{ $product->image1 }}"  name="image1">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-addto-cart" tabindex="0" type="submit">{{ __('message.home.panier1') }}</button>
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
                            <h2 class="h2">{{ __('message.home.part') }}</h2>
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
      						<h2 class="h2">{{ __('message.home.part1') }}</h2>
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
                                      <a href="blog-left-sidebar.html">{{ __('message.home.part2') }}</a>
                                    </h2>
                                    <span class="article__date">{{ __('message.home.part3') }}</span>
                                    <div class="rte article__grid-excerpt">
                                    {{ __('message.home.part4') }}
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="blog-article.html">{{ __('message.home.part5') }}</a></li>
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
                                      <a href="blog-right-sidebar.html">{{ __('message.home.part2') }}</a>
                                    </h2>
                                    <span class="article__date">{{ __('message.home.part3') }}</span>
                                    <div class="rte article__grid-excerpt">
                                    {{ __('message.home.part4') }}
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="blog-article.html">{{ __('message.home.part5') }}</a></li>
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
                            	<h5>{{ __('message.home.ba0') }}</h5>
                            	<span class="sub-text">{{ __('message.home.ba1') }}</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5>{{ __('message.home.ba2') }}</h5>
                                <span class="sub-text">{{ __('message.home.ba3') }}</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5>{{ __('message.home.ba4') }}</h5>
                                <span class="sub-text">{{ __('message.home.ba5') }}</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5>{{ __('message.home.ba7') }}</h5>
                                <span class="sub-text">{{ __('message.home.ba8') }}</span>
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