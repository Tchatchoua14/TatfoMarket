@extends('font.master')
@section('title', 'checkout')
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

                                                         
                                                        <li><a href="{{route('compte')}}" class="site-nav">{{ __('message.home.profile') }}</a></li>
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
                                                      <li class="lvl-2"><a href="" class="site-nav lvl-2">{{ __('message.home.nav1') }} 1 - {{ __('message.home.home1') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 2 - {{ __('message.home.home2') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 15 - {{ __('message.home.home3') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                      <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 3 - {{ __('message.home.boxed') }}</a></li>
                                                      <li class="lvl-2"><a href="" class="site-nav lvl-2">{{ __('message.home.nav1') }} 4 - {{ __('message.home.home4') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 5 - {{ __('message.home.home5') }}</a></li>
                                                    </ul>
                                                  </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.nav11') }} {{ __('message.home.group') }} 2</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 8 - {{ __('message.home.jewellery') }}</a></li>
                                                        <li class="lvl-2"><a href="" class="site-nav lvl-2">{{ __('message.home.nav1') }} 9 - {{ __('message.home.parallax') }}</a></li>
                                                        <li class="lvl-2"><a href="" class="site-nav lvl-2">{{ __('message.home.nav1') }} 10 - {{ __('message.home.minimal') }}</a></li>
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
                                                        <li class="lvl-2"><a href="" class="site-nav lvl-2">{{ __('message.home.sec7') }}</a></li>
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
                                <li><a href="" class="site-nav">{{ __('message.home.var4') }}</a></li>
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
        		<div class="wrapper"><h1 class="page-width">Checkout</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i> Returning customer? <a href="#customer-login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse">Click here to login</a></h3>
                        <div id="customer-login" class="collapse customer-content">
                            <div class="customer-info">
                            @guest()
                            <a href="{{ route('login') }}"><span class="icon-lock mr-1"></span>{{ __('Login') }}</a>
                            @endguest
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Click here to enter your code</a></h3>
                        <div id="have-coupon" class="collapse coupon-checkout-content">
                            <div class="discount-coupon">
                                <div id="coupon" class="coupon-dec tab-pane active">
                                    <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                    <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                    <input id="coupon-code" required="" type="text" class="mb-3">
                                    <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form>
                            <fieldset>
                                <h2 class="login-title mb-3">Billing details</h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                        <input name="firstname" value="" id="input-firstname" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                        <input name="lastname" value="" id="input-lastname" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        <input name="email" value="" id="input-email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                        <input name="telephone" value="" id="input-telephone" type="tel">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-company">Company</label>
                                        <input name="company" value="" id="input-company" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Address <span class="required-f">*</span></label>
                                        <input name="address_1" value="" id="input-address-1" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-address-2">Apartment <span class="required-f">*</span></label>
                                        <input name="address_2" value="" id="input-address-2" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-city">City <span class="required-f">*</span></label>
                                        <input name="city" value="" id="input-city" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-postcode">Post Code <span class="required-f">*</span></label>
                                        <input name="postcode" value="" id="input-postcode" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-country">Country <span class="required-f">*</span></label>
                                        <select id="address_country" name="address[country]" data-default="United States"><option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="---" data-provinces="[]">---</option>
                                        <option value="Afghanistan" data-provinces="[]">Afghanistan</option>
                                        <option value="Aland Islands" data-provinces="[]">Åland Islands</option>
                                        <option value="Albania" data-provinces="[]">Albania</option>
                                        <option value="Algeria" data-provinces="[]">Algeria</option>
                                        <option value="Andorra" data-provinces="[]">Andorra</option>
                                        <option value="Angola" data-provinces="[]">Angola</option>
                                        <option value="Anguilla" data-provinces="[]">Anguilla</option>
                                        <option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
                                        <option value="Armenia" data-provinces="[]">Armenia</option>
                                        <option value="Aruba" data-provinces="[]">Aruba</option>
                                        <option value="Austria" data-provinces="[]">Austria</option>
                                        <option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
                                        <option value="Bahamas" data-provinces="[]">Bahamas</option>
                                        <option value="Bahrain" data-provinces="[]">Bahrain</option>
                                        <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                        <option value="Barbados" data-provinces="[]">Barbados</option>
                                        <option value="Belarus" data-provinces="[]">Belarus</option>
                                        <option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="Belize" data-provinces="[]">Belize</option>
                                        <option value="Benin" data-provinces="[]">Benin</option>
                                        <option value="Bermuda" data-provinces="[]">Bermuda</option>
                                        <option value="Bhutan" data-provinces="[]">Bhutan</option>
                                        <option value="Bolivia" data-provinces="[]">Bolivia</option>
                                        <option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana" data-provinces="[]">Botswana</option>
                                        <option value="Bouvet Island" data-provinces="[]">Bouvet Island</option>
                                        <option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
                                        <option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
                                        <option value="Brunei" data-provinces="[]">Brunei</option>
                                        <option value="Bulgaria" data-provinces="[]">Bulgaria</option>
                                        <option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
                                        <option value="Burundi" data-provinces="[]">Burundi</option>
                                        <option value="Cambodia" data-provinces="[]">Cambodia</option>
                                        <option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
                                        <option value="Cape Verde" data-provinces="[]">Cape Verde</option>
                                        <option value="Bonaire, Sint Eustatius and Saba" data-provinces="[]">Caribbean Netherlands</option>
                                        <option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
                                        <option value="Central African Republic" data-provinces="[]">Central African Republic</option>
                                        <option value="Chad" data-provinces="[]">Chad</option>
                                        <option value="Chile" data-provinces="[]">Chile</option>
                                        <option value="Comoros" data-provinces="[]">Comoros</option>
                                        <option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
                                        <option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
                                        <option value="Cook Islands" data-provinces="[]">Cook Islands</option>
                                        <option value="Costa Rica" data-provinces="[]">Costa Rica</option>
                                        <option value="Croatia" data-provinces="[]">Croatia</option>
                                        <option value="Cuba" data-provinces="[]">Cuba</option>
                                        <option value="Curaçao" data-provinces="[]">Curaçao</option>
                                        <option value="Cyprus" data-provinces="[]">Cyprus</option>
                                        <option value="Czech Republic" data-provinces="[]">Czech Republic</option>
                                        <option value="Côte d'Ivoire" data-provinces="[]">Côte d'Ivoire</option>
                                        <option value="Denmark" data-provinces="[]">Denmark</option>
                                        <option value="Djibouti" data-provinces="[]">Djibouti</option>
                                        <option value="Dominica" data-provinces="[]">Dominica</option>
                                        <option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
                                        <option value="Finland" data-provinces="[]">Finland</option>
                                        <option value="France" data-provinces="[]">France</option>
                                        <option value="French Guiana" data-provinces="[]">French Guiana</option>
                                        <option value="French Polynesia" data-provinces="[]">French Polynesia</option>
                                        <option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
                                        <option value="Gabon" data-provinces="[]">Gabon</option>
                                        <option value="Gambia" data-provinces="[]">Gambia</option>
                                        <option value="Georgia" data-provinces="[]">Georgia</option>
                                        <option value="Germany" data-provinces="[]">Germany</option>
                                        <option value="Ghana" data-provinces="[]">Ghana</option>
                                        <option value="Gibraltar" data-provinces="[]">Gibraltar</option>
                                        <option value="Greece" data-provinces="[]">Greece</option>
                                        <option value="Greenland" data-provinces="[]">Greenland</option>
                                        <option value="Jersey" data-provinces="[]">Jersey</option>
                                        <option value="Jordan" data-provinces="[]">Jordan</option>
                                        <option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
                                        <option value="Kenya" data-provinces="[]">Kenya</option>
                                        <option value="Kiribati" data-provinces="[]">Kiribati</option>
                                        <option value="Kosovo" data-provinces="[]">Kosovo</option>
                                        <option value="Kuwait" data-provinces="[]">Kuwait</option>
                                        <option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
                                        <option value="Latvia" data-provinces="[]">Latvia</option>
                                        <option value="Lebanon" data-provinces="[]">Lebanon</option>
                                        <option value="Lesotho" data-provinces="[]">Lesotho</option>
                                        <option value="Liberia" data-provinces="[]">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
                                        <option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
                                        <option value="Lithuania" data-provinces="[]">Lithuania</option>
                                        <option value="Luxembourg" data-provinces="[]">Luxembourg</option>
                                        <option value="Macao" data-provinces="[]">Macau SAR China</option>
                                        <option value="Macedonia, Republic Of" data-provinces="[]">Macedonia</option>
                                        <option value="Madagascar" data-provinces="[]">Madagascar</option>
                                        <option value="Malawi" data-provinces="[]">Malawi</option>
                                        <option value="Monaco" data-provinces="[]">Monaco</option>
                                        <option value="Mongolia" data-provinces="[]">Mongolia</option>
                                        <option value="Montenegro" data-provinces="[]">Montenegro</option>
                                        <option value="Montserrat" data-provinces="[]">Montserrat</option>
                                        <option value="Morocco" data-provinces="[]">Morocco</option>
                                        <option value="Mozambique" data-provinces="[]">Mozambique</option>
                                        <option value="Myanmar" data-provinces="[]">Myanmar (Burma)</option>
                                        <option value="Namibia" data-provinces="[]">Namibia</option>
                                        <option value="Nauru" data-provinces="[]">Nauru</option>
                                        <option value="Nepal" data-provinces="[]">Nepal</option>
                                        <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                        <option value="Samoa" data-provinces="[]">Samoa</option>
                                        <option value="San Marino" data-provinces="[]">San Marino</option>
                                        <option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
                                        <option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
                                        <option value="Senegal" data-provinces="[]">Senegal</option>
                                        <option value="Serbia" data-provinces="[]">Serbia</option>
                                        <option value="Seychelles" data-provinces="[]">Seychelles</option>
                                        <option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
                                        <option value="Singapore" data-provinces="[]">Singapore</option>
                                        <option value="Sint Maarten" data-provinces="[]">Sint Marteen</option>
                                        <option value="Slovakia" data-provinces="[]">Slovakia</option>
                                        <option value="Slovenia" data-provinces="[]">Slovenia</option>
                                        <option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
                                        <option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
                                        <option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
                                        <option value="Saint Helena" data-provinces="[]">St. Helena</option>
                                        <option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
                                        <option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
                                        <option value="Saint Martin" data-provinces="[]">St. Martin</option>
                                        <option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
                                        <option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
                                        <option value="Sudan" data-provinces="[]">Sudan</option>
                                        <option value="Suriname" data-provinces="[]">Suriname</option>
                                        <option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
                                        <option value="Swaziland" data-provinces="[]">Swaziland</option>
                                        <option value="Sweden" data-provinces="[]">Sweden</option>
                                        <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                        <option value="Syria" data-provinces="[]">Syria</option>
                                        <option value="Taiwan" data-provinces="[]">Taiwan</option>
                                        <option value="Tajikistan" data-provinces="[]">Tajikistan</option>
                                        <option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
                                        <option value="Togo" data-provinces="[]">Togo</option>
                                        <option value="Tokelau" data-provinces="[]">Tokelau</option>
                                        <option value="Tonga" data-provinces="[]">Tonga</option>
                                        <option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia" data-provinces="[]">Tunisia</option>
                                        <option value="Turkey" data-provinces="[]">Turkey</option>
                                        <option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
                                        <option value="Tuvalu" data-provinces="[]">Tuvalu</option>
                                        <option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
                                        <option value="Uganda" data-provinces="[]">Uganda</option>
                                        <option value="Ukraine" data-provinces="[]">Ukraine</option>
                                        <option value="United Arab Emirates" >United Arab Emirates</option>
                                        <option value="United Kingdom" data-provinces="[]">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay" data-provinces="[]">Uruguay</option>
                                        <option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
                                        <option value="Vanuatu" data-provinces="[]">Vanuatu</option>
                                        <option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
                                        <option value="Venezuela" data-provinces="[]">Venezuela</option>
                                        <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                        <option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
                                        <option value="Western Sahara" data-provinces="[]">Western Sahara</option>
                                        <option value="Yemen" data-provinces="[]">Yemen</option>
                                        <option value="Zambia" data-provinces="[]">Zambia</option>
                                        <option value="Zimbabwe" data-provinces="[]">Zimbabwe</option></select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-zone">Region / State <span class="required-f">*</span></label>
                                        <select id="address_province" name="address[province]" data-default="">
                                      <option value="Alabama">Alabama</option>
                                      <option value="Alaska">Alaska</option>
                                      <option value="American Samoa">American Samoa</option>
                                      <option value="Arizona">Arizona</option>
                                      <option value="Arkansas">Arkansas</option>
                                      <option value="California">California</option>
                                      <option value="Colorado">Colorado</option>
                                      <option value="Connecticut">Connecticut</option>
                                      <option value="Delaware">Delaware</option>
                                      <option value="District of Columbia">District of Columbia</option>
                                      <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                      <option value="Florida">Florida</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Hawaii">Hawaii</option>
                                      <option value="Idaho">Idaho</option>
                                      <option value="Illinois">Illinois</option>
                                      <option value="Indiana">Indiana</option>
                                      <option value="Iowa">Iowa</option>
                                      <option value="Kansas">Kansas</option>
                                      <option value="Kentucky">Kentucky</option>
                                      <option value="Louisiana">Louisiana</option>
                                      <option value="Maine">Maine</option>
                                      <option value="Marshall Islands">Marshall Islands</option>
                                      <option value="Maryland">Maryland</option>
                                      <option value="Massachusetts">Massachusetts</option>
                                      <option value="Michigan">Michigan</option>
                                      <option value="Minnesota">Minnesota</option>
                                      <option value="Mississippi">Mississippi</option>
                                      <option value="Missouri">Missouri</option>
                                      <option value="Montana">Montana</option>
                                      <option value="Nebraska">Nebraska</option>
                                      <option value="Nevada">Nevada</option>
                                      <option value="New Hampshire">New Hampshire</option>
                                      <option value="New Jersey">New Jersey</option>
                                      <option value="New Mexico">New Mexico</option>
                                      <option value="New York">New York</option>
                                      <option value="North Carolina">North Carolina</option>
                                      <option value="North Dakota">North Dakota</option>
                                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                      <option value="Ohio">Ohio</option>
                                      <option value="Oklahoma">Oklahoma</option>
                                      <option value="Oregon">Oregon</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Pennsylvania">Pennsylvania</option>
                                      <option value="Puerto Rico">Puerto Rico</option>
                                      <option value="Rhode Island">Rhode Island</option>
                                      <option value="South Carolina">South Carolina</option>
                                      <option value="South Dakota">South Dakota</option>
                                      <option value="Tennessee">Tennessee</option>
                                      <option value="Texas">Texas</option>
                                      <option value="Utah">Utah</option>
                                      <option value="Vermont">Vermont</option>
                                      <option value="Virgin Islands">Virgin Islands</option>
                                      <option value="Virginia">Virginia</option>
                                      <option value="Washington">Washington</option>
                                      <option value="West Virginia">West Virginia</option>
                                      <option value="Wisconsin">Wisconsin</option>
                                      <option value="Wyoming">Wyoming</option>
                                      <option value="Armed Forces Americas">Armed Forces Americas</option>
                                      <option value="Armed Forces Europe">Armed Forces Europe</option>
                                      <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                       </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                        <label class="form-check-label padding-15px-left">
                                            <input type="checkbox" class="form-check-input" value=""><strong>Create an account ?</strong>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                        <textarea class="form-control resize-both" rows="3"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <button type="submit" class="btn">Complete Order</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table"> 
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            <th>Size</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      {{-- {{$cartItems}} --}}
                                      @foreach ($cartItems as $item)
                                        <tr class="text-center">
                                            <td >{{ $item->name }}</td>
                                            <td>{{ $item->price }} FCFA</td>
                                            <td>XL</td>
                                            <td><input type="text" name="quantity" value="{{ $item->quantity }}" class="text-center" style="width:50px; border-style:none;" disabled/></td>
                                            <td>{{ number_format($item->quantity * $item->price) }}FCFA</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        <tr>
                                            <td colspan="4" class="text-right">Shipping </td>
                                            <td>Free Shipping</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total</td>
                                            <td>{{ Cart::getSubTotal() }} FCFA</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <hr />

                        <div class="your-payment">
                            <h2 class="payment-title mb-3">payment method</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion" class="payment-section">
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">Direct Bank Transfer </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Cheque Payment</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card margin-15px-bottom border-radius-none">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> PayPal </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour"> Payment Information </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                                                <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-country">Credit Card Type <span class="required-f">*</span></label>
                                                                <select name="country_id" class="form-control">
                                                                    <option value=""> --- Please Select --- </option>
                                                                    <option value="1">American Express</option>
                                                                    <option value="2">Visa Card</option>
                                                                    <option value="3">Master Card</option>
                                                                    <option value="4">Discover Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardno">Credit Card Number  <span class="required-f">*</span></label>
                                                                <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                                                                <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label>Expiration Date <span class="required-f">*</span></label>
                                                                <input type="date" name="exdate" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <img class="padding-25px-top xs-padding-5px-top" src="{{ asset('images/payment-img.jpg') }}" alt="card" title="card" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <div class="order-button-payment">
                                                                <button class="btn" value="Place order" type="submit">PAY by Notch Pay</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div> 
                                            </div> 
                                        </div>
                                    </div> 
                                </div>

                                <div class="order-button-payment">
                                    @php
                                    $subtotal = \Cart::getSubTotal();
                                    @endphp
                                   <a href="{{route('payment', $subtotal)}}" class="btn">Payer par NotchPay</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

    <!-- Card Numbe: 4929076432525038 -->
    <!-- EXP : 06/2025 -->
    <!-- CVC : 477 -->
    <!-- Phone : +237698500461 -->
@endsection