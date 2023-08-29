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
                        <a href="index.html">
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