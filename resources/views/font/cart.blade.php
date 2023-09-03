@extends('font.master')
@section('title', 'cart')
@section('content')
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
    <!--Header--> 
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{ route('home') }}">
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
                        <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.nav0') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">

                                                         
                                                        <li><a href="{{route('profile.edit')}}" class="site-nav">{{ __('message.home.profile') }}</a></li>
                                                        <li><a href="" class="site-nav">{{ __('message.home.order') }}</a></li>
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
                                                      <li class="lvl-2"><a href="{{route('home3')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 1 - {{ __('message.home.home1') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 2 - {{ __('message.home.home2') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 15 - {{ __('message.home.home3') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                      <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 3 - {{ __('message.home.boxed') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home6')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 4 - {{ __('message.home.home4') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 5 - {{ __('message.home.home5') }}</a></li>
                                                    </ul>
                                                  </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.nav11') }} {{ __('message.home.group') }} 2</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 8 - {{ __('message.home.jewellery') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home9')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 9 - {{ __('message.home.parallax') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home10')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 10 - {{ __('message.home.minimal') }}</a></li>
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
                                                        <li class="lvl-2"><a href="{{route('home9')}}" class="site-nav lvl-2">{{ __('message.home.sec7') }}</a></li>
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
                                <li><a href="{{route('home3')}}" class="site-nav">{{ __('message.home.var4') }}</a></li>
                                <li><a href="{{route('home7')}}" class="site-nav">Article</a></li>
                                <li><a href="#" class="site-nav">{{ __('message.home.var3') }}<i class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="" class="site-nav">{{ __('message.home.var1') }}</a></li>
                                        <li><a href="" class="site-nav">{{ __('message.home.var2') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="compare-variant1.html" class="site-nav">{{ __('message.home.compare') }} <i class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('compare2')}}" class="site-nav">{{ __('message.home.compare1') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">404</a></li>
                                </ul>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.var5') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('about')}}" class="site-nav">{{ __('message.home.var7') }} <span class="lbl nm_label1">New</span> </a></li>
                                    <li><a href="{{route('contact')}}" class="site-nav">{{ __('message.home.var8') }} </a></li>
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
                        <a href="index.html">
                            <img src="{{ asset('images/logo.svg') }}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2"> 
                	<div class="site-cart">
                    	<a href="{{ route('cart.list') }}" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{ Cart::getTotalQuantity() }}</span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                            {{-- {{$cartItems}} --}}
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
                                        <!-- <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a> -->
                                        <a class="pName" href="#">{{ $item->name }}</a>
                                      
                                        <div class="variant-cart"> BLACK / XL</div>
                                        <div class="variant-cart">{{ $item->price }}</div>
                    
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <form action="{{ route('cart.update') }}" method="POST" class="justify-content-around">
                                                        @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}" >
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" class="px-1" style="width:80px;" />   
                                                <button type="submit" name="update" class=""><i class="fa fa-refresh"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                     
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
@include('font.partials.menu')
  <!--Body Content-->
  <div id="page-content" class="mt-5">  
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper">
                    <h1 class="page-width">Your cart</h1>
                 </div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container"> 
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                @if (session('success'))
                   <div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large text-primary"></i> &nbsp;<strong>Congratulations!</strong> {{ session('success') }}
					</div>
                 @endif
                	<form action="{{route('checkout')}}" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th> 
                                    <th class="action">&nbsp;</th>
                                </tr> 
                            </thead>
                    		<tbody>
                            @foreach ($cartItems as $item)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="{{ asset('/images/product-images/'.$item->attributes->image1) }}" alt="{{ $item->name }}"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">{{ $item->name }}</a>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            Color: Navy<br>Size: Small<br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">{{$item->price}}</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                            <form action="{{ route('cart.update') }}" method="POST" class="justify-content-around">
                                                        @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}" >
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" class="px-1" style="width:80px;" />   
                                                <button type="submit" name="update" class=""><i class="fa fa-refresh mr-2"></i>Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                        <td class="hidden text-right md:table-cell">
                                          <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="remove" class="btn btn--secondary cart__remove" title="Remove tem" style="border:none;"><i class="icon icon anm anm-times-l" aria-hidden="true"></i></button>
                                            </form>
                                                        
                                        </td>
                                </tr>
                             @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{route('home')}}" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                       @csrf
                                        <button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Clear Cart</button>
                                     </form>
                                      <!-- <form action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id}}" >
                                            <input type="number" name="quantity" value="{{ $item->quantity }}"/>   
                                        <button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update Cart</button>
                                       </form> -->
                                    </td>
                                </tr>
                            </tfoot>
                    </table>
                    
                    <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div>
                    <hr>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5>Discount Codes</h5>
                            <form action="#" method="post">
                            	<div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon">
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
                                </div>
                            </form>
                        </div>     
                    </form>                   
               	</div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                    <div class="solid-border">
                    <div class="row border-bottom pb-2 pt-2">
                      <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                      <span class="col-12 col-sm-6 text-right">Free shipping</span>
                     </div>
                      <div class="row border-bottom pb-2 pt-2">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{ Cart::getSubTotal() }} FCFA</span></span>
                      </div>
        
                      <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                      <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                           I agree with the terms and conditions</label>
                      </p>
                      <a href="{{route('checkout')}}"><input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout"></a>
                      <div class="paymnet-img"><img src="{{ asset('images/payment-img.jpg') }}" alt="Payment"></div>
                      <p><a href="#;" style="text-decoration:none;">Checkout with Multiple Addresses</a></p>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
@endsection